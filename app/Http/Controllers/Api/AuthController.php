<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Application;

class AuthController extends Controller
{
    public function authenticateApp(Request $request){

        $credentials = base64_decode(
            Str::substr($request->header('Authorization'), 6)
        );

        try {
            list($appKey, $appSecret) = explode(':', $credentials);
            $app = Application::whereKeyAndSecret($appKey, $appSecret)->firstOrFail();
        } catch (\Throwable $e) {
            return response('invalid_credentials', 400);
        }

        if (! $app->is_active) {
            return response('app_inactive', 403);
        }

        return response([
            'token_type' => 'Bearer',
            'access_token' => $app->generateAuthToken(),
        ]);
    }

    public function authenticateUser(Request $request)
    {
        $code = $request->json('code');

        $app = $request->__authenticatedApp;

        if (! $code || ! $user = $app->users()->wherePivot('Authorization_code', $code)->first()) {
            return response('invalid_code', 400);
        }

        $app->users()->updateExistingPivot($user->id, ['Authorization_code' => null]);

        return response([
            'token_type' => 'Bearer',
            'access_token' => $user->generateAuthToken($app),
        ]);
    }

    public function logoutUser(Request $request){}
}
