<!--head/setting-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>setting - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <h1>Setting</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Dashboard</a></li>
        <li class="active">setting</li>
      </ol>
      
                </div>
  </div><!-- /.row -->

      <div class="row">
        <div class="col-lg-12">
                   <!-- <form class="form-horizontal" method="post" action="" enctype="multipart/form-data"> -->
                    <form method="GET" action="" class="form-horizontal" role="form" enctype="text/plain">
            <div class="form-group">
              <label for="" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-4">
                <input value="sunardi.wijayanto@indosat.co.id" name="email" type="email" class="form-control" id="nama_produk" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-lg-2 control-label">Old Password</label>
              <div class="col-lg-4">
                <input name="old_password" type="password" class="form-control" id="nama_produk" autocomplete="off" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-lg-2 control-label">New Password</label>
              <div class="col-lg-4">
                <input name="password" type="password" class="form-control" id="nama_produk" autocomplete="off" placeholder="">
              </div>
              <small style="color:red;">*password minimal 6 karakter</small>
            </div>
            <div class="form-group">
              <label for="" class="col-lg-2 control-label">Confirm New Password</label>
              <div class="col-lg-4">
                <input name="passconf" type="password" class="form-control" autocomplete="off" id="passconf" placeholder="" >
              </div>
            <!-- <a href="https://admin.fesyarjawa.com/admin/user/password" data-toggle="modal" data-href="#change-password-form">Change password</a> -->
            </div>
            <div class=""></div>
            <br><br>
            <div style="text-align:center;">
              <button class="btn btn-primary" type="submit" name="simpan" value=1>Save</button>
            </div>                      
            
            </div>
          </form>            
        </div>
      </div><!-- /.row -->

</div>
@endsection