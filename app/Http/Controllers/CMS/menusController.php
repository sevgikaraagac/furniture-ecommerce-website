<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Menus;
use App\Models\News;
use App\Models\SubMenus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class menusController extends Controller
{
    public  function index(){
        $menus=Menus::all();
        View::share('menus', $menus);
        return view('CMS.menu.list');
    }


    public function create(){
        return view('CMS.menu.create');
    }

    public function create_post(){
        $menus=new Menus();
        $menus->title=\Illuminate\Support\Facades\Request::Input('title');
        $menus->content=\Illuminate\Support\Facades\Request::Input('content');
        $menus->order=\Illuminate\Support\Facades\Request::Input('order');

        if (\Illuminate\Support\Facades\Request::hasFile('image')) {
            $file = \Illuminate\Support\Facades\Request::file('image');
            $file->move(public_path() . '/images/menus', $file->getClientOriginalName());
            $menus->img_url = $file->getClientOriginalName();
        }

        $menus->save();
        return redirect()->route('CMS.menu.create');
    }

    public function createsub(){

        $menus=Menus::all();
        View::share('menus', $menus);
        return view('CMS.menu.createsub');
    }
    public function createSub_post(){
        $submenus=new SubMenus();
        $submenus->menu_id=\Illuminate\Support\Facades\Request::get('menu_id');
        $submenus->title=\Illuminate\Support\Facades\Request::get('title');
        $submenus->content=\Illuminate\Support\Facades\Request::get('content');
        $submenus->order=\Illuminate\Support\Facades\Request::get('order');
        $submenus->price=\Illuminate\Support\Facades\Request::get('price');

        if (\Illuminate\Support\Facades\Request::hasFile('img_url')) {
            $file = \Illuminate\Support\Facades\Request::file('img_url');
            $file->move(public_path() . '/images/subs', $file->getClientOriginalName());
            $submenus->img_url = $file->getClientOriginalName();
        }

        $submenus->save();
        return redirect()->route('CMS.menu.createsub');

    }

    public function remove($id){
        Menus::find($id)->delete();

        SubMenus::where('menu_id', $id)->delete();

        return redirect()->route('CMS.menu.list');
    }

    public function remove_subs($id){


        SubMenus::find($id)->delete();

        return redirect()->route('CMS.menu.list');
    }

    public function edit($id){
        $menus=Menus::find($id);
        View::share('menus', $menus);
        return view('CMS.menu.edit');

    }
    public function edit_post($id){
        $menus=Menus::find($id);

        if(\Illuminate\Support\Facades\Request::hasfile('image')){
            $image_path=public_path() . '/images/menus/' .$menus->img_url;
            unlink($image_path);
            $file = \Illuminate\Support\Facades\Request::file('image');
            $file->move(public_path() . '/images/menus', $file->getClientOriginalName());
            $menus->img_url=$file->getClientOriginalName();
        }

        $menus->title=\Illuminate\Support\Facades\Request::Input('title');
        $menus->content=\Illuminate\Support\Facades\Request::Input('content');
        $menus->order=\Illuminate\Support\Facades\Request::Input('order');

        $menus->save();

        return redirect()->route('CMS.menu.list');

    }
    public function editSubs($id){
        $menus=Menus::all();
        $subs=SubMenus::find($id);
        View::share('menus', $menus);
        View::share('subs', $subs);
        return view('CMS.menu.editSub');


    }
    public function editSubs_post($id){
        $subs=SubMenus::find($id);

        if(\Illuminate\Support\Facades\Request::hasfile('image')){
            $image_path=public_path() . '/images/subs/' .$subs->img_url;
            unlink($image_path);
            $file = \Illuminate\Support\Facades\Request::file('image');
            $file->move(public_path() . '/images/subs', $file->getClientOriginalName());
            $subs->img_url=$file->getClientOriginalName();
        }

        $subs->menu_id=\Illuminate\Support\Facades\Request::Input('menu_id');
        $subs->title=\Illuminate\Support\Facades\Request::Input('title');
        $subs->content=\Illuminate\Support\Facades\Request::Input('content');
        $subs->order=\Illuminate\Support\Facades\Request::Input('order');
        $subs->price=\Illuminate\Support\Facades\Request::Input('price');

        $subs->save();
        return redirect()->route('CMS.menu.list');
    }


     public function ajax_menus_get(){
        $menus=Menus::all();
        return $menus;
     }

    public function ajax_sub_menus_get($id){
        $subs=SubMenus::where('menu_id', $id)->get();
        return $subs;
    }





}





