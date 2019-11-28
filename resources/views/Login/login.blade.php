@extends('Customer.Layout.master')
@section('precontent')
<div class="container">
		<div class="post-area">
			<div class="container_dangbai" style="float: center">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-8 formdangnhap">
						<div class="post-content mb-50 p-30 bg-white box-shadow">
							<div class="section-heading">
								<center><h2>Đăng Nhập</h2></center>
							</div>
							<form action="" method="POST" role="form">
								<div class="alert alert-danger error errorLogin" style="display: none;">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<p style="color:red; display:none;" class="error errorLogin"></p>
								</div>
								<div class="form-group">
									<label for="">Tài khoản</label>
									<input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}">
									<p style="color:red; display: none" class="error errorEmail"></p>
								</div>
								<div class="form-group">
									<label for="">Mật khẩu</label>
									<input type="password" class="form-control" id="password" placeholder="Password" name="password">
									<p style="color:red; display: none" class="error errorPassword"></p>
								</div>
								<div class="form-group">
									<tr>
										<td><input type="checkbox" name="remember"></td>
										<td>Ghi nhớ</td>
									</tr>
									<br><br>
									<p>Đăng ký tài khoản <a href="{{route('register')}}"> tại đây</a></p>
								</div>
								<button id="dang-nhap" type="submit" class="btn btn-primary">Đăng nhập</button>
							</form>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


