@extends('Customer.Layout.master')
@section('content')
<body id="top">
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="group latest">
      <article class="sidebar one_quarter">
        <nav class="sdb_holder">
            <ul>
              <li><a href="{{route('baidangsanpham')}}">Bài đăng</a></li>
              <li><a href="{{route('sanpham')}}">Sản phẩm trả giá</a></li>
              <li><a href="{{ route('viewprofile',Session::get('user.id')) }}">Thông tin cá nhân</a></li>
            </ul>
        </nav>
      </article>
      <article class="one_third">
        <h2>
          <figure class="avatar"><img src="natucam/images/demo/avatar.png" alt="">
          @if(Session::has('user'))
          <a href="">{!! Session::get('user.name') !!}</a>
            @endif
          </figure> 
        </h2>
        <h5>
          <ul class= 'nospace btmspace-30 linklist contact'>
             @foreach($profile  as $a)
            <li><a href="#"><img class="comment_image" src="img/user/{{$a->avata}}" alt=""></a></li>
            @endforeach
          </ul>
        </h5>
      </article>
      <article class="one_third">
        <br><br><br><br>
        <h5>
          @foreach($profile  as $profile)
          <ul class= 'nospace'>
            <li><i class="fa fa-user"></i><b> Họ và tên : </b> {!! $profile->name !!}</li><br>
            <li><i class="fa fa-envelope-open"></i><b> Tài khoản : </b>{!! $profile->email !!}</li><br>
            <li><i class="fa fa-phone"></i> <b> Số điện thoại:</b> {!! $profile->phone !!}</li><br>
            <li><i class="fa fa-user-circle"></i><b> Tên người dùng: </b> {!! $profile->phone !!} </li><br>
            <li><i class="fa fa-ravelry "></i> <b> Địa chỉ: </b> {!! $profile->address !!}</li><br>
            <li><i class=" "><a href=" {!! url('edit',$profile->id) !!}"><button class = 'btn btn-success'> Sửa </button></a></li>
         </ul>
         @endforeach
        </h5>
      </article>
    </div>
  </section>
</div>
</body>
@endsection
</html>
