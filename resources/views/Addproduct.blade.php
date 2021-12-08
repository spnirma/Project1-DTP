<!--Homepage management/product rows/edit title-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>AddProduct - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <h1>Add Produk</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Dashboard</a></li>
        <li><a href="#" onclick="window.history.back();return false;">Produk</a></li>
        <li class="active">Add</li>
      </ol>
      
                </div>
  </div><!-- /.row -->
      <div class="row">
        <div class="col-lg-12">
          <form onsubmit="return submit_produk()" class="form-horizontal" method="post" action="https://admin.fesyarjawa.com/admin/produk/add">
            <!-- <div class="form-group">
              <label for="" class="col-lg-2 control-label">Parent Product</label>
              <div class="col-lg-4">
                <input value="" name="parent_produk" type="text" class="form-control" id="parent_produk" placeholder="">
              </div>
            </div> -->
           
            <div class="from-group">
              <label for="" class="col-lg-2 control-label">Product Name</label>
              <div class="col-lg-4">
                <input value="" name="nama_produk" type="text" class="form-control" id="nama_produk" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-lg-2 control-label">Description</label>
              <div class="col-lg-4">
                <textarea name="deskripsi" class="form-control" id="deskripsi" placeholder="" rows=5></textarea>
              </div>
            </div>
          
            <div class="form-group">
              <label for="" class="col-lg-2 control-label">Price from merchant</label>
              <div class="col-lg-4">
                <div class="input-group">
                <span class="input-group-addon">Rp</span>
                <input value="1" onkeypress="return isNumberKey(event)" name="harga_produk" type="text" class="form-control" id="harga_produk" placeholder="">
              </div>
              </div>
            </div>
           
            <div class="form-group">
              <label for="" class="col-lg-2 control-label">Price for public</label>
              <div class="col-lg-4">
                <div class="input-group">
                <span class="input-group-addon">Rp</span>
                <input value="1" onkeypress="return isNumberKey(event)" readonly="" name="harga_jual" type="text" class="form-control" id="harga_jual" placeholder="">
              </div>
              </div>
            </div>
           

                                <div class="form-group" id="category-parent">
                <label for="" class="col-lg-2 control-label">Category</label>
                <div class="col-lg-4">
                  <select name="id_kategori" class="form-control parent_category" id="id_kategori" data-sub="0" placeholder="">
                    <option value="">-- Choose Category --</option>
                    <option value="29">Mobile Legends</option><option value="29">Free Fire</option><option value="29">PUBG</option>                             </select>
                </div>
              </div>

       <!--      <div class="form-group">
              <label for="" class="col-lg-2 control-label">Tag</label>
              <div class="col-lg-4">
                <input name="nama_tag" type="text" class="form-control" id="nama_tag" placeholder=""> comma separated
              </div>
            </div> -->
            <div class="form-group">
              <label for="" class="col-lg-2 control-label">Image</label>
              <div class="col-lg-8">
                <div class="row" id="photo-container">
                  <div id="add-photo1" class="col-lg-2 add-foto">
                    <input name="banner_upload" type="file" class="form-control" id="add-photo1"></input>
                          <script>
                          $("#banner_upload").change(function(){
                            var file = $("#banner_upload")[0].files[0];
                            var reader = new FileReader();                                       
                            reader.onload = function(e) {
                              $("#banner_upload_preview").attr("src", e.target.result);
                            }
                            reader.readAsDataURL(file);
                          })
                          </script><span class="plus">+</span></div>
                  <div id="add-photo2" class="col-lg-2 add-foto">
                    <input name="banner_upload" type="file" class="form-control" id="add-photo2"></input>
                    <script>
                    $("#banner_upload").change(function(){
                      var file = $("#banner_upload")[0].files[0];
                      var reader = new FileReader();                                       
                      reader.onload = function(e) {
                        $("#banner_upload_preview").attr("src", e.target.result);
                      }
                      reader.readAsDataURL(file);
                    })
                    </script><span class="plus">+</span></div>
                  <div id="add-photo3" class="col-lg-2 add-foto">
                    <input name="banner_upload" type="file" class="form-control" id="add-photo3"></input>
                    <script>
                    $("#banner_upload").change(function(){
                      var file = $("#banner_upload")[0].files[0];
                      var reader = new FileReader();                                       
                      reader.onload = function(e) {
                        $("#banner_upload_preview").attr("src", e.target.result);
                      }
                      reader.readAsDataURL(file);
                    })
                    </script><span class="plus">+</span></div>
                  <div id="add-photo4" class="col-lg-2 add-foto">
                    <input name="banner_upload" type="file" class="form-control" id="add-photo4"></input>
                    <script>
                    $("#banner_upload").change(function(){
                      var file = $("#banner_upload")[0].files[0];
                      var reader = new FileReader();                                       
                      reader.onload = function(e) {
                        $("#banner_upload_preview").attr("src", e.target.result);
                      }
                      reader.readAsDataURL(file);
                    })
                    </script><span class="plus">+</span></div>
                </div>
                <div class="row">
                   <div class="col-lg-8" style="color: #888">
                     * Maksimal ukuran foto adalah : 300M<br />
                     * Foto harus square (panjang dan lebar harus sama)<br />
                   </div>
               </div>
              </div>
            </div>
           
                              <div class="form-group">
              <label class="col-lg-2 control-label">Status</label>
              <div class="col-lg-4">
                  <select  class="form-control" id="publish" name="publish">
                <option value="0">Moderasi</option>
                <option value="1">Publish</option>
                  </select>
              </div>
          </div>
                            <div class="clearfix"></div>
            <br><br>
            <div style="text-align:center;">
              <input type="hidden" name="simpan" value="1">
              <button class="btn btn-primary save-product" type="submit" name="simpan" value=1>Save</button>
            </div>

            </div>
          </form>
        </div>
      </div><!-- /.row -->
</div><!-- /.row -->
@endsection