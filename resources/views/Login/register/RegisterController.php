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
        $user->status = 1;
        $request->file('txtimage')->move('public/img/user/',$file_image);
        $user->save();
        return redirect()->back()->with('success', 'Đăng ký tài khoản thành công!');;
    }

    function confirm($data) {
        $code = rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        $APIKey="AD37AA3CAC37A970DF89DBD6901AFE";
        $SecretKey="0A7DD7995CFFB1B127EAC0E66E2528";
        $YourPhone=$data;
        $Content="Thanks for your registration. Your active code is: ".$code;
        
        $SendContent=urlencode($Content);
        $data="http://rest.esms.vn/MainService.svc/json/SendMultipleMessage_V4_get?Phone=$YourPhone&ApiKey=$APIKey&SecretKey=$SecretKey&Content=$SendContent&Brandname=QCAO_ONLINE&SmsType=2";
        //De dang ky brandname rieng vui long lien he hotline 0902435340 hoac nhan vien kinh Doanh cua ban
        $curl = curl_init($data); 
        curl_setopt($curl, CURLOPT_FAILONERROR, true); 
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
        $result = curl_exec($curl); 
            
        $obj = json_decode($result,true);
        if($obj['CodeResult']==100)
        {
            // Show message bao da gui thanh cong
            echo '<script>';
            echo 'console.log('. json_encode( 'Okkkkkkkkkk' ) .')';
            echo '</script>';
            echo ("<input id='code_' name='code_' type='hidden' value='".$code."'>");

        }
        else
        {
            // Gui that bai
            echo '<script>';
            echo 'console.log('. json_encode( 'Not ok' ) .')';
            echo '</script>';

        }
        // echo ("<input id='code_' name='code_' type='hidden' value='".$code."'>");
        return view('Login.confirm');
        // $ran = rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    }

    function saveData(Request $data) {
            $user = new User();
            $user->name =$data->name;
            $user->email = $data->email;
            $user->phone = $data->phone;
            $user->user_name = $data->username;
            $user->password = Hash::make($data->password);
            $user->address = $data->address;
            // $file_image = $data->image->getClientOriginalName();
            $user->avata=$data->image;
            $user->status = 1;
            // $data->image->move('public/img/user/',$file_image);
            try {
                $user->save();
                return "success";
            } catch (Exception $e) {
                return $e;
            }
            // $user->save();
            // return array('success', 'ttttttttt');
        // $arrayName = array(
        //     'name' => $data->name,
        //     'email'=>$data->email,
        //     'phone'=>$data->phone,
        //     'username'=>$data->username,
        //     'password'=>$data->password,
        //     'image'=>$data->image

        // );
        // return $arrayName;
    }
}
