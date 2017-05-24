<?php

namespace App\Http\Controllers\Api;

use App\Adv;
use App\Parking;
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
        $main = $request->input('main');

        /*
        DB::table('clients')->insert(
            [
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
            ]
        );
        */

        //получить последний id из таблицы clients


        return $request->__authenticatedApp;
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

        if (! $validator->fails()) {
            $objParking = Parking::create([
                'client_id'        => $data['client_id'],
                'parking_price_id' => 2,
                'on_parking'       => 1,
                'check_in_time'    => $check_in_time,
                'check_out_time'   => $check_in_time,
                'cost'             => 5,
            ]);

//            $obj = Parking::where('id', $objParking->id)
//                ->where('client_id', $client_id)
//                ->first();

//            $ads = $obj->ads->all();
        }

        return json_encode([
            'app'   => $request->__authenticatedApp,
//            'pid'   => $objParking->id,
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
                    'parking_price_id' => 2,
                    'check_out_time'   => $check_out_time,
                    'on_parking'       => 0,
                    'cost'             => 0,
                ]
            );
        }

        return json_encode([
            'app'   => $request->__authenticatedApp,
            'error' => $validator->errors(),
        ]);
    }
}
