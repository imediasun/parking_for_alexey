<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use Auth;
use App\Http\Controllers\MenuController;

/**
 * Class IndexController
 * @package App\Http\Controllers\Admin
 */
class IndexController extends AdminController
{
    /**
     * IndexController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function menu()
    {
        if ($this->user->status == 1) {
            return $this->menu = MenuController::index('super_admin_categories');
        }
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|string
     */
    public function index()
    {
        $this->user = Auth::user();

        if ($this->user->roles[0]->id == 1) {
            if (Gate::denies('VIEW_ADMIN')) {
                abort(403);
            }

            return redirect()->route('super_admin');
        }

        if ($this->user->roles[0]->id == 2) {
            if (Gate::denies('ADMIN_USERS')) {
                abort(403);
            }

            return redirect()->route('center_admin');
        }

        if ($this->user->roles[0]->id == 3) {
            if (Gate::denies('SELF_ADMIN')) {
                abort(403);
            }

            return redirect()->route('shop_admin');
        }

        $data = array();
        $this->title = 'Панель администратора';

        return $this->renderOutput($data);
    }
}
