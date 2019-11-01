<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\SubMenus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class blog_tekController extends Controller
{
    public function index($id){
        $news=News::where('id', $id)->get();
        View::share('news', $news);
        return view('Front.Home.blog_tek');
    }


}
