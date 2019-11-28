<?php
use Illuminate\Support\Facades\Input;
use App\sup_category;
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
Route::post('save',[                
	'as'=>'confirm',            
	'uses'=>'RegisterController@saveData'           
]); 
// route trang chinh

Route::group(['prefix' => '/'], function () {		
	Route::get('index',[				
		'as'=>'index',			
		'uses'=>'PageController@getindex'			
		]);			
	Route::get('chitiet/{id}',[
		'as'=>'chitiet',
		'uses'=>'PageController@getchitiet'
	]);
	Route::get('doido',[
		'as'=>'doido',
		'uses'=>'PageController@getdoido'
	]);


	Route::get('dienthoai',[
		'as'=>'dienthoai',
		'uses'=>'PageController@getdoidoDT'
	]);

	Route::post('tragia/{id_product}', [
		'as' 	=> 'tragia',
		'uses' 	=> 'BargainController@postBargain'
	]);
});
//Route trang ca nhan
Route::group(['prefix' => '/'], function () {
	Route::get('viewprofile/{id}', [
		'as' 	=> 'viewprofile',
		'uses' 	=> 'ProfileController@getviewprofile'
	]);
	
	Route::get('sanpham', [
		'as' 	=> 'sanpham',
		'uses' 	=> 'BargainController@getSpTragia'
	]);

	Route::get('baidangsanpham',[				
		'as'=>'baidangsanpham',			
		'uses'=>'BargainController@getbaidangsanpham'			
	]);	
	Route::get('edit/{id}', [
		'as' 	=> 'getEditProfile',
		'uses' 	=> 'ProfileController@getEditProfile'
		]);

	Route::post('edit/{id}', [
		'as' 	=> 'postEditProfile',
		'uses' 	=> 'ProfileController@postEditProfile'
	]);
	Route::get('update/{id}', [
	'as' => 'update',
	'uses' => 'UpdateProductController@getEditProduct'
	]);
	Route::post('update/{id}', [
	'as' => 'update',
	'uses' => 'UpdateProductController@postEditProduct'
	]);
	Route::get('delete/{id}', [
	'as' => 'delete',
	'uses' => 'UpdateProductController@getDelete'
	]);
	
});


//Route post
Route::group(['prefix' => '/'], function () {

	Route::get('post', [
		'as'=>'post',			
		'uses'=>'PostController@getCate'
	]);

	Route::get('baidang', function(){
		$cat_id = Input::get('cat_id');
		$supcategory = sup_category::where('id_cat', '=', $cat_id)->get();
		return Response::json($supcategory);
		}); 

	Route::post('post',[				
		'as'=>'baidang',			
		'uses'=>'PostController@addProduct'			
	]);	

	Route::get('login',[				
		'as'=>'login',			
		'uses'=>'LoginController@getLogin'			
	]);	
	Route::post('login', array('as' => '', 'uses' => 'LoginController@postLogin'));

	Route::get('logout',[				
	'as'=>'logout',			
	'uses'=>'LoginController@logout'			
	]);

	Route::get('register', [
		'as' => 'register',
		'uses' => 'RegisterController@getRegister'
		]);
		
	Route::post('register', [
		'as' => 'postCheckRegister',
		'uses' => 'RegisterController@postCheckRegister'
		]);
	Route::get('confirm/{phone}',[              
		'as'=>'confirm',            
		'uses'=>'RegisterController@confirm'
		]);
	});
//club
Route::group(['prefix' => '/'], function () {
	Route::get('tuthien',[
		'as'=>'tuthien',
		'uses'=>'ClubController@gettuthien'
	]);
	Route::get('clb/{id}',[
		'as'=>'clb',
		'uses'=>'ClubController@getclb'
	]);	

   Route::get('donate/{id}',[
		'as'=>'donate',
		'uses'=>'ClubController@getFormDonate'
	]);
   Route::get('donate/{id}',[
		'as'=>'donate',
		'uses'=>'ClubController@getCate'
	]);
	Route::post('donate/{id}',[
		'as'=>'donate',
		'uses'=>'ClubController@PostDonate'
	]);	
   
});
