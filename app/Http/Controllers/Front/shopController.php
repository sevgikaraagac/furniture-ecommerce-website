<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Menus;
use App\Models\Sepet;
use App\Models\SubMenus;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class shopController extends Controller
{
    public function index()
    {
        $carts=Cart::where('user_id', auth()->user()->id)->get();
        $subs=SubMenus::all();
        View::share('carts', $carts);
        View::share('subs', $subs);
        return view('Front.Home.shop');
    }
    public function user_cart()
    {
        return $carts=Cart::where('user_id', auth()->user()->id)->get();
    }
    public function remove($id){
        $carts=Cart::find($id)->delete();
        return redirect()->route('Front.shop');
    }

    public function removeAll(){
        $carts=Cart::where('user_id', auth()->user()->id)->delete();
        return redirect()->route('Front.shop');
    }


    public function ajaxRequestCart($qty)
    {

        $carts = Cart::where('id', $id)->get();
        $carts = new Cart();
        $carts->qty;
        $carts->save();
        return $carts;
    }

}
