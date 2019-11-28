@extends('Customer.Layout.master')
@section('precontent')
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
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
                            <h2>Sửa bài đăng của bạn</h2>
                        </div>
                        <div class="post-info mt-30">
                             @if($errors->any())
                               <div class="row">
                                <div class="col-md-4"></div>
                                <div class="alert alert-danger col-md-4">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                         <li>{!! $error !!}</li>
                                        @endforeach
                                     </ul> 
                                </div>
                              </div>
                            @endif
                        <form action="{{URL::action('UpdateProductController@postEditProduct',$product->id)}}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                                <div class="form-group">
                                    <label for="upload-file">Đổi ảnh</label>
                                    <input type="file" name="image" class="form-control-file" id="upload-file">
                                    <img src="{!! asset('img/product/'.$product['image']) !!}" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Loại sản phẩm</label>
                                    <select name="name_category"  id="category" class="form-control">
                                        @foreach($cate as $cat)
                                          <option value="{!! $cat['id'] !!}" {!! $cat['id'] == $product['name_category']?'selected' : '' !!}>-- {!! $cat['name_cat'] !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="upload-file">Tên sản phẩm</label>
                                    <input name="name" id="name" class="form-control" value="{!! old ('name',isset($product)?$product['name']:NULL) !!}">
                                </div>

                                <div class="form-group">
                                    <label for="upload-file">Nội dung</label>
                                    <input name="description" class="form-control" cols="30" rows="10" value = "{!! old ('description',isset($product)?$product['description']:NULL) !!}" >
                                <div class="form-group">
                                    <label for="upload-file">Gía*</label>
                                    <input type="text" class="form-control" name="price" value="{!! old ('price',isset($product)?$product['price']:NULL) !!}">
                                </div>

                                <div class="form-group">
                                    <label for="upload-file">status</label>
                                    <input type="text" class="form-control" name="status" value="{!! old ('status',isset($product)?$product['status']:NULL) !!}">
                                </div>
                                <button type="submit" name="submit" class="btn mag-btn mt-30"><i class="fa fa-cloud-upload"></i>Sửa bài</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection