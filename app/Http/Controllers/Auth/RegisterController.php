<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
use Illuminate\Http\Request;
use App\ActivationService;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the customers_managment of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after customers_managment.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    protected $activationService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ActivationService $activationService)
    {
        /*$this->middleware('guest');*/
        $this->middleware('guest', ['except' => 'logout']);
        $this->activationService = $activationService;
    }

    /**
     * Get a validator for an incoming customers_managment request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid customers_managment.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {



       $userCreate=  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
           'information'=>' '
        ]);



        $data_user = User::all();
        $last_data_object = collect($data_user)->last();

        $role_user_set=[
            'id' => NULL,
            'user_id'  => $last_data_object['original']['id'],
            'role_id'=> 3

        ];
        DB::table('role_user')->insert($role_user_set);
        /*$this->mail();*/
        return $userCreate;
    }


    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $user = $this->create($request->all());

        $this->activationService->sendActivationMail($user);

        return redirect('/login')->with('status', 'Ми відправили вам лист про активацію email.');
    }   
    
    private function mail(){
        dd('mail');
    }
}
