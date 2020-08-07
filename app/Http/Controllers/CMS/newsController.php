<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class newsController extends Controller
{
    public function index()
    {
         $news=News::all();
         View::share('news', $news);
         return view('CMS.news.list');
    }



    public function create(){
        return view('CMS.news.create');
    }

    public function create_post(Request $request)
    {


        $news = new News();
        $news->title = \Illuminate\Support\Facades\Request::Input('title');
        $news->content =\Illuminate\Support\Facades\Request::Input('content');
        $news->is_slider = \Illuminate\Support\Facades\Request::Input('is_slider');

        if (\Illuminate\Support\Facades\Request::hasFile('image')) {
            $file = \Illuminate\Support\Facades\Request::file('image');
            $file->move(public_path() . '/images/news', $file->getClientOriginalName());
            $news->img_url = $file->getClientOriginalName();
        }

        $news->save();
        return redirect()->route('CMS.news.create');
    }


    public function remove($id){
        $news=News::find($id);
        $news->delete();
        return redirect()->route('CMS.news.list');
    }


    public function edit($id){

        $news=News::find($id);
        View::share('news', $news);
        return view('CMS.news.edit');
    }

    public function edit_post($id){
        $news=News::find($id);
        if(\Illuminate\Support\Facades\Request::hasfile('image')){
            $image_path=public_path() . '/images/news/' .$news->img_url;
            unlink($image_path);
            $file = \Illuminate\Support\Facades\Request::file('image');
            $file->move(public_path() . '/images/news', $file->getClientOriginalName());
            $news->img_url=$file->getClientOriginalName();
        }
        $news->title=\Illuminate\Support\Facades\Request::Input('title');
        $news->content=\Illuminate\Support\Facades\Request::Input('content');
        $news->save();

        return redirect()->route('CMS.news.list');

    }

}







