<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Gate;
use DB;
use App\User;
class TradeCenterController extends IndexController
{
    public function __construct()
    {
        parent::__construct();




        $this->template='admin_page';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function index(){
        $this->user=Auth::user();
        if(Gate::denies('VIEW_ADMIN')){

            abort(403);
        }
        $this->title = 'Панель администратора';
        $data['nav']['menu']=parent::menu();
        $this->template='admin_page/trade_center/add_trade_center';
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";

        return $this->renderOutput($data);
    }

    public function add_center(Request $request){
dump($request->input());
        //добавляем юзера

        if($request->input('password')==$request->input('confirm')){
            $userCreate=  [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'information'=>' '
            ];

            DB::table('users')->insert($userCreate);

            $data_user = User::all();
            $last_data_object = collect($data_user)->last();
            $role_user_set=[
                'id' => NULL,
                'user_id'  => $last_data_object['original']['id'],
                'role_id'=> 2
            ];
            $main_image=session('file_name_main_image');
            $tradecenter_set=[
                'id' => NULL,
                'id_user'  => $last_data_object['original']['id'],
                'image_small'=>$main_image[0]['image_small'],
            'image_medium'=>$main_image[0]['image_medium'],
            'image_large'=>$main_image[0]['image_large'],
            'thumbnail'=>$main_image[0]['image_thumbnail'],
            'description'=> $request->input('note')
            ];
            DB::table('tradecentres')->insert($tradecenter_set);
            DB::table('role_user')->insert($role_user_set);
            return redirect()->route('good_added');

        }
        else{
            return redirect()->route('not_confirmed');

        }


    }
}
