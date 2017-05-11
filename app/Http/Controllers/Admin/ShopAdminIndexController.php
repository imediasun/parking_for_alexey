<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Controllers\MenuController;
class ShopAdminIndexController extends AdminController
{
    public function index(){
        $this->user=Auth::user();
        //подключить меню
        $data['nav']['menu']=MenuController::index('admin_categories');



        $this->template='admin_page/shop_admin';


        $this->title = 'Панель администратора';


        return $this->renderOutput($data);
    }
}
