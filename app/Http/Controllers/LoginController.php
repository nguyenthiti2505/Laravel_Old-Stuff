<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Session;
use App\User;
use Hash;

class LoginController extends Controller
{
    
    public function getLogin()
    {
        return view('Login.login');
    }

      public function logout(Request $request) {
      Session::flush();
      Auth::logout();
      return redirect('index');
    }

    // public function postLogin(Request $request){
    // 	$rules = [
    //         'email' => 'required|email',
    //         'password' => 'required|min:4'
    //     ];

    //     $messages = [
    //         'email.required' => 'Email là trường bắt buộc',
    //         'email.email' => 'Email không đúng định dạng',
    //         'password.required' => 'Mật khẩu là trường bắt buộc',
    //         'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
    //     ];

    //     $validator = Validator::make($request->all(), $rules, $messages);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'error' => true,
    //             'message' => $validator->errors()
    //         ], 200);
    //     } else {
    //         $email = $request->email;
    //         $password = $request->password;
    //         if ($user = User::where('email', $email)->first()) {
    //         	//Hash::check($password, $user->password)
    //             if ($pass = User::where('password', $password)->first()) {
    //                 if (isset($request->remember)) {
    //                     Cookie::queue('remember', 'true', 43200); // 30days
    //                     Cookie::queue('remember_email', $user->email, 43200); 
    //                     Cookie::queue('remember_password', $request->password, 43200); 
    //                 }
    //                 Session::put('user', $user);
    //                 return response()->json([
    //                     'error' => false,
    //                     'role' => $user->role
    //                 ], 200);
    //             } else {
    //                 $message = new MessageBag(['errorlogin' => 'Địa chỉ email hoặc mật khẩu không chính xác']);
    //                 return response()->json([
    //                     'error' => true,
    //                     'message' => $message
    //                 ], 200);
    //             }
    //         } else {
    //             $errors = new MessageBag(['errorlogin' => 'Địa chỉ email chưa tồn tại']);
    //             return response()->json([
    //                 'error' => true,
    //                 'message' => $errors
    //             ], 200);
    //         }
    //     }
    // }
        public function postLogin(Request $request)
   {

   $rules = [
           'email' => 'required|email',
           'password' => 'required|min:8'
       ];

       $messages = [
           'email.required' => 'Email là trường bắt buộc',
           'email.email' => 'Email không đúng định dạng',
           'password.required' => 'Mật khẩu là trường bắt buộc',
           'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
       ];

       $validator = Validator::make($request->all(), $rules, $messages);

       if ($validator->fails()) {
           return response()->json([
               'error' => true,
               'message' => $validator->errors()
           ], 200);
       } else {
           $email = $request->email;
           $password = $request->password;
           if ($user = User::where('email', $email)->first()) {
               if (Hash::check($password, $user->password)) {
                   if (isset($request->remember)) {
                       Cookie::queue('remember', 'true', 43200); // 30days
                       Cookie::queue('remember_email', $user->email, 43200); // 30days
                       Cookie::queue('remember_password', $request->password, 43200); // 30days
                   }
                   Session::put('user', $user);
                   return response()->json([
                       'error' => false,
                       'role' => $user->role
                   ], 200);
               } else {
                   $message = new MessageBag(['errorlogin' => 'Địa chỉ email hoặc mật khẩu không chính xác']);
                   return response()->json([
                       'error' => true,
                       'message' => $message
                   ], 200);
               }
           } else {
               $errors = new MessageBag(['errorlogin' => 'Địa chỉ email chưa tồn tại']);
               return response()->json([
                   'error' => true,
                   'message' => $errors
               ], 200);
           }
       }

   }
}
