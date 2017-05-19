<?php

namespace App\Http\Controllers\Admin;

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
            return redirect('good_added');
            //return redirect()->route('good_added');
        } else {
            return redirect()->route('not_confirmed');
        }
    }


    public function edit($operation)
    {
        //dd($operation);

        $this->user = Auth::user();
        if (Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }

        $data['content']['operation'] = $operation;
        $this->title = 'Панель администратора';
        $data['nav']['menu'] = parent::menu();

        $data['content']['tradecentres'] = Tradecentre::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        $this->template = 'admin_page/trade_center/view_trade_centres';
        $data['title'] = "Choose Tradecenter";
        $data['keywords'] = "Parking platform";
        $data['description'] = "Parking platform";

        return $this->renderOutput($data);
    }

    public function edit_center($id)
    {
        //dd($id);

        $this->user = Auth::user();
        if (Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }
        $this->title = 'Панель администратора';
        $data['nav']['menu'] = parent::menu();

        $data['content']['tradecentre'] = Tradecentre::where('id', $id)->get();
        $data['content']['user'] = $data['content']['tradecentre'][0]->users;
        $this->template = 'admin_page/trade_center/edit_trade_center';
        $data['title'] = "Edit Tradecenter";
        $data['keywords'] = "Parking platform";
        $data['description'] = "Parking platform";

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
            DB::table('tradecentres')->where('id', $request->input('id_tradecentre'))->update($tradecentre_set);
            /*DB::table('role_user')->insert($role_user_set);*/
            return redirect()->route('good_added');
        } else {
            return redirect()->route('not_confirmed');
        }
    }
}

