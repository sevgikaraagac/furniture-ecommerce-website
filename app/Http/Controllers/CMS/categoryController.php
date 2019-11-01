<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Urunler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class categoryController extends Controller
{
    public function index(){
        $categories=Categories::all();
        View::share('categories', $categories);
        return view('CMS.categories.list');
    }
    public function create(){
        return view('CMS.categories.create');
    }
    public function create_post()
    {
        $categories = new Categories();
        $categories->title = \Illuminate\Support\Facades\Request::Input('title');
        $categories->content = \Illuminate\Support\Facades\Request::Input('content');

        if (\Illuminate\Support\Facades\Request::hasFile('image')) {
            $file = \Illuminate\Support\Facades\Request::file('image');
            $file->move(public_path() . '/images/category', $file->getClientOriginalName());
            $categories->img_url = $file->getClientOriginalName();
        }
        $categories->save();
        return redirect()->route('CMS.categories.create');
    }

    public function remove($id)
    {
        $category = Categories::find($id);
        $category->delete();
        return redirect()->route('CMS.categories.list');
    }

    public function edit($id){
        $category=Categories::find($id);
        View::share('categories', $category);
        return view('CMS.categories.edit');
    }



}
