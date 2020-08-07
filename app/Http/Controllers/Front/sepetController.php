<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Menus;
use App\Models\Sepet;
use App\Models\SubMenus;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class sepetController extends Controller
{
    public function index($id)
    {
        $subs = SubMenus::where('id', $id)->get();
        View::share('subs', $subs);
        return view('Front.Home.sepet');
    }

    public function ekle($id)
    {
        $sepets = Sepet::where('sub_menu_id', $id)->get();
        $sepets=new Sepet();
        $sepets->sub_menu_id=$id;
        $sepets->save();

//        return redirect()->route('Front.sepet.index', $sepets->id);
        return view('Front.Home.shop');
    }


}





