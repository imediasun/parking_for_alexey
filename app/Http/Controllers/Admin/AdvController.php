<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Gate;
use DB;
use App\User;

class AdvController extends IndexController
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
        $this->template = 'admin_page/adv/add_adv';
        $data['title'] = "Add advert";
        $data['keywords'] = "Advert";
        $data['description'] = "Advert";

        return $this->renderOutput($data);
    }

    public function add_adv(Request $request)
    {
        dump($request->input());
    }

    public function edit($operation)
    {
        $this->user = Auth::user();
        if (Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }

        $data['content']['operation'] = $operation;
        $this->title = 'Панель администратора';
        $data['nav']['menu'] = parent::menu();

        $data['content']['tradecentres'] = [];

//        $data['content']['tradecentres'] = Tradecentre::orderBy('created_at', 'desc')
//            ->orderBy('updated_at', 'desc')
//            ->get();

        $this->template = 'admin_page/adv/view_advs';
        $data['title'] = "";
        $data['keywords'] = "";
        $data['description'] = "";

        return $this->renderOutput($data);
    }
}
