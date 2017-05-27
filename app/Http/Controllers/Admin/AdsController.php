<?php

namespace App\Http\Controllers\Admin;

use App\Adv;
use Illuminate\Http\Request;
use Auth;
use Gate;


/**
 * Class AdsController
 * @package App\Http\Controllers\Admin
 */
class AdsController extends IndexController
{
    /**
     * ClientsController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->template = 'admin_page';
    }

    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $this->user = Auth::user();

        if (Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }

        $data['content']['ads'] = Adv::all();

        $data['nav']['menu'] = parent::menu();
        $this->template = 'admin_page/ads/index';

        return $this->renderOutput($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Delete Ad
     *
     * @param Adv $ad
     * @return mixed
     */
    public function delete(Adv $ad)
    {
        $ad->delete();

        return redirect()
            ->route('admin.ads.index')
            ->withSuccess('Ad deleted.');
    }
}
