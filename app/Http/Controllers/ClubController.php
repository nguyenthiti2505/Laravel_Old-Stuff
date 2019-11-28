<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\postsRequest;
use App\Club;
use App\Active_Club;
use App\ImageClub;
Use App\User;
use App\Product;
use App\Category;
use App\Donation;
use Session;
use View;
use file;
use App\sup_category;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    function gettuthien(){
        $club = Club::select('id','username','avata')->get();
        return View('Customer.Page.Club.tuthien',compact('club'));
    }
    
    function getclb($id){
        $nameclub=Club::where('id','=',$id)->value('username');
        $idclub=Club::where('id','=',$id)->value('id');
        $club = Club::select('email','id','username','avata','address','phone','name')->get();
        $clubs = Active_Club::where('id_club','=',$id)->get();
        $a = Active_Club::where('id_club','=',$id)->value('id');
        $img = ImageClub::select('content');
        $img = ImageClub::where('id_activity','=',$a)->get();
        //$img = ImageClub::select('content')->get();
        $user_donate = DB::table('donation')
        ->join('club','club.id','=','donation.id_club')
        ->join('users', 'users.id', '=', 'donation.id_user')
        ->join('products', 'products.id', '=', 'donation.id_prod')
        ->get(array(
        'club.id',
        'club.address',
        'users.name',
        'users.email_verified_at',
        'products.image',   
        'products.description',
        'donation.content',
        ));
        return View('Customer.Page.Club.activityClub',compact('club','clubs','img','user_donate','nameclub','idclub'));
    }

    public function getFormDonate($id)
    {
        $idclub=Club::where('id','=',$id)->value('id');
        return View('Customer.Page.Club.quyengop',compact('idclub'));
    }

    function PostDonate(Request $request){
        $product = new Product();
        $sub = sup_category::find(Input::get('subcategory'));
        $product->name = $sub['name'];
        $product->id_subcat = Input::get('subcategory');
        $product->price = Input::get('price');

        $file_image = $request->file('image')->getClientOriginalName();
        $product->image = $file_image;
        $a1 = $request->file('image')->move('img/product/',$file_image);

        $product->description = Input::get('description');
        $product->status = 1;

        //insert data into table posts
        $product->save();
        $id = DB::getPdo()->lastInsertId();
        $Donation = new Donation();
        $Donation->id_prod = $id;
        $a  =  $request->id;
        $Donation->id_club = $a;
        $Donation->content = Input::get('txtdescription');;
        $Donation->id_user = Session::get('user.id');
        $Donation->image = $a1;
        $Donation->save();

         return redirect('tuthien');
    }
     public function getCate()
    {
        $category = Category::all();
        return View::make('Customer.Page.Club.quyengop')->with('category',$category);
    }
}
