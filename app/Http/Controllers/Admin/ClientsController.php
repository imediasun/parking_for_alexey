<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Requests\ClientFormRequest;
use Illuminate\Http\Request;
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

        $data['content']['clients'] = Client::all();

        $data['nav']['menu'] = parent::menu();
        $this->template = 'admin_page/clients/index';

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
     * @param Client $client
     * @return string
     */
    public function edit(Client $client)
    {
        $this->user = Auth::user();

        if (Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }

        $data['content']['client'] = $client;

        $data['nav']['menu'] = parent::menu();
        $this->template = 'admin_page/clients/edit';

        return $this->renderOutput($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ClientFormRequest $request
     * @param Client $client
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ClientFormRequest $request, Client $client)
    {
        $client->update($request->all());

        return redirect()
            ->route('admin.clients.index', [$client])
            ->withSuccess('Client updated.');
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
            ->route('admin.clients.index')
            ->withSuccess('Client deleted.');
    }
}
