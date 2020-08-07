<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index(){
        return view('Front.Home.about');

    }

    public function ajaxnewsget(){
        $news=News::all();
        return $news;
    }

    public function ajaxnews_mission(){
        $news=News::all();
        return $news;
    }

}
