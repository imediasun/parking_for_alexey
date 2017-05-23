<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use DB;
use App\Question;

class HomeController extends ApiController
{
    public function authorizeApp(Request $request)
    {
    }

    public function appData(Request $request)
    {


        dd($request->input('main'));

/*        DB::table('clients')->insert(
            [
                'company_name' => $main['company_name'],
                'first_name' => $main['first_name'],
                'last_name' => $main['last_name'],
                'street_house_number' => $main['street_house_number'],
                'zip_code' => $main['zip_code'],
                'city' => $main['city'],
                'different' => ($main['different'] == 'true') ? 1 : 0,
                'active' => $main['active'],
                'install_street_house_number' => $main['install_street_house_number'],
                'install_zip_code' => $main['install_zip_code'],
                'install_city' => $main['install_city'],
                'email' => $main['email'],
                'telephone' => $main['telephone'],
                'reachability' => $main['reachability'],
                'service' => $main['service'],
                'comments' => $main['comments'],
                'comments_hidden' => ($main['comments_hidden'] == 'true') ? 1 : 0,
            ]
        );*/


        //получить последний id из таблицы clients


        return $request->__authenticatedApp;
    }
}
