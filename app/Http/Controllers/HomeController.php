<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showAuthorizationForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'app_key' => 'required|exists:applications,key,is_active,1',
            'redirect_uri' => 'required:active_url',
        ]);

        if (! $validator->passes()) {
            return view('authorize-app')->withInvalid('true');
        }

        $app = Application::whereKey($request->app_key)->first();

        return view('authorize-app', compact('app'));
    }

    public function authorizeApp(Request $request)
    {
        // Проверка параметров валидации...
        $validator = Validator::make($request->all(), [
            'app_key' => 'required|exists:applications,key,is_active,1',
            'redirect_uri' => 'required:active_url',
        ]);

        if (! $validator->passes()) {
            return redirect()->back()->withMessage('Неверные параметры авторизации');
        }

        // Проверим логин/пароль пользователя...
        if (! Auth::validate($request->only(['email', 'password']))) {
            return redirect()->back()->withMessage('Неверный логин или пароль');
        }

        $app = Application::whereKey($request->app_key)->first();

        $user = User::whereEmail($request->email)->first();

        // Генерация кода авторизации для приложения..
        $pivotData = ['Authorization_code' => $code = sha1($app->id.':'.$user->id.str_random())];

        // Обновим данные связующей таблицы...
        if ($app->users->contains($user)) {
            $app->users()->updateExistingPivot($user->id, $pivotData);
        } else {
            $app->users()->attach($user->id, $pivotData);
        }

        // Перейдем по указанному  redirect_uri с кодом...
        return redirect()->away($request->redirect_uri.'?code='.$code);
    }
}
