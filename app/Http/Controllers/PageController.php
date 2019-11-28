<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\sup_Category;
use App\slide;
use App\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRequest;
use App\Post_Product;
use App\Post;
use App\Club;
use App\Active_Club;
use App\ImageClub;
Use App\User;
use View;
class PageController extends Controller
{

    function getmaster(){
        return View("Customer.Layout.master");
    }
    function getindex(){
        $club = Club::select('id','username','avata')->paginate(3);
        $slide = slide::all();
        $new_product =  DB::table('products')->where('status', 1)->limit(3)->get();

        return View("Customer.Page.index",compact('slide','new_product','club'));
    }

    function getdoidoDT(){
        $category = Category::all();
        $sup_cat = DB::table('sub_categories')->where('id_cat','=',1)->get();
        $dienthoai =  DB::table('products')->where('status', 1)->limit(3)->get();
        return view("Customer.Page.dienthoai",compact('dienthoai','category','sup_cat'));
    }
    
 

    function getdoido(){
        $prod_type= DB::table('products')
        ->join('sub_categories', 'sub_categories.id', '=', 'products.id_subcat')
        ->join('categories', 'categories.id', '=', 'sub_categories.id_cat')
        ->get(array(
            'products.id',
            'products.name',
            'products.price',
            'products.image',
            'products.id_subcat',
            'products.description',
            'sub_categories.id_cat',
            'categories.name_cat'
        ));
    	return view("customer.Page.doido",compact('prod_type'));
    }

    function getchitiet($id){	
        //lay ma san pham 						
        $sp_chitiet =  DB::table('products')->where('id', $id)->get();									
       // $sp_chitiet= Product::where('id',$id)->get();		
    	return view("customer.Page.chitiet",compact('sp_chitiet'));								
    }	


    public function checkLogin(Request $request){
        $results = DB::select('select * from users where id = :id', ['id' => 1]);
        foreach ($users as $user) {
        echo $user->username;
        }
    }

    public function insertProduct(){
        $product = new Product;
        $product->name = Input::get('name');
        $product->id = Input::get(2);
        $product->price = Input::get('price');
        $product->description = Input::get('description');
        $product->image =  Input::get('image');
        $product->status =  Input::get(1);
        $product->save();

        return Redirect::back();
    }

    public function insertPost(){
        $product = new Post;
        $product->id_user = Input::get('name');
        $product->price = Input::get('price');
        $product->description = Input::get('description');
        $product->image =  Input::get('image');
        $product->status =  Input::get(1);
        $product->save();

        return Redirect::back();
    }

    function getlogin(){
        return View("Login.login");
    }
    function getlogin1(){
        return View("Login.login1");
    }
    function getregister(){
        return View("Login.register");
    }

}
    

    

