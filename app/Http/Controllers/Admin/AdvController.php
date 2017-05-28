<?php

namespace App\Http\Controllers\Admin;

use App\Adv;
use App\Tradecentre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

/**
 * Class AdvController
 * @package App\Http\Controllers\Admin
 */
class AdvController extends IndexController
{
    /**
     * AdvController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->template = 'admin_page';
    }

    /**
     * Show Form Ad to Add
     *
     * @return string
     */
    public function index()
    {
        $this->user = Auth::user();

        if (Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }

        $data['content']['tradecentres'] = Tradecentre::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        $data['nav']['menu'] = parent::menu();
        $this->template = 'admin_page/adv/add_adv';

        return $this->renderOutput($data);
    }

    /**
     * Create Ad
     *
     * @param Request $request
     * @param Adv $adv
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function add_adv(Request $request, Adv $adv)
    {
        $mainImage = session('file_name_main_image');
        $data = [
            'tradecentre_id'    => $request->input('tradecentre_id'),
            'title'             => $request->input('title'),
            'short_description' => $request->input('short_description'),
            'large_description' => $request->input('large_description'),
            'image_small'       => $mainImage[0]['image_small'],
            'image_medium'      => $mainImage[0]['image_medium'],
            'image_large'       => $mainImage[0]['image_large'],
            'thumbnail'         => $mainImage[0]['image_thumbnail'],
        ];

        // TODO: add validation
        if (true) {
            $adv->create($data);
            return redirect('ad_added');
        } else {
            return redirect('not_confirmed');
        }
    }

    /**
     * Select Ad to Edit
     *
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
        $data['content']['advs'] = Adv::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        $data['nav']['menu'] = parent::menu();
        $this->template = 'admin_page/adv/view_advs';

        return $this->renderOutput($data);
    }

    /**
     * Show Form Ad to Edit
     *
     * @param $id
     * @return string
     */
    public function edit_adv($id)
    {
        $this->user = Auth::user();

        if (Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }

        $data['content']['tradecentres'] = Tradecentre::all();
        $data['content']['adv'] = Adv::where('id', $id)->get();

        $data['nav']['menu'] = parent::menu();
        $this->template = 'admin_page/adv/edit_adv';

        return $this->renderOutput($data);
    }

    /**
     * Update Ad
     *
     * @param Request $request
     * @param Adv $adv
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update_adv(Request $request, Adv $adv)
    {
        $mainImage = session('file_name_main_image');
        $data = [
            'tradecentre_id'    => $request->input('tradecentre_id'),
            'title'             => $request->input('title'),
            'short_description' => $request->input('short_description'),
            'large_description' => $request->input('large_description'),
            'image_small'       => $mainImage[0]['image_small'],
            'image_medium'      => $mainImage[0]['image_medium'],
            'image_large'       => $mainImage[0]['image_large'],
            'thumbnail'         => $mainImage[0]['image_thumbnail'],
        ];

        // TODO: add validation
        if (true) {
            $adv->update($data);
            return redirect('ad_edited');
        } else {
            return redirect('not_confirmed');
        }
    }
}
