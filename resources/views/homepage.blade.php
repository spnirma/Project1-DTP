<!--Homepage management-->
@extends('partisi.body')
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>HomePage Config - Admin</title>
	<link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
        <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Homepage Management</h1>
            <ol class="breadcrumb">
              <li><a href="{{url('/')}}">Dashboard</a></li>
              <li class="active">Homepage Management</li>
            </ol>
              
                        </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
          <div>

          <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="#produk_row" aria-controls="home" role="tab" data-toggle="tab">product category Rows</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Welcome Messages</a></li>
            <li role="presentation"><a href="#footer" aria-controls="footer" role="tab" data-toggle="tab">Footer</a></li>
            <li role="presentation"><a href="#rekomendasi" aria-controls="rekomendasi" role="tab" data-toggle="tab">Recommended Product</a></li>
            <!-- <li role="presentation"><a href="#feature" aria-controls="feature" role="tab" data-toggle="tab">Featured Merchant</a></li> -->
            <!-- <li role="presentation"><a href="#kategori" aria-controls="kategori" role="tab" data-toggle="tab">Kategori</a></li> -->
            <!-- <li role="presentation"><a href="#flat-row" aria-controls="flat-row" role="tab" data-toggle="tab">Flat Rows</a></li> -->
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="produk_row">
                <div class="table-responsive">
                  <table class="table table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>product category Row</th>
                        <th>image</th>
                        <th>Show / Hide</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                                                                  <tr data-id="1">
                        <td>Mobile Legends</td>
                        <td>
                            <input name="banner_upload" type="file" class="form-control" id="banner_upload"></input>
                            <script>
                            $("#banner_upload").change(function(){
                              var file = $("#banner_upload")[0].files[0];
                              var reader = new FileReader();                                       
                              reader.onload = function(e) {
                                $("#banner_upload_preview").attr("src", e.target.result);
                              }
                              reader.readAsDataURL(file);
                            })
                            </script>
                        </td>
                        <td class="value_config">Show</td>
                        <td>
                           <a href="#"><button type="button" class="btn btn-xs btn-warning edit_status_value"><i class="fa fa-edit"></i>Hide</button></a>
                          <a href="{{url('edittitle')}}"><button type="button" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i>Edit Title</button></a>
                        <td>
                        </td>                    
                      </tr>
                                            <tr data-id="7">
                        <td>Free Fire</td>
                        <td>
                          <input name="banner_upload" type="file" class="form-control" id="banner_upload"></input>
                          <script>
                          $("#banner_upload").change(function(){
                            var file = $("#banner_upload")[0].files[0];
                            var reader = new FileReader();                                       
                            reader.onload = function(e) {
                              $("#banner_upload_preview").attr("src", e.target.result);
                            }
                            reader.readAsDataURL(file);
                          })
                          </script>
                      </td>
                        <td class="value_config">Show</td>
                        <td>
                         
                                                                              <a href="#"><button type="button" class="btn btn-xs btn-warning edit_status_value"><i class="fa fa-edit"></i>Hide</button></a>
                          <a href="{{url('edittitle')}}"><button type="button" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i>Edit Title</button></a>
                        <td>
                        </td>                    
                      </tr>
                    </tr>
                    <tr data-id="5">
<td>PUBG</td>
<td>
  <input name="banner_upload" type="file" class="form-control" id="banner_upload"></input>
  <script>
  $("#banner_upload").change(function(){
    var file = $("#banner_upload")[0].files[0];
    var reader = new FileReader();                                       
    reader.onload = function(e) {
      $("#banner_upload_preview").attr("src", e.target.result);
    }
    reader.readAsDataURL(file);
  })
  </script>
</td>
<td class="value_config">Show</td>
<td>
                       
                                                      <a href="#"><button type="button" class="btn btn-xs btn-warning edit_status_value"><i class="fa fa-edit"></i>Hide</button></a>
  <a href="{{url('edittitle')}}"><button type="button" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i>Edit Title</button></a>
<td>
</td>                    
</tr>

                                          </tbody>
                  </table>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">
                                <br>
                                <form method="GET" action="" class="form-horizontal" role="form">
                  <div class="form-group">
                    <div class="col-lg-6">
                      <input value="Homepage Text" type="text" class="form-control" id="title" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-4">
                    <textarea col="30" name="deskripsi_en" type="text" class="form-control rich-editor" id="deskripsi_en" placeholder="Text"></textarea>
                    </div>
                </div>
                  <div class="form-group">
                    <div class="col-lg-12">
                      <button class="btn btn-primary" type="submit" name="simpan" value="1">Save</button>
                    </div>
                  </div>
                </form>
                            </div>


            <div role="tabpanel" class="tab-pane" id="footer">
                <div class="table-responsive">
                  <table class="table table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>Footer Rows</th>
                        <th>Show / Hide</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>

                                            <tr data-id="13">
                        <td>Informasi</td>
                        <td class="value_config">Show</td>
                        <td>
                          <a href="{{url('footerHP')}}" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Footer Link</a>
                          <button type="button" class="btn btn-xs btn-warning edit_status_value"><i class="fa fa-edit"></i> Hide</button>
                        </td>                    
                      </tr>
                                            <tr data-id="14">
                        <td>Follow Us</td>
                        <td class="value_config">Show</td>
                        <td>
                          <a href="{{url('footerHP2')}}" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Footer Link</a>
                          <button type="button" class="btn btn-xs btn-warning edit_status_value"><i class="fa fa-edit"></i> Hide</button>
                        </td>                    
                      </tr>
                                            <tr data-id="15">
                        <td>Customer Service</td>
                        <td class="value_config">Show</td>
                        <td>
                          <a href="{{url('footerHP3')}}" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Footer Link</a>
                          <button type="button" class="btn btn-xs btn-warning edit_status_value"><i class="fa fa-edit"></i> Hide</button>
                        </td>                    
                      </tr>
                                          </tbody>
                  </table>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="rekomendasi">
                <br>
                <form method="GET" action="" class="form-horizontal" role="form">
                 <div class="row">
                  <div class="col-lg-12" style="background-color: #F5F5F5; border-left: 5px solid #ccc;">
                    <div class="form-group">
                      <div class="col-lg-12">
                      	<div style="padding-top: 5px; padding-bottom: 5px;">Add Recommended Product</div>
                      </div>
                      <div class="col-lg-6">
                      	<input value="" name="nama_produk" type="text" class="form-control" id="produk_rekomendasi_search" placeholder="Product Name">
                      	<input value="" style="width:130px;" name="id_produk" type="hidden" class="form-control" id="produk_auto_id" placeholder="Merchant">
                      </div>
                      <div class="col-lg-4">
                        <select name="rekomendasi_type" class="form-control" id="rekomendasi_type_id" placeholder="Tipe Rekomendasi">
                            <option value="">-- Recommendation Type --</option>
                          
                            <option value="TERBARU">Lates</option>
                            <option value="LEBIHAWAL">Earlier</option>
                        </select>
                      </div>
                      <div class="col-lg-4">
                        <select name="rekomendasi_type" class="form-control" id="rekomendasi_type_id" placeholder="Tipe Rekomendasi">
                            <option value="">-- Product Category --</option>
                          
                            <option value="ML">Mobile Legends</option>
                            <option value="FREEFIRE">Free Fire</option>
                            <option value="PUBG">PUBG</option>
                        </select>
                      </div>
                      <div class="col-lg-2">
                        <button class="btn btn-primary" type="submit" name="simpan_rekomendasi" value="1"><span class="fa fa-floppy-o"></span> Save</button>
                      </div>
                    </div>
                  </div>
                </form>
                <br style="clear: all" />
                  <table class="table table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>info</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Recommendation Type</th>
                        <th>Category</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  <tbody>
                    <tr>
                      <td><input name="banner_upload" type="file" class="form-control" id="banner_upload"></input>
                        <script>
                        $("#banner_upload").change(function(){
                          var file = $("#banner_upload")[0].files[0];
                          var reader = new FileReader();                                       
                          reader.onload = function(e) {
                            $("#banner_upload_preview").attr("src", e.target.result);
                          }
                          reader.readAsDataURL(file);
                        })
                        </script>
                      </td>
                      <td>Mozila</td>
                      <td>info</td>
                      <td>Rp.200.000</td>
                      <td> <a href="{{url('desc')}}" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a></td>
                      <td>Earlier</td>
                      <td>Mobile Legends</td>
                      <td>
                                                                    <a href="#" type="button" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Down</a>
                                                                    <a href="#" type="button" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Up</a>
                                              <a href="#" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</a>
                      </td>    
                    </tr>
        
                  </table>
        </div>
            </div>
          </div>
        </div>

      </div><!-- /#page-wrapper -->   
</div>
@endsection