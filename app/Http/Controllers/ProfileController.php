<?php


namespace App\Http\Controllers;

use Input,File; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\sup_Category;
use App\slide;
use App\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRequest; 
use App\User;
use Session;





class ProfileController extends Controller
{
    
    function gettrangcanhan(){
    	return view("customer.Page.profile.trangcanhan");
    }
    function getbaidang1(){
    	return view("customer.Page.profile.baidang");
    }
    function getsanpham(){
    	return view("customer.Page.profile.sanpham");
    }
    function getprofile(){
    	return view("customer.Page.profile.profile");
    }
    public function getEditProduct($id) {
        $cate = Category::select('id','name_cat')->get()->toArray();
        $product = Product::find($id);
        $product_img = product::findOrFail($id)->get()->toArray();
        return view('Customer.Page.product.EditProd',compact('cate','product','product_img'));
    }


   public function postEditProduct($id,Request $request) {
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

    public function getDelete($id) {
        $product = product::find($id);
        $product->delete($id);
        return back()->with('success','Xóa sản phẩm thành công!');
    }
   function getviewprofile(Request $request){
        $id = $request->id;
        $profile1 = User::find(Session::has('user.id'));
        //$id = Session::has('user.id');
        $profile = DB::select('select * from users where id = :id', ['id' => $id]);
        return view("customer.Page.profile.viewprofile",compact('profile','profile1'));
    }
   
    public function getEditProfile($id) {
        $profile = user::select('id')->get()->toArray();
        $profile = user::find($id);
        $profile1_img = user::findOrFail($id)->get()->toArray();
        return view('customer.Page.profile.editProfile',compact('profile','profile1_img'));
    }

    public function postEditProfile($id,Request $request) {
        $profile = user::find($id);
        $profile->name = $request->input('txtname');
        $profile->email = $request->input('txtemail');
        $profile->phone = $request->input('txtphoneNumber');
        $profile->password = $request->input('txtpassword');
        $profile->address = $request->input('txtaddress');
        $profile->status = $request->txtstatus;
        $profile->avata = 'img/user/'. $request->input('txtimage');
        if(!empty($request->file('txtimage')))
        {
            $file_name = $request->file('txtimage')->getClientOriginalName();
            $profile->avata = $file_name;
            $request->file('txtimage')->move('img/user',$file_name);
        }
        $profile->save();
        return redirect()->route('login')->with('success','Sửa ten thành công!');
    }

}
