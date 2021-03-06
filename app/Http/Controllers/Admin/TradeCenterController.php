<?php

namespace App\Http\Controllers\Admin;

use App\ParkingPrice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Gate;
use DB;
use App\User;
use App\Tradecentre;

class TradeCenterController extends IndexController
{
    public function __construct()
    {
        parent::__construct();

        $this->template = 'admin_page';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->user = Auth::user();
        if (Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }
        $this->title = 'Панель администратора';
        $data['nav']['menu'] = parent::menu();
        $data['content'] = array();
        $this->template = 'admin_page/trade_center/add_trade_center';
        $data['title'] = "Add tradecentre";
        $data['keywords'] = "Parking platform";
        $data['description'] = "Parking platform";

        return $this->renderOutput($data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function add_center(Request $request)
    {
        dump($request->input());
        //добавляем юзера

        if ($request->input('password') == $request->input('confirm')) {
            $userCreate = [
                'name' => $request->input('ca_name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'information' => ' '
            ];

            DB::table('users')->insert($userCreate);

            $data_user = User::all();
            $last_data_object = collect($data_user)->last();
            $role_user_set = [
                'id' => null,
                'user_id' => $last_data_object['original']['id'],
                'role_id' => 2
            ];
            $main_image = session('file_name_main_image');
            $tradecentre_set = [
                'id' => null,
                'name' => $request->input('name'),
                'user_id' => $last_data_object['original']['id'],
                'image_small' => $main_image[0]['image_small'],
                'image_medium' => $main_image[0]['image_medium'],
                'image_large' => $main_image[0]['image_large'],
                'thumbnail' => $main_image[0]['image_thumbnail'],
                'description' => $request->input('note')
            ];
            DB::table('tradecentres')->insert($tradecentre_set);
            DB::table('role_user')->insert($role_user_set);

            // TODO: why do not redirect by route name?
            return redirect('tradecentre_added');
        } else {
            return redirect('not_confirmed');
        }
    }

    /**
     * @param $operation
     * @return string
     */
    public function edit($operation)
    {
        $this->user = Auth::user();

        if (Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }

        $data['content']['operation'] = $operation;
        $data['content']['tradecentres'] = Tradecentre::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();


        $data['nav']['menu'] = parent::menu();
        $this->template = 'admin_page/trade_center/view_trade_centres';

        return $this->renderOutput($data);
    }

    public function edit_center($id)
    {
        $this->user = Auth::user();

        if (Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }

        $data['content']['tradecentre'] = Tradecentre::where('id', $id)->first();
        $data['content']['user'] = $data['content']['tradecentre']->user;

        //dump($data['content']['tradecentre']->id);
        //dump($data['content']['user']->id);

        $data['nav']['menu'] = parent::menu();
        $this->template = 'admin_page/trade_center/edit_trade_center';

        return $this->renderOutput($data);
    }

    public function update_center(Request $request)
    {
        //обновляем юзера
        if ($request->input('password') == $request->input('confirm')) {
            $userCreate = [
                'name' => $request->input('ca_name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'information' => ' '
            ];

            DB::table('users')->where('id', $request->input('user_id'))->update($userCreate);

            $data_user = User::all();
            $last_data_object = collect($data_user)->last();
            $role_user_set = [
                'id' => null,
                'user_id' => $last_data_object['original']['id'],
                'role_id' => 2
            ];
            $main_image = session('file_name_main_image');
            $tradecentre_set = [
                'id' => $request->input('id_tradecentre'),
                'name' => $request->input('name'),
                'user_id' => $last_data_object['original']['id'],
                'image_small' => $main_image[0]['image_small'],
                'image_medium' => $main_image[0]['image_medium'],
                'image_large' => $main_image[0]['image_large'],
                'thumbnail' => $main_image[0]['image_thumbnail'],
                'description' => $request->input('note')
            ];

            DB::table('tradecentres')
                ->where('id', $request->input('id_tradecentre'))
                ->update($tradecentre_set);

            return redirect('tradecentre_edited');
        } else {
            return redirect('not_confirmed');
        }
    }

    public function parking_prices($id)
    {
        //dd($id);

        $this->user = Auth::user();
        if (Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }

        $this->title = 'Панель администратора';
        $data['nav']['menu'] = parent::menu();

        // Current Tradecentre ID
        $data['content']['id'] = Tradecentre::where('id', $id)->first()->id;

        // Tradecentres (for select)
        $data['content']['tradecentres'] = Tradecentre::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        $data['content']['parking_prices'] = ParkingPrice::where('tradecentre_id', $id)
            ->orderBy('day')
            ->orderBy('time')
            ->get();

        // temporary
        $data['content']['numOfWeek'] = [
            'Sunday',
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
        ];

        $this->template = 'admin_page/trade_center/edit_parking_prices';
        $data['title'] = "Edit Tradecenter";
        $data['keywords'] = "Parking platform";
        $data['description'] = "Parking platform";

        return $this->renderOutput($data);
    }

    public function update_center_price(Request $request)
    {
        $tradecentre_id = $request->input('tradecentre_id');

        $parkingPrice = ParkingPrice::where('tradecentre_id', $tradecentre_id)
            ->where('day', $request->input('day'))
            ->where('time', $request->input('time'))
            ->first();

        if ($parkingPrice === null) {

            // TODO: validation

            $obj = new ParkingPrice();
            $obj->tradecentre_id = $tradecentre_id;
            $obj->day = $request->input('day');
            $obj->time = $request->input('time');
            $obj->price = $request->input('price');
            $obj->save();
        } else {
            // temporary
            $days = [
                'Sunday',
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday',
            ];

            $request->session()->flash(
                'parking_price_already',
                'Day = ' . $days[$parkingPrice->day] . ' and Time = ' . $parkingPrice->time . ' is already exists!'
            );
        }

        return redirect('/admin/parking_prices/' . $tradecentre_id);
    }

    public function parking_price_delete($tradecentre_id, $id)
    {
        ParkingPrice::where('id', $id)
            ->where('tradecentre_id', $tradecentre_id)
            ->delete();

        return redirect('/admin/parking_prices/' . $tradecentre_id);
    }
}

