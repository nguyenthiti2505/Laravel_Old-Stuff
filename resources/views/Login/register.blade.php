@extends('Customer.Layout.master')
@section('precontent')
<!-- div class="preloader d-flex align-items-center justify-content-center"> -->
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(natucam/images/demo/40.jpg);">
        <div class="container_backimage h-300">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                </div>
            </div>
        </div>
    </section>
   
    <div class="post-area">
        <div class="container_dangbai" style="float: center">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="post-content mb-50 p-30 bg-white box-shadow">
                        <div class="section-heading">
                            <center><h2>Register form</h2></center>
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
                                    <label for="upload-file">Name</label>
                                    <input type="text" class="form-control" name="txtname">
                                </div>
                                 <div class="form-group">
                                    <label for="upload-file">Email</label>
                                    <input type="text" class="form-control" name="txtemail">
                                </div>
                                 <div class="form-group">
                                    <label for="upload-file">Phone number</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                                {{-- <div id = 'ma' >
                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
                                    <button type="button" id="code_" class="btn mag-btn mt-30" >Mã</button>
                                </div> --}}

                                {{-- <div class="form-group" style="display:none">
                                    <label for="upload-file">Mã xác minh</label>
                                    <input type="text" class="form-control" name="idcode">
                                    <button type="button" id="confirm_" class="btn mag-btn mt-30">Xác minh</button>
                                </div>
                                --}}
                                <div class="form-group">
                                    <label for="upload-file">User name</label>
                                    <input type="text" class="form-control" name="txtuserName">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Password</label>
                                    <input type="password" class="form-control" name="txtpassword">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Address</label>
                                    <input type="text" class="form-control" name="txtaddress">
                                     
                                </div>
                                  <div class="form-group">
                                    <label for="upload-file">Ảnh của bạn</label>
                                    <input type="file" class="form-control-file" name="txtimage"  id="upload-file">
                                </div>

                                <button type="button" id="register_" class="btn mag-btn mt-30"><i class="fa fa-cloud-upload"></i>Register</button>
                            </form>
                               
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                             
                            <script>


                                var image = "" || null;
                                document.querySelectorAll("input[type='file']")[0].addEventListener('change', function(e) {
                                    var fileName = e.target.files[0].name;
                                    image = fileName+"";   
                                })

                                $("document").ready(function(){
                                    $("#upload-file").change(function(e) {
                                        var fileName = e.target.files[0].name;
                                        console.log(fileName);
                                        
                                    });
                                });
                                
                               
                                document.getElementById('register_').addEventListener('click', function(e) {
                                    var obj = {
                                        name: document.getElementsByName('txtname')[0].value,
                                        email: document.getElementsByName('txtemail')[0].value,
                                        phone: document.getElementsByName('phone')[0].value,
                                        username: document.getElementsByName('txtuserName')[0].value,
                                        password: document.getElementsByName('txtpassword')[0].value,
                                        address: document.getElementsByName('txtaddress')[0].value,
                                        image: image
                                    }
                                    localStorage.setItem('infor', JSON.stringify(obj));
                                    window.location = "http://localhost/final_project/chodocu_laravel_project/public/confirm/"+document.getElementsByName('phone')[0].value;
                                })
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
@endsection