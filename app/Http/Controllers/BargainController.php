<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Session;
use App\Post;
use App\Product;
use App\Bargain;

class BargainController extends Controller
{
    public function postBargain(Request $request)
    {      
            $product = $request->id_product;
            $bargain = new Bargain();
            $bargain->id_user = Session::get('user.id');
            $bargain->price = Input::get('tragia');
            $id_prod = $request->id_product;
            $bargain->id_prod = $id_prod;
            $bargain->save();
            return redirect()->back()->with('success');
            
       
    }

    public function getSpTragia()
    {
        $id_user = Session::get('user.id'); 
        $sp_tragia= DB::table('products')
        ->join('posts', 'products.id', '=', 'posts.id_prod')
        ->join('bargains', 'products.id', '=', 'bargains.id_prod')
        ->join('users', 'bargains.id_user', '=', 'users.id')
        ->where('bargains.id_user',  $id_user)
        ->get(array(
            'products.id',
            'products.name',
            'products.image',
            'bargains.price',
            'users.user_name',
            'users.phone'
        ));
        return view("customer.Page.profile.sanpham",compact('id_user','sp_tragia'));
    }

    public function getbaidangsanpham()
    {
       $id_user = Session::get('user.id'); 
        $sp_baidang= DB::table('products')
        ->leftjoin('posts', 'products.id', '=', 'posts.id_prod')
        ->leftjoin('bargains', 'products.id', '=', 'bargains.id_prod')
        ->leftjoin('users', 'bargains.id_user', '=', 'users.id')
        ->where('posts.id_user',  $id_user)
        ->get(array(
            'products.id',
            'products.name',
            'products.image',
            'bargains.price',
            'users.user_name',
            'users.phone'
        ));
        return view("customer.Page.profile.baidang",compact('sp_baidang'));
    }

    //  public function getbaidangsanpham()
    // {
    //    $id_user = Session::get('user.id'); 
    //     $sp_baidang= DB::table('posts')
    //     ->join('products', 'products.id', '=', 'posts.id_prod')
    //     ->join('bargains', 'bargains.id_prod', '=', 'products.id')
    //     ->join('bargains', 'bargains.id_user', '=', 'users.id')
    //     ->join('users', 'users.id', '=', 'posts.id_user')
    //     ->where('posts.id_user',  $id_user)
    //     ->get(array(
    //         'products.id',
    //         'products.name',
    //         'products.image',
    //         'bargains.price',
    //         'users.user_name',
    //     ));
    //     return view("customer.Page.profile.baidang",compact('sp_baidang'));
    // }
}
