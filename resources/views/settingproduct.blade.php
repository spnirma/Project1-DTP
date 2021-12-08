<!--Homepage management/product rows/edit title-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SetML - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div id="page-wrapper">

    <div class="row">
      <div class="col-lg-12">
        <h1>Product</h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li><a href="{{url('ML')}}">Produk</a></li>
          <li class="active">Setting</li>
        </ol>
        
                  </div>
    </div><!-- /.row -->

    <div class="row">
      <div class="col-lg-12">
        
        <form class="form-horizontal" method="GET" action="" enctype="multipart/form-data">
         
          <div class="form-group">
            <label for="watermark" class="col-lg-2 control-label">Watermark</label>
            <div class="col-lg-4">
              <input name="watermark" type="file" class="form-control" id="watermark" placeholder="">
              <small >klik di sini</small>
              <small style="color:red;"> *menggunakan file .png</small>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
              <button class="btn btn-primary pull-right" type="submit" name="simpan" value=1>Save</button>                  
            </div>
          </div>
        </form>            
      </div>
    </div><!-- /.row -->

  </div><!-- /#page-wrapper -->   
</div><!-- /.row -->

  </div><!-- /#page-wrapper -->   
</div><!-- /.row -->
@endsection