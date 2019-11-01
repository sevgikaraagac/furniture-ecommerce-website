<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Menus;
use App\Models\News;
use App\Models\SubMenus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class singleController extends Controller
{
    public function index($id){
//        $menus=SubMenus::where('menu_id', $id)->get();
        $menus=SubMenus::where('menu_id', $id)->get();
        View::share('menus', $menus);
        return view('Front.Home.single');
    }

}
