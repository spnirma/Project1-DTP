<!--Redish cache-->
@extends('partisi.body')
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>RedisCache - Admin</title>
	<link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div id="page-wrapper">

    <div class="row">
      <div class="col-xs-12">
        <h1>Redis Cache Management</h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li class="active">Redis Management</li>
        </ol>
        
                  </div>
    </div><!-- /.row -->

       
        <!-- <div class="row">
            <div class="form-group">
                <label for="" class="col-lg-2 control-label">Homepage </label>
                <div class="col-lg-4">
                    <button class="redis-action btn btn-primary" data-redis-key="Home" id="redis-home"><i class="fa fa-refresh"></i> Refresh Cache</button>
                </div>
            </div>
        </div> -->

        <div class="row">
            <div class="form-group">
                <label for="" class="col-lg-2 control-label">Homepage ID </label>
                <div class="col-lg-4">
                    <button class="redis-action btn btn-primary" data-redis-key="iimotion_main_home_page_id" id="redis-home"><i class="fa fa-refresh"></i> Refresh Cache</button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="" class="col-lg-2 control-label">Homepage EN </label>
                <div class="col-lg-4">
                    <button class="redis-action btn btn-primary" data-redis-key="iimotion_main_home_page_en" id="redis-home"><i class="fa fa-refresh"></i> Refresh Cache</button>
                </div>
            </div>
        </div>

     
  

       
        <div class="row">
          <div class="form-group">
              <label for="" class="col-lg-2 control-label">Homepage Config </label>
              <div class="col-lg-4">
                  <button class="redis-action btn btn-primary" data-redis-key="homepageConfig" id="redis-homepage-config"><i class="fa fa-refresh"></i> Refresh Cache</button>
              </div>
            </div>
        </div>

        <div class="row">
          <div class="form-group">
              <label for="" class="col-lg-2 control-label">Homepage Footer </label>
              <div class="col-lg-4">
                  <button class="redis-action btn btn-primary" data-redis-key="homepageFooter" id="redis-homepage-footer"><i class="fa fa-refresh"></i> Refresh Cache</button>
              </div>
            </div>
        </div>

  </div><!-- /#page-wrapper -->   
</div>
@endsection