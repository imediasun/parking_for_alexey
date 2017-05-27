<?php

namespace App\Http\Controllers\Api;

use App\Adv;
use App\Client;
use App\Parking;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends ApiController
{
    public function authorizeApp(Request $request)
    {
        // Проверка параметров валидации...
        $validator = Validator::make($request->all(), [
            'app_key'      => 'required|exists:applications,key,is_active,1',
            'redirect_uri' => 'required:active_url',
        ]);

        if (!$validator->passes()) {
            return redirect()->back()->withMessage('Неверные параметры авторизации');
        }

        // Проверим логин/пароль пользователя...
        if (!Auth::validate($request->only(['email', 'password']))) {
            return redirect()->back()->withMessage('Неверный логин или пароль');
        }

        $app = Application::whereKey($request->app_key)->first();

        $user = User::whereEmail($request->email)->first();

        // Генерация кода авторизации для приложения..
        $pivotData = ['Authorization_code' => $code = sha1($app->id . ':' . $user->id . str_random())];

        // Обновим данные связующей таблицы...
        if ($app->users->contains($user)) {
            $app->users()->updateExistingPivot($user->id, $pivotData);
        } else {
            $app->users()->attach($user->id, $pivotData);
        }

        // Перейдем по указанному  redirect_uri с кодом...
        return redirect()->away($request->redirect_uri . '?code=' . $code);
    }

    public function userData(Request $request)
    {
        return [
            'app'  => $request->__authenticatedApp,
            'user' => $request->__authenticatedUser,
        ];
    }

    public function appData(Request $request)
    {
        $main = $request->input('main');

        return json_encode([
            'app' => $request->__authenticatedApp,
        ]);
    }

    public function registration(Request $request)
    {
        $main = $request->input('main');

        $objClient = Client::create([
            'company_name'                => $main['company_name'],
            'first_name'                  => $main['first_name'],
            'last_name'                   => $main['last_name'],
            'street_house_number'         => $main['street_house_number'],
            'zip_code'                    => $main['zip_code'],
            'city'                        => $main['city'],
            'different'                   => ($main['different'] == 'true') ? 1 : 0,
            'active'                      => $main['active'],
            'install_street_house_number' => $main['install_street_house_number'],
            'install_zip_code'            => $main['install_zip_code'],
            'install_city'                => $main['install_city'],
            'email'                       => $main['email'],
            'telephone'                   => $main['telephone'],
            'reachability'                => $main['reachability'],
            'service'                     => $main['service'],
            'comments'                    => $main['comments'],
            'comments_hidden'             => ($main['comments_hidden'] == 'true') ? 1 : 0,
        ]);

        //получить последний id из таблицы clients

        return json_encode([
            'app'       => $request->__authenticatedApp,
            'client_id' => $objClient->id,
        ]);
    }

    /**
     * Parking - check_in_time
     * @param Request $request
     * @return string
     */
    public function checkInTime(Request $request)
    {
        $data = $request->input('main');

        // Transform
        $check_in_time = array_get($data, 'check_in_time');
        $check_in_time = date('Y-m-d H:i:s', strtotime($check_in_time));
        $data['check_in_time'] = $check_in_time;

        $validator = \Validator::make($data, [
            'check_in_time' => 'date_format:"Y-m-d H:i:s"|required',
        ]);

        if (!$validator->fails()) {
            $objParking = Parking::create([
                'client_id'      => $data['client_id'],
                'check_in_time'  => $check_in_time,
                'check_out_time' => $check_in_time,
                'on_parking'     => 1,
                'cost'           => 0,
            ]);

//            $obj = Parking::where('id', $objParking->id)
//                ->where('client_id', $client_id)
//                ->first();

//            $ads = $obj->ads->all();
        }

        return json_encode([
            'app'   => $request->__authenticatedApp,
//            'pid'   => $objParking,
//            'ads'   => $ads,
            'error' => $validator->errors(),
        ]);
    }

    /**
     * Parking - check_out_time
     * @param Request $request
     * @return string
     */
    public function checkOutTime(Request $request)
    {
        $data = $request->input('main');

        // Transform
        $check_out_time = array_get($data, 'check_out_time');
        $check_out_time = date('Y-m-d H:i:s', strtotime($check_out_time));
        $data['check_out_time'] = $check_out_time;

        $validator = \Validator::make($data, [
            'check_out_time' => 'date_format:"Y-m-d H:i:s"|required',
        ]);

        if (!$validator->fails()) {
            DB::table('parking')
                ->where('on_parking', 1)
                ->where('client_id', $data['client_id'])
                ->update([
                        'check_out_time' => $check_out_time,
                        'on_parking'     => 0,
                        'cost'           => 0,
                    ]
                );
        }

        return json_encode([
            'app'   => $request->__authenticatedApp,
            'error' => $validator->errors(),
        ]);
    }
}
