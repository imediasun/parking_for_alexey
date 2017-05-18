<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use App\Category;
use App\Type_of_good;
use App\User;
use App\Role;
use Auth;
class CustomersController extends IndexController
{
    public function __construct()
    {
        parent::__construct();



        
        $this->template='admin_page';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
       $this->user=Auth::user();


        if(Gate::denies('VIEW_ADMIN')){

            abort(403);
        }

        // test redirect by route name
        //return redirect()->route('good_added');

        $this->title = 'Панель администратора';
        /*$data['categories']=Category::orderBy('parent_id', 'asc')
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();*/
        $data['nav']['menu']=parent::menu();
        /*$data['types']=Type_of_good::get();*/
        $data['users']=User::get();
        $data['roles']=Role::get();
        $this->template='admin_page/customers_managment';
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";

        //dd($data);

        return $this->renderOutput($data);
    }

}
