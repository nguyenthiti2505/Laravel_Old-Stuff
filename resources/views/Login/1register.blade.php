@extends('Customer.Layout.master')
@section('precontent')
<!-- div class="preloader d-flex align-items-center justify-content-center"> -->
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
  {{--   <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(natucam/images/demo/40.jpg);">
        <div class="container_backimage h-300">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                </div>
            </div>
        </div>
    </section> --}}
    <div class="post-area" style="padding-top: 100px;">
        <div class="container_dangbai" style="float: center">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="post-content mb-50 p-30 bg-white box-shadow">
                        <div class="section-heading">
                            <center><h2>Đăng ký</h2></center>
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
                			<form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                     	  		{{ csrf_field() }}
                                <div class="form-group">
                                    <label for="upload-file">Tên</label>
                                    <input type="text" class="form-control" name="txtname">
                                </div>
                                 <div class="form-group">
                                    <label for="upload-file">Email</label>
                                    <input type="text" class="form-control" name="txtemail">
                                </div>
                                 <div class="form-group">
                                    <label for="upload-file">Số điện thoại</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Tên người dùng</label>
                                    <input type="text" class="form-control" name="txtuserName">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Mật khẩu</label>
                                    <input type="password" class="form-control" name="txtpassword">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Địa chỉ</label>
                                    <input type="text" class="form-control" name="txtaddress">
                                     
                                </div>
                                  <div class="form-group">
                                    <label for="upload-file">Ảnh của bạn</label>
                                    <input type="file" class="form-control-file" name="txtimage"  id="upload-file">
                                </div>
                                <button type="submit" class="btn mag-btn mt-30"><i class="fa fa-cloud-upload"></i>Đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
@endsection