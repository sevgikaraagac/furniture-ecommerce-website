<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Sepet;
use App\Models\SubMenus;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class cartController extends Controller
{

    public function index($id)
    {
        $subs = SubMenus::where('id', $id)->get();
        View::share('subs', $subs);
        return view('Front.Home.sepet');
    }

    public function ekle($id)
    {

        $carts = Cart::where('sub_menu_id', $id)->get();
        $subs=SubMenus::find($id);
        $carts=new Cart();
        $carts->sub_menu_id=$id;
        $carts->name=$subs->title;
        $carts->price=$subs->price;
        $carts->user_id=Auth::user()->id;
        $carts->save();
        return redirect()->route('Front.sepet.index', $carts->id);
    }








}
