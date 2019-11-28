<div class="bgded overlay"> 

<!-- style="background-image:url('natucam/images/demo/backgrounds/01.png'); -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1>Chợ đồ cũ </h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="{{route('index')}}">Trang chủ</a></li>
        <li><a  href="{{route('doido')}}">Đồ cũ</a></li>
        <li><a href="{{route('tuthien')}}">Từ thiện</a></li> 
          <span class="glyphicon glyphicon-user"></span>
            @if(Session::has('user'))
              <li><a class="drop">{{Session::get('user.name')}}</a>
                <ul>
                  <li>
                    <a href="{{ route('viewprofile',Session::get('user.id')) }}">Trang cá nhân</a>
                  </li>
            @else
                  <li><a class="drop">Tài khoản</a>
                <ul>
                  <li><a href="{{route('login')}}">Đăng nhập</a></li>
            @endif
                  <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                </ul>
              </li>

            @if (Session::has('user'))
              <li><a href="{{route('post')}}" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> Đăng Bài</a></li>
            @else
              
            @endif
        </ul>
      </nav>
    </header>
  </div>
  </div>