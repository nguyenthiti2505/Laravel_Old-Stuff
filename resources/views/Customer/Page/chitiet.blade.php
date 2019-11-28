@extends('Customer.Layout.master')
@section('precontent')
<div class="wrapper row3">
    <main class=" hoc container clear"> 
        <div class="w3-bar">
          @foreach($category as $cate)
            <button class="btntab btn  " onclick="openCategory('{{$cate->id}}')">{{$cate->name_cat}}</button>
          @endforeach
        </div>
        <br>
        @foreach($category as $cate)
          @if($cate->id==1)
            <div id= {{$cate->id}} class="category row" >
          @else
            <div id= {{$cate->id}} class="category row" style="display:none">
          @endif
  
              <div  class="w3-container  sidebar one_quarter first col-md-3" >
                <h6>{{$cate->name_cat}}</h6>
                <nav class="sdb_holder">
                  <ul>
                    @foreach($sup_cat as $sup)
                    @if($cate->id==$sup->id_cat)
                    <li><a href="#">{{$sup->name}}</a></li>
                    @endif
                    @endforeach
                  </ul>
                </nav>
              </div>
              <div class=" col-md-9"  > 
                <div class="content three_quarter"> 
                    <div class="content"> 
                        <div class = "row">
                            <div class="col-md-8">
                              @foreach($sp_chitiet as $prod)
                                <?php
                                $image = explode('|',$prod->image);
                                $size=sizeof($image);
                                ?>
                                  <img class = "imgchitiet" src="img/product/<?php echo  $image[0]?>" alt=""> <br>
                                @foreach ($image as $img)
                                  <div class="  img-thumbnail " >
                                    <img src="img/product/{{$img}}" class=" chitiet_1" alt="Cinque Terre">
                                  </div>
                                @endforeach 
                              @endforeach
                            </div>
                            <div class="col-md-4">
                                <div class="txtwrap">
                                  <h4 class="heading">Thông Tin Sản Phẩm</h4>
                                  @foreach($sp_chitiet as $prod)
                                    <div class="txtwrap">
                                      <h4 class="">{{$prod->name}} </h4>
                                      <h4><?php echo number_format($prod->price ).' VNĐ<br>';?></h4>
                                      <p>{{$prod->description}}</p>
                                      <form action="{{route('tragia',$prod->id)}}" method="post">
                                       {{ csrf_field() }}
                                       <label for="upload-file">Trả giá:</label>
                                       <input type="text" name="tragia" class="form-control-file" id="tragia">
                                       <br>
                                       <button type="submit" onclick="myFunction()"  name="submit" class="btn mag-btn mt-30">Trả Giá</button></p>
                                     </form>
                                    </div>
                                  @endforeach
                                  <script>
                                    function myFunction() {
                                      alert("Trả giá thành công!");
                                    }
                                  </script>
                                </div>
                                <div>
                                  <h4 class="heading">Liên hệ</h4>
                                  <h5 class="fa fa-user-circle" >Ngo Thi Kim thao</h5><br>
                                  <h5 class="fa fa-phone" >0854836136</h5><br>
                                  <p class="fa fa-email" >thao.ngo@gmail.com</p>
                                </div>
                              </div>
                        </div>
                    </div>      
                </div>
                <div class="clear"></div>
              </div>
            </div>
        @endforeach
      <script>
        function openCategory(category) {
          var i;
          var x = document.getElementsByClassName("category");
          for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";  
          }
          document.getElementById(category).style.display = "block";  
        }
     
      </script>
    </main>	
<br><br><br><br><br><br><br>
@endsection
