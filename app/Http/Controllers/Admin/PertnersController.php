<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Logo;
use Illuminate\Support\Facades\Gate;
class PertnersController extends AdminController
{
    public function index(){
        /*$this->user=Auth::user();*/

        if(Gate::denies('VIEW_ADMIN')){

            abort(403);
        }

        $this->title = 'Панель администратора';
        $data['partners']=Partner::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();


        $this->template='admin_page/partners';
        $data['title']="Партнери";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";

        return $this->renderOutput($data);
    }

    public function del_logos(){
        /*$this->user=Auth::user();*/

        if(Gate::denies('VIEW_ADMIN')){

            abort(403);
        }

        $this->title = 'Панель администратора';
        $data['logos']=Logo::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();


        $this->template='admin_page/del_logos';
        $data['title']="Партнери";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";

        return $this->renderOutput($data);
    }

    public function add_logos(){
        /*$this->user=Auth::user();*/

        if(Gate::denies('VIEW_ADMIN')){

            abort(403);
        }

        $this->title = 'Панель администратора';
        


        $this->template='admin_page/add_logos';
        $data['title']="Партнери";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";

        return $this->renderOutput($data);
    }
}
