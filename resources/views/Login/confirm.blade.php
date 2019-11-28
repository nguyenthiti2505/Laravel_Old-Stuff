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
                            <center><h2>Xác minh</h2></center>
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
                			<form >
                                @csrf
                                <div class="form-group">
                                    <label for="upload-file"></label>
                                    <input type="text" class="form-control" id="code-confrim">
                                </div>
                                
                                <button type="button" id="submit" class="btn mag-btn mt-30"><i class="fa fa-cloud-upload"></i>Xác nhận</button>
                            </form>
                          
                           <script>
                                 document.getElementById('submit').addEventListener('click', function(event) {
                                var localData = JSON.parse(localStorage.getItem('infor'));
                                // console.log(localData);
                                
                                if (document.getElementById('code-confrim').value == document.getElementById("code_").value) {
                                    var _token = $('input[name="_token"]').val();
                                    
                                    
                                    $.ajax({
                                        url:"save",
                                        method:"POST",
                                        data:{
                                            name: localData.name,
                                            address: localData.address,
                                            email: localData.email,
                                            password: localData.password,
                                            phone: localData.phone,
                                            username: localData.username,
                                            image:localData.image,
                                            _token: _token	
                                        },
                                        success:function(data)
                                        {
                                            if(data =='success'){
                                                alert("Đăng kí thành công! Chào mừng bạn đến với chợ đồ cũ");
                                                console.log("Ma nhap dung..");
                                                window.location = "http://localhost/final_project/chodocu_laravel_project/public/login";
                                            } else {

                                                console.log("Ma ban nhap khong dung inside");
                                            }
                                        },
                                        error: function(data) {
                                            alert("lỗi hệ thống");
                                            console.log("Loi he thong");
                                        }
                                    })
                                } else {
                                    alert("Mã xác nhận không đúng");
                                    console.log("Ma ban nhap khong dung");
                                }
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