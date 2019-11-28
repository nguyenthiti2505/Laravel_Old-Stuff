@extends('Customer.Layout.master')
@section('precontent')
	<body id="top">
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="group latest">
        <center><h1>{{$nameclub}}</h1></center>
        <br>
        @foreach($clubs as $cl)
          <div>
            <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/club/{{$cl['image']}});">
            <div class="top-left">
               <p style="text-align: center;"><span style="font-size: 120%;">
              {{$cl['content']}}
            </div> 
            <div class="bottom-left"><button type="button" class="btn btn-warning"><a href="{{route('donate',$cl['id'])}}">Quyên Góp</a></button></div>
            </div>
        @endforeach
        
        <center><h1>Ảnh hoạt động</h1></center>
        <div class="row container_donate">
          @foreach($img as $im)
            <div class="column imageClub">
              <img src="img/club/{{$im['image']}}" class="imgstyleac" alt="Image">
              <h4>{{$im['content']}}</h4>
            </div>
          @endforeach
        </div>

        <center><h1>Quyên Góp</h1></center>
          <div class="row">
            @foreach($user_donate as $value)
              <div class="column imageClub">
                   <img class = "imgchitiet" src="img/product/{{$value->image}}" alt=""> <br>
                    <h5>Người quyên góp : <b>{{$value->name}} </b></h5>
                    <h5>Ngày : <b>{{$value->email_verified_at}}</b></h5>
                    <h5><b>{{$value->content}}</b></h5>
              </div>
            @endforeach
          </div>
    </div>
  </section>
</div>

</body>
@endsection