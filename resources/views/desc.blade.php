<!--Homepage management/product rows/edit title-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>FooterHomepage - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
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
      <form method="post" action="" class="form-horizontal" role="form" enctype="multipart/form-data">
        <div class="col-lg-12">
          <div class="form-group">
            <label for="" class="col-lg-2 control-label">Description-ID</label>
            <div class="col-lg-4">
              <textarea name="deskripsi" class="form-control" id="deskripsi" placeholder="Tulis di sini" rows=5></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-lg-2 control-label">Description-IG</label>
            <div class="col-lg-4">
              <textarea name="deskripsi" class="form-control" id="deskripsi" placeholder="Write here" rows=5></textarea>
            </div>
          </div>
                      <div class="form-group">
          <div class="col-lg-4">
              <button class="btn btn-primary" type="submit" name="save" value="1">Save</button>
            </div>
        </div>
        </div>
      </form>
   
    </div>

  </div>
    </div>
  </div><!-- /.row -->
</div><!-- /.row -->
@endsection