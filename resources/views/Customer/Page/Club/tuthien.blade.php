@extends('Customer.Layout.master')
@section('precontent')
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class=" sidebar one_quarter first "> 
      <header class="heading">Danh Mục CLB</header>
      <nav class="sdb_holder">
        <ul>
          @foreach($club as $cl)
          <li><a href="{{route('clb',$cl['id'])}}">{{$cl->username}}</a></li>
          @endforeach
        </ul>
      </nav>
    </div>
   <div class=" content three_quarter  "> 
      <div class="content"> 
        <div id="gallery">
          <figure>
            <header class="heading">Câu Lạc Bộ</header>
            <div class="row">
              @foreach($club as $cl)
              <div class="column imageTuthien">
                  <h3>{{$cl->username}}</h3>
                  <img src="img/club/{{$cl->avata}}" class="imgstyleac" alt="Image">
                  <br><br>
                  <a href="{{route('clb',$cl['id'] )}}">>>Thêm</a>
              </div>
              @endforeach
        </div>
          </figure>
        </div>
      </div>
      <div class="clear"></div>
  </div>
  </main>	
</div>
@endsection