<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Type_of_good;
use App\Http\Controllers\MenuController;
use Gate;
class AdminController extends Controller
{

    public function __construct()
    {

    $this->middleware('auth');
        Auth::login(User::find(1));
        if(Gate::denies('VIEW_ADMIN')){
            dd(Gate::check('VIEW_ADMIN'));
            abort(403);
        }
    }
    
    
    
    
    private function menu(){
    return $data_nav['menu']=MenuController::index('admin_categories');

    }
    public function index()
    {


        $data_nav['menu']=$this->menu();
        $path='admin_page';
        $data['title']="Фрилансим по крупному";
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return \App\Http\Libraries\Display_lib::admin($path,$data,$data_nav);
    }

    public function customers_registration()
    {


        $data_nav['menu']=$this->menu();
        $path='admin_page/customers_managment';
        $data['title']="Фрилансим по крупному";
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return \App\Http\Libraries\Display_lib::admin($path,$data,$data_nav);
    }

    public function add_good()
    {

        $data['categories']=Category::orderBy('parent_id', 'asc')
        ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        $data['types']=Type_of_good::get();
        
        $data_nav['menu']=$this->menu();
        $path='admin_page/add_good';
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";
        return \App\Http\Libraries\Display_lib::admin($path,$data,$data_nav);
    }
    public function add_logos()
    {

      

        $data_nav['menu']=$this->menu();
        $path='admin_page/add_logos';
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";
        return \App\Http\Libraries\Display_lib::admin($path,$data,$data_nav);
    }
    public function del_logos()
    {
        $data_nav['menu']=$this->menu();
        $path='admin_page/del_logos';
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";
        return \App\Http\Libraries\Display_lib::admin($path,$data,$data_nav);
    }
    public function ajax_usersessions(Request $request)
    {

        if ($request->ajax()) {
            print('123');
        }
    }
}
