<?php

namespace App\Http\Controllers\Admin;

use App\Adv;
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

    public function add_adv(Request $request, Adv $adv)
    {
        $mainImage = session('file_name_main_image');
        $data = [
            'title'             => $request->input('title'),
            'short_description' => $request->input('short_description'),
            'large_description' => $request->input('large_description'),
            'image_small'       => $mainImage[0]['image_small'],
            'image_medium'      => $mainImage[0]['image_small'],
            'image_large'       => $mainImage[0]['image_small'],
            'thumbnail'         => $mainImage[0]['image_small'],
        ];

        // TODO: add validation

        if (true) {
            $adv->create($data);
            return redirect('good_added');
        } else {
            return redirect('not_confirmed');
        }
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

        $data['content']['advs'] = Adv::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        $this->template = 'admin_page/adv/view_advs';
        $data['title'] = "";
        $data['keywords'] = "";
        $data['description'] = "";

        return $this->renderOutput($data);
    }

    public function edit_adv($id)
    {
        //dd($id);

        $this->user = Auth::user();
        if (Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }
        $this->title = 'Панель администратора';
        $data['nav']['menu'] = parent::menu();

        $data['content']['adv'] = Adv::where('id', $id)->get();
        $this->template = 'admin_page/adv/edit_adv';
        $data['title'] = "";
        $data['keywords'] = "";
        $data['description'] = "";

        return $this->renderOutput($data);
    }
    

    public function update_adv(Request $request, Adv $adv)
    {
        $mainImage = session('file_name_main_image');
        $data = [
            'title'             => $request->input('title'),
            'short_description' => $request->input('short_description'),
            'large_description' => $request->input('large_description'),
            'image_small'       => $mainImage[0]['image_small'],
            'image_medium'      => $mainImage[0]['image_small'],
            'image_large'       => $mainImage[0]['image_small'],
            'thumbnail'         => $mainImage[0]['image_small'],
        ];

        // TODO: add validation

        if (true) {
            $adv->update($data);
            return redirect('good_added');
        } else {
            return redirect('not_confirmed');
        }
    }
}
