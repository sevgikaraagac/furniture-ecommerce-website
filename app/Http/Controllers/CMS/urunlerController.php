<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Urunler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class urunlerController extends Controller
{
    public function index(){
        $urunler=Urunler::all();
        View::share('urunler', $urunler);
        return view('CMS.urunler.list');
    }
    public function create(){
        return view('CMS.urunler.create');
    }
    public function create_post(Request $request)
    {
        $urunler = new Urunler();
        $urunler->title = \Illuminate\Support\Facades\Request::Input('title');
        $urunler->cat_id = \Illuminate\Support\Facades\Request::Input('cat_id');
        $urunler->price = \Illuminate\Support\Facades\Request::Input('price');
        $urunler->content = \Illuminate\Support\Facades\Request::Input('content');

        if (\Illuminate\Support\Facades\Request::hasFile('image')) {
            $file = \Illuminate\Support\Facades\Request::file('image');
            $file->move(public_path() . '/images/urunler', $file->getClientOriginalName());
            $urunler->img_url = $file->getClientOriginalName();
        }
        $urunler->save();
        return redirect()->route('CMS.urunler.create');
    }

        public function remove($id)
        {
            $urunler = Urunler::find($id);
            $urunler->delete();
            return redirect()->route('CMS.urunler.list');
        }

        public function edit($id){
        $urunler=Urunler::find($id);
        View::share('urunler', $urunler);
        return view('CMS.urunler.edit');
        }


}
