<!--Homepage management/product rows/edit title-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>EditTitle - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <h1>Homepage Config Edit</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Dashboard</a></li>
        <li><a href="{{url('homepage')}}">Homepage Config</a></li>
        <li class="active">Homepage Config Edit</li>
      </ol>
      
                  
                </div>
  </div><!-- /.row -->

  <div class="row">
    <div class="col-lg-12">
      <form method="GET" action="" class="form-horizontal" role="form">
        <div class="form-group">
          <div class="col-lg-6">
            <input value="Mobile Legends" type="text" class="form-control" id="title" name="name_config">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-12">
            <button class="btn btn-primary" type="submit" name="simpan" value="1">save</button>
          </div>
        </div>
      </form>
    </div>         
  </div><!-- /.row -->
</div><!-- /.row -->
@endsection