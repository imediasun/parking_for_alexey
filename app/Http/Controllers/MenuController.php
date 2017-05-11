<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MenuController extends Controller
{
    //
    static public function index($index){
    
        return DB::table($index)
            ->get(); 
        
    }
}
