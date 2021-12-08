<!--Homepage management/product rows/edit title-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SetFF - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div id="page-wrapper">

    <div class="row">
      <div class="col-lg-12">
        <h1>Reset Index</h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li><a href="{{url('FF')}}">Produk</a></li>
          <li class="active">Reset Index</li>
        </ol>
        
                  </div>
    </div><!-- /.row -->

    <div class="row">
      <div class="col-xs-12">
          <div class="panel panel-default">
            <div class="panel-heading">Reset Index</div>
            <div class="panel-body" style="text-align:center;">
              <p>Apakah anda yakin akan melakukan reset index produk?</p>
              <form action="https://admin.fesyarjawa.com/admin/produk/reset_index" method="POST">
                  <button class="btn btn-primary" name="submit" value="ya">Iya</button>
                  <button class="btn btn-default" style="color: #FFF;background-color: #D9534F;border-color: #D43F3A;" name="submit" value="tidak">Tidak</button>
              </form>
            </div>
          </div>
      </div>
  </div>

</div>
  </div>
@endsection