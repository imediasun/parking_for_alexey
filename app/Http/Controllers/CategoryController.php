<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
use App\Http\Libraries\Display_lib;
class CategoryController extends Controller
{
    public function index($id)
    {
        //Get data from DB

        //menu
        $data_nav['menu']=MenuController::index('categories');

        //goods
        $data_content['goods']['akcionniy']=Good::where([
            ['type', '=', '1'],
            ['category', '=', $id]
        ])
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            
            ->get();
        $data_content['goods']['optoviy']=Good::where([
            ['type', '=', '2'],
            ['category', '=', $id]
        ])
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            
            ->get();
        $data_content['goods']['rozdribniy']=Good::where([
            ['type', '=', '3'],
            ['category', '=', $id]
        ])
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            
            ->get();
        //page
        $path='category_page';
        $data_content['title']="Industry";
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::index($path,$data,$data_nav,$data_content);
    }
}
