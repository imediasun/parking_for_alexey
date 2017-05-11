<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Controllers\MenuController;
class CenterAdminIndexController extends AdminController
{
    public function index(){
        $this->user=Auth::user();
        //подключить меню
        $data['nav']['menu']=MenuController::index('center_admin_categories');



        $this->template='admin_page/center_admin';


        $this->title = 'Панель администратора';


        return $this->renderOutput($data);
    }
}
