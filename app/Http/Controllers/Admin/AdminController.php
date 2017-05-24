<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

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

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    }

    public function renderOutput($data)
    {
        /*$this->vars = arry_add($this->vars,'title',$this->title);*/

        //передача в вид через Display_Lib

        $data['title'] = "Фрилансим по крупному";
        $data['keywords'] = "Фрилансим по крупному";
        $data['description'] = "Фрилансим по крупному";

        return \App\Http\Libraries\Display_lib::admin($this->template, $data);
    }
}
