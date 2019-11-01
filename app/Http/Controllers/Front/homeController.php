<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Categories;
use App\Models\Menus;
use App\Models\News;
use App\Models\SubMenus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class homeController extends Controller
{
    public function index(){
        $carts=Cart::all();

        $news=News::all();
        $menus=Menus::all()->take(4);
        View::share('menus', $menus);
        View::share('carts', $carts);
        View::share('news', $news);
        return view('Front.Home.index');





    }

    public function slide(){
        if( $news=News()->is_slider==1)

//
//        if (Auth::user() &&  Auth::user()->is_admin == 1) {
//            return $next($request);
//        }
//        else{
//            return redirect('/');
//        }

        View::share('news', $news);
        return view('Front.Home.index');

    }

    public function ajax_news_get(){
        $news=News::all()->take(3);
        return $news;
    }

    public function ajax_news_tab(){


        $news=News::all()->take(4);
        return $news;
    }



}
