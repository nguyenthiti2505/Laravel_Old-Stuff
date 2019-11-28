@extends('Customer.Layout.master')
@section('content')
<div class="wrapper row3">	
	<div class="post-area">
    <div class="container_dangbai" style="float: center">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="post-content mb-50 p-30 bg-white box-shadow">
                <div class="section-heading">
                    <center><h2>Trang Ca Nhan</center>
                </div>
                <div class="post-info mt-30">
                	 @if($errors->any())
	            <div class="alert alert-danger">
	            <ul>
	                @foreach ($errors->all() as $error)
	                    <li>{!! $error !!}</li>
	                @endforeach
	            </ul> 
	            </div>
	        @endif
     	   <form action="{{URL::action('ProfileController@postEditProfile',$profile['id'])}}" method="post" enctype="multipart/form-data">
     	   	{{ csrf_field() }}
            <div class="form-group">
              <label for="upload-file">Name</label>
              <input type="text" class="form-control" name="txtname" value="{!! old ('txtname',isset($profile)?$profile['name']:NULL) !!}">
            </div>
            <div class="form-group">
              <label for="upload-file">Email</label>
              <input type="text" class="form-control" name="txtemail" value="{!! old ('txtemail',isset($profile)?$profile['email']:NULL) !!}">
            </div>
             <div class="form-group">
                <label for="upload-file">Phone number</label>
                <input type="text" class="form-control" name="txtphoneNumber" value="{!! old ('txtphoneNumber',isset($profile)?$profile['phone']:NULL) !!}" >
            </div>
            <div class="form-group">
              <label for="upload-file">User name</label>
              <input type="text" class="form-control" name="txtusername" value="{!! old ('txtusername',isset($profile)?$profile['user_name']:NULL) !!}" >
          </div>
            <div class="form-group">
                <label for="upload-file">Password</label>
                <input type="password" class="form-control" name="txtpassword" value="{!! old ('txtpassword',isset($profile)?$profile['password']:NULL) !!}">
            </div>
            <div class="form-group">
                <label for="upload-file">Address</label>
                <input type="text" class="form-control" name="txtaddress" value="{!! old ('txtaddress',isset($profile)?$profile['address']:NULL) !!}" >
                 
            </div>
            <div class="form-group">
                <label for="upload-file">Status</label>
                <input type="text" class="form-control" name="txtstatus" value="{!! old ('txtstatus',isset($profile)?$profile['status']:NULL) !!}">
            </div>
            <div class="form-group">
                <label for="upload-file">Ảnh của bạn</label>
                <input type="file" class="form-control-file" name="txtimage"  id="upload-file" value="{!! old ('txtimage',isset($profile)?$profile['avata']:NULL) !!}"
                >
                <img src="{!! asset('public/img/user'.$profile['avata']) !!}" width="100">
            </div>
            <button type="submit" class="btn mag-btn mt-30"><i class="fa fa-cloud-upload"></i>Save</button>
        </form>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection