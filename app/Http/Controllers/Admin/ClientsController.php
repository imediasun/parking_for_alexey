<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Gate;

/**
 * Class ClientsController
 * @package App\Http\Controllers\Admin
 */
class ClientsController extends IndexController
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

        $data['content']['clients'] = Client::get();

        //dd($data['content']['clients']);

        $this->title = 'Панель администратора';
        $data['nav']['menu'] = parent::menu();
        $this->template = 'admin_page/clients';

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Delete Client
     *
     * @param Client $client
     * @return mixed
     */
    public function delete(Client $client)
    {
        $client->delete();

        return redirect()
            ->route('admin.clients.index');
    }
}
