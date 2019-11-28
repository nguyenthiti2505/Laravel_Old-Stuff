<?php

namespace App\Http\Controllers;
use Input,File; 
use Request; 
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\sup_Category;
use App\slide;
use App\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRequest; 
use App\user;

class UpdateProductController extends Controller
{

    
    public function getEditProduct($id) {
        $cate = Category::select('id','name_cat')->get()->toArray();
        $product = Product::find($id);
        $product_img = product::findOrFail($id)->get()->toArray();
        return view('Customer.Page.Product.EditProd',compact('cate','product','product_img'));
    }


    function postEditProduct($id,Request $request) {
        $product = Product::find($id);
        $img_current = 'img/product/'. Request::input('img_current');
        $product->name = Request::input('name');
        $product->price = Request::input('price');
        $product->description = Request::input('description');
        $product->status = Request::input('status');
        $product->id_subcat = Request::input('name_category');

        if(!empty(Request::file('image')))
        {
            $file_name = Request::file('image')->getClientOriginalName();
            $product->image = $file_name;
            Request::file('image')->move('img/product/',$file_name);
            
        }
        $product->save();
         return redirect('baidangsanpham');
        
    }

    function getDelete($id) {
        $product = product::find($id);
        $product->delete($id);
        return back()->with('success','Xóa sản phẩm thành công!');
    }


}