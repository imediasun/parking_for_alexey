<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MenuController;
class SuperAdminIndexController extends AdminController
{




    public function index(){
        $this->user=Auth::user();
        //подключить меню
        $data['nav']['menu']=MenuController::index('super_admin_categories');

        $data['content']=array();

        $this->template='admin_page/super_admin';


        $this->title = 'Панель администратора';

        
        return $this->renderOutput($data);
    }
}
