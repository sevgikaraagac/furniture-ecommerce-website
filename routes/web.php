<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;

Auth::routes();
Route::get('/exit', function(){Auth::logout();
    return redirect()->route('login');
})->name('Log_out');



Route::get('/', 'Front\homeController@index')->name('main');
Route::get('/about', 'Front\aboutController@index')->name('Front.about');
Route::get('/blog', 'Front\blogController@index')->name('Front.blog');
Route::get('/categories', 'Front\categoriesController@index')->name('Front.categories');
Route::get('/contact', 'Front\contactController@index')->name('Front.contact');
Route::get('/single/{id}', 'Front\singleController@index')->name('Front.single');
Route::get('/blog_tek/{id}', 'Front\blog_tekController@index')->name('Front.blog_tek');
Route::get('/slide', 'Front\homeController@slide')->name('Front.home.slide');
Route::get('/sepet/{id}', 'Front\sepetController@index')->name('Front.sepet.index');
Route::get('/sepet/ekle/{id}', 'Front\sepetController@ekle')->name('Front.sepet.ekle');
Route::get('/shop', 'Front\shopController@index')->name('Front.shop');
Route::get('/shop_sepet/{id}', 'Front\shopController@shopSepet')->name('Front.shopSepet');
Route::get('/user_cart', 'Front\shopController@user_cart')->name('Front.user_cart');
Route::get('/shop_remove/{id}', 'Front\shopController@remove')->name('Front.shopRemove');
Route::get('/shop_removeAll', 'Front\shopController@removeAll')->name('Front.shopRemoveAll');

Route::get('/sepet/cart/{id}', 'Front\cartController@index')->name('Front.sepetcart.index');
Route::get('/sepet/cart_ekle/{id}', 'Front\cartController@ekle')->name('Front.sepetcart.ekle');


Route::get('/ajaxRequestGet', 'Front\homeController@ajax_news_get')->name('Front.home.ajax_news_get');
Route::get('/Front/home/ajaxRequestGet', 'Front\aboutController@ajaxnewsget')->name('Front.about.ajax_news_get');
Route::get('/ajax_news', 'Front\homeController@ajax_news_tab')->name('Front.home.ajax_news_tab');
Route::get('/Front/home/ajaxRequest_mission', 'Front\aboutController@ajaxnews_mission')->name('Front.about.ajax_news_mission');
Route::get('/ajax_ekle', 'Front\shopController@ajax_ekle')->name('Front.shop.ajax_ekle');
Route::get('/ajax_list', 'Front\shopController@ajax_list')->name('Front.shop.ajax_list');
Route::get('/ajaxRequestCart/{id}', 'Front\shopController@ajaxRequestCart')->name('Front.shop.ajaxRequestCart');




Route::group(['prefix'=> 'panel', 'middleware'=> 'admin'], function(){
//Route::group(['prefix'=> 'panel'], function(){
    Route::get('/', function(){return view('CMS.home');})->name('CMS.home');



    Route::group(['prefix'=>'menu'], function() {
        Route::get('/', 'CMS\menusController@index')->name('CMS.menu.list');
        Route::get('/create', 'CMS\menusController@create')->name('CMS.menu.create');
        Route::post('/create_post', 'CMS\menusController@create_post')->name('CMS.menu.create_post');
        Route::get('/createsub', 'CMS\menusController@createsub')->name('CMS.menu.createsub');
        Route::post('/createsub_post', 'CMS\menusController@createsub_post')->name('CMS.menu.createsub_post');
        Route::get('/remove/{id}', 'CMS\menusController@remove')->name('CMS.menu.remove');
        Route::get('/remove_subs/{id}', 'CMS\menusController@remove_subs')->name('CMS.menu.remove_subs');
        Route::get('/edit/{id}', 'CMS\menusController@edit')->name('CMS.menu.edit');
        Route::post('/edit_post/{id}', 'CMS\menusController@edit_post')->name('CMS.menu.edit_post');
        Route::get('/editsubs/{id}', 'CMS\menusController@editSubs')->name('CMS.menu.editsubs');
        Route::post('/editsubs_post/{id}', 'CMS\menusController@editSubs_post')->name('CMS.menu.editSubs_post');
        Route::get('/ajaxRequestMenus', 'CMS\menusController@ajax_menus_get')->name('CMS.menu.ajax_menus_get');
        Route::get('/ajaxRequestSubMenus/{id}', 'CMS\menusController@ajax_sub_menus_get')->name('CMS.menu.ajax_sub_menus_get');

    });


    Route::group(['prefix'=>'news'], function(){
        Route::get('/', 'CMS\newsController@index')->name('CMS.news.list');
        Route::get('/create', 'CMS\newsController@create')->name('CMS.news.create');
        Route::post('/create_post', 'CMS\newsController@create_post')->name('CMS.news.create_post');
        Route::get('/remove/{id}', 'CMS\newsController@remove')->name('CMS.news.remove');
        Route::get('/edit{id}', 'CMS\newsController@edit')->name('CMS.news.edit');
        Route::post('/edit_post/{id}', 'CMS\newsController@edit_post')->name('CMS.news.edit_post');
    });

    Route::group(['prefix'=>'categories'], function (){
        Route::get('/', 'CMS\categoryController@index')->name('CMS.categories.list');
        Route::get('/create', 'CMS\categoryController@create')->name('CMS.categories.create');
        Route::post('/create_post', 'CMS\categoryController@create_post')->name('CMS.categories.create_post');
        Route::get('/remove/{id}', 'CMS\categoryController@remove')->name('CMS.categories.remove');
        Route::get('/edit{id}', 'CMS\categoryController@edit')->name('CMS.categories.edit');
    });

    Route::group(['prefix'=>'urunler'], function (){
        Route::get('/', 'CMS\urunlerController@index')->name('CMS.urunler.list');
        Route::get('/create', 'CMS\urunlerController@create')->name('CMS.urunler.create');
        Route::post('/create_post', 'CMS\urunlerController@create_post')->name('CMS.urunler.create_post');
        Route::get('/remove/{id}', 'CMS\urunlerController@remove')->name('CMS.urunler.remove');
        Route::get('/edit{id}', 'CMS\urunlerController@edit')->name('CMS.urunler.edit');
    });


});









//
////Route::group(['prefix'=>'shop'], function(){
////    Route::get('/', 'ShopController@index')->name('Front.shop');
//    Route::post('/shop_ekle', 'ShopController@shop_ekle')->name('Front.shop_ekle');
//});
