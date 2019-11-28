<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\usersRequest;
use App\user;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\sup_Category;
use App\slide;
use App\Product;
use App\Http\Controllers\Controller;
use App\Post_Product;
use App\Post;
use App\Club;
use App\Active_Club;
use App\ImageClub;
use Hash;
use file;
class RegisterController extends Controller
{
    function getRegister() {
        return view('Login.register');
    }
    function postCheckRegister(UsersRequest $request){
        $user = new User();
        $user->name = $request->txtname;
        $user->email = $request->txtemail;
        $user->phone = $request->phone;
        $user->user_name = $request->txtuserName;
        $user->password = Hash::make($request->txtpassword);
        $user->address = $request->txtaddress;

        $file_image = $request->file('txtimage')->getClientOriginalName();
        $user->avata=$file_image;
        $request->file('txtimage')->move('img/user/',$file_image);

        $user->status = 1;
        
        $user->save();
        return redirect('login');
    }
}
