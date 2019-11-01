<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Menus;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class categoriesController extends Controller
{
    public function index(){

        $news=News::all();
        $menus=Menus::all();
        View::share('menus', $menus);
        View::share('news', $news);



        return view('Front.Home.categories');
    }

}
