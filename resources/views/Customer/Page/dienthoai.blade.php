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
                <div id="gallery">
                  <figure>
                    <div class="group latest">
                        
                      @foreach($dienthoai as $prod)
                      <article class="one_third second">
                        <?php
                        $image = explode('|',$prod->image);
                        ?>
                        <figure><a href="{{route('chitiet',$prod->id)}}"><img class = 'imgdoido' src="img/product/<?php echo $image[0]?>" alt=""></a></figure>
                        <div class="txtwrap">
                              <h4 class="">{{$prod->name}} </h4>
                              <h4><?php echo number_format($prod->price ).' VNĐ<br>';?></h4>
                              <p>{{$prod->description}}</p>
                            </div>
                        </article>
                      
                      @endforeach
                   </div>
                  </figure>
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
    <?php
    function display_price($price, $price_sale){
        if($price == 0){
            return '<div class="price">Liên hệ</div>';
        }else{
            if($price_sale > 0 && $price > $price_sale){
                $price_html = '<span>'. number_format($price ,0 ,'.' ,'.').' Đ' .'</span>';
                $price_html .= number_format($price_sale ,0 ,'.' ,'.').' Đ';
            }else{
                $price_html = number_format($price ,0 ,'.' ,'.').' Đ';
            }
            return '<div class="price">' . $price_html . '</div>';
        }
    }
    ?>
  </main>	
</div>
@endsection
