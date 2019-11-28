
@extends('Customer.Layout.master')
@section('precontent')
<!-- Slider hien thi thong tin trang web -->
<div class="container-full">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      @foreach($slide as $s)
        @if($s->id==1) 
        <div class="item active">
        @else
        <div class="item">
        @endif
        <li>{{$s->name}}</li>
        <img src="img/slide/{{$s->image}}" alt="Los Angeles" style="height:680px;width:100%;">
        </div>
      @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
@endsection
@section('content')

<!-- Hiển thị danh mục sản phẩm -->
<div class="wrapper bgded overlay light" style="background-image:url('images/demo/backgrounds/02.png');">
  <section class="hoc container clear"> 
        <center><h1>Danh Mục Sản Phẩm</h1></center>
        <br>
    <ul class="nospace group">
      <li class="one_third first" btmspace-30">
        <article><i class="btmspace-30 fa fa-3x fa-ravelry"></i>
        <h6 class="heading"><a href="{{route('doido')}}">Đồ điện tử </a></h6>
        <p>
          @foreach($sup_cat as $sup)
            @if($sup->id_cat==1)
              <li>{{$sup->name}}</li>
            @endif
          @endforeach
        </p>
        </article>
      </li>
      <li class="one_third btmspace-30">
        <article><i class="btmspace-30 fa fa-3x fa-s15"></i>
          <h6 class="heading"><a href="{{route('doido')}}">Sách, Báo</a></h6>
          <p>
            @foreach($sup_cat as $sup)
              @if($sup->id_cat==2)
                <li>{{$sup->name}}</li>
              @endif
            @endforeach
          </p>
        </article>
      </li>
      <li class="one_third btmspace-30">
        <article><i class="btmspace-30 fa fa-3x fa-ge"></i>
          <h6 class="heading"><a href="{{route('doido')}}">Văn phòng phẩm </a></h6>
          <p>
            @foreach($sup_cat as $sup)
              @if($sup->id_cat==3)
                <li>{{$sup->name}}</li>
              @endif
            @endforeach
          </p>
        </article>
      </li>
      <li class="one_third first">
        <article><i class="btmspace-30 fa fa-3x fa-gg"></i>
          <h6 class="heading"><a href="{{route('doido')}}">Đồ gia dụng</a></h6>
          <p>
            @foreach($sup_cat as $sup)
              @if($sup->id_cat==4)
                <li>{{$sup->name}}</li>
              @endif
            @endforeach
          </p>
        </article>
      </li>
      <li class="one_third">
        <article><i class="btmspace-30 fa fa-3x fa-superpowers"></i>
          <h6 class="heading"><a href="{{route('doido')}}">Thể thao</a></h6>
          <p>  
            @foreach($sup_cat as $sup)
              @if($sup->id_cat==5)
                <li>{{$sup->name}}</li>
              @endif
            @endforeach
            </p>
        </article>
      </li>
      <li class="one_third">
        <article><i class="btmspace-30 fa fa-3x fa-yelp"></i>
          <h6 class="heading"><a href="{{route('doido')}}">Khác</a></h6>
          <p>  
            @foreach($sup_cat as $sup)
              @if($sup->id_cat==7)
                <li>{{$sup->name}}</li>
              @endif
            @endforeach
          </p>
        </article>
      </li>
    </ul>
  </section>
</div>

<!-- Hiển thị hình ảnh được trả phí -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
      <center><h1>Mặt Hàng Mới Nhất</h1></center>
      <br>
    <div class="group latest">
        @foreach($new_product as $new_prod)
        @if($new_prod->id==1)
        <article class="one_third first">
        @else
        <article class="one_third ">  
        @endif
        <?php
        $image = explode('|',$new_prod->image);
        ?>
        <figure><a href="{{route('chitiet',$new_prod->id)}}"><img class = 'imgdetail' src="img/product/<?php echo $image[0]?>" alt=""></a></figure>
            <div class="txtwrap">
              <h4 class="">{{$new_prod->name}}</h4>
              <h4><?php echo number_format($new_prod->price ).' VNĐ<br>';?></h4>
              <p>{{$new_prod->description}}</p>
            </div>
        </article>
        @endforeach
    </div>
  </section>
</div>
<!-- Hiển thị CLB -->
<center><h1>Các Câu Lạc Bộ</h1></center>
        <br>  
        <div class="row container_donate">
          @foreach($club as $cl)
            <div class="column imageClub">
              <h4>{{$cl['username']}}</h4>
              <img src="img/club/{{$cl->avata}}" class="imgstyleac" alt="Image">
              <br><br>    
              <a href="{{route('clb',$cl['id'])}}">>>Đọc thêm</a>
            </div>

          @endforeach
        </div>
@endsection