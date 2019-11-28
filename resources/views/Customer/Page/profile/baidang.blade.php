@extends('Customer.Layout.master')
@section('content')
<body id="top">
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="group latest">
      <article class="sidebar one_quarter">
        <nav class="sdb_holder">
              <ul>
                @if(Session::has('user'))
                <li><a href="{{ route('baidangsanpham') }}">Bài đăng</a></li>
                @endif
                <li><a href="{{route('sanpham')}}">Sản phẩm trả giá</a></li>
                <li><a href="{{ route('viewprofile',Session::get('user.id')) }}">Thông tin cá nhân</a></li>
              </ul>
            </nav>
       </article>
        <article class="two_third">
            <h2>
            Bài Đăng
            </h2>
            
            @foreach($sp_baidang as $prod)
            <div class = 'row'>
              <div class = 'col-md-8'>
                <?php
                  $image = explode('|',$prod->image);
                ?>
              <img class = 'imgchitiet' src="img/product/<?php echo $image[0]?>">
              </div>
              <div class = 'col-md-4'>
              <strong><p>THÔNG TIN</p></strong>
              <p>Người trả giá: {{$prod->user_name}}</p>
              <p>Giá trả: <?php echo number_format($prod->price ).' VNĐ<br>';?></p>
              <p>Liên hệ: {{$prod->phone}}</p>
              
                <a href="{!! route('update',$prod->id) !!}"><button class ='btn btn-success'>Sửa</button></a>
              </div>
            </div>
            <br>
            @endforeach
        </article>
  </section>
</div>
@endsection

