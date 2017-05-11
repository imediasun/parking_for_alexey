<?php

namespace App\Http\Middleware;

use Closure;
use Firebase\JWT\JWT;
use App\Application;
use Validator;
class ApiAppAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


		$authToken = $request->bearerToken();


        try {
            // проверка валидности токена
           $this->payloadIsValid(


            // JWT::decode  принимает строку с токеном первым аргументом
            // затем ключ, которым закодирован токен
            //  и список алгоритмов

               $payload = (array) JWT::decode($authToken, 'w5yuCV2mQDVTGmn3', ['HS256'])

           );

        $app =  Application::where('key',$payload['sub'])->firstOrFail();

        } catch (\Firebase\JWT\ExpiredException $e) {
            return response('token_expired', 401);
        } catch (\Throwable $e) {
            return response('token_invalid', 401);
        }

        if (! $app->is_active) {
            return response('app_inactive', 403);
        }

        // Получив инстанс аутентифицированного приложения
        // передаем его в Request. Это позволит нам 
        // иметь легкий доступ к  инстансу приложения повсеместно.
        $request->merge(['__authenticatedApp' => $app]);

        return $next($request);
    }

    private function payloadIsValid($payload)
    {



        $validator = Validator::make($payload, [
            'iss' => 'required|in:interdomus',
            'sub' => 'required',
        ]);


        if (! $validator->passes()) {
            throw new \InvalidArgumentException;
        }
    }
}
