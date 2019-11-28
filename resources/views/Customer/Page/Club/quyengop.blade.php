@extends('Customer.Layout.master')
@section('precontent')
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
                            <h2>Quyên Góp</h2>
                        </div>

                        <div class="post-info mt-30">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="upload-file">Đăng ảnh</label>
                                    <input type="file" name="image" class="form-control-file" id="upload-file">
                                </div>
                                <input type="hidden" id="idclub" name="idclub" value="">
                                <div class="form-group">
                                    <label for="upload-file">Loại sản phẩm</label>
                                    <select name="name"  id="category" class="form-control">
                                        @foreach($category as $cate)
                                          <option value="{{$cate->id}}">{{$cate->name_cat}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Ten san pham</label>
                                    <select name="subcategory" id="subcategory" class="form-control">
                                         <option value=""></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Tiêu đề</label>
                                    <input type="text" class="form-control" name="tieude">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Nội dung</label>
                                    <textarea name="txtdescription" class="form-control" cols="30" rows="10" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Lien he</label>
                                    <input type="text" class="form-control" name="contact">
                                </div>
                                <button type="submit" onclick = "myFunction()" name="submit" class="btn mag-btn mt-30"><i class="fa fa-cloud-upload"></i>Quyên góp</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
          alert("Quyên góp thành công!");
        }
    </script>
@endsection