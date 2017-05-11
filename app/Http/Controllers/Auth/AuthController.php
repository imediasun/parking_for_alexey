<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ActivationService;
use App\ActivationRepository;
use App\User;
class AuthController extends Controller
{
    //
    protected $activationService;

    public function __construct(ActivationService $activationService)
    {
        /*$this->middleware('guest');*/
        $this->middleware('guest', ['except' => 'logout']);
        $this->activationService = $activationService;

    }


/*    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $user = $this->create($request->all());

        $this->activationService->sendActivationMail($user);

        return redirect('/login')->with('status', 'Мы послали вам код для активации, проверьте email.');
    }*/
    
    
    public function activateUser($token)
    {
        $activation = $this->activationService->activationRepo->getActivationByToken($token);

        if ($activation === null) {
            return null;
        }



        $user = User::find($activation->user_id);

//установка активации в базе
        $user->activated = true;

        $user->save();

        $this->activationService->activationRepo->deleteActivation($token);

        return redirect('/login')->with('status', 'Ваша запись ативована .');

    }

}
