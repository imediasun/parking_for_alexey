<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Gate;
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
       dd($request->input()); 
    }
}
