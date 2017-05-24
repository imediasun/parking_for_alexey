<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Http\Libraries\Display_lib;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class AdminController
 * @package App\Http\Controllers\Admin
 */
class AdminController extends Controller
{
    protected $g_rep;
    protected $user;
    protected $template;
    protected $content = false;
    protected $title;
    protected $vars;

    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *
     */
    public function index()
    {
    }

    /**
     * @param $data
     * @return string
     */
    public function renderOutput($data)
    {
        $data['title'] = "Meta Title";
        $data['keywords'] = "Meta Keywords";
        $data['description'] = "Meta Description";

        return Display_lib::admin($this->template, $data);
    }
}
