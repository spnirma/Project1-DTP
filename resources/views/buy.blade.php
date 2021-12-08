<!-- product verified/ML-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>buy - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div id="page-wrapper">

    <div class="row">
      <div class="col-lg-12">
        <h1>Buy</h1>
        <ol class="breadcrumb" style="height:30px;">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li class="active">Product</li>
     
    </div><!-- /.row -->

    <div class="row">
      <div class="col-lg-12">
        <div class="search">
          <form method="GET" action="" class="form-inline" role="form">
            <div class="form-group">
              
            <div class="form-group">
              <input value="" name="s" type="text" class="form-control" id="cari_produk" placeholder="Product Name">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
                            <button name="export" value="export" type="submit" class="btn btn-primary"><i class="fa fa-file"></i> Export</button>
                          </form>
        </div>
        <br>
        <div class="table-responsive">
          <table class="table table-hover table-striped tablesorter">
            <thead>
              <tr>
                <th>No</th>
                <th>Time</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>description</th>
                                    <th>Buyer Email</th>
                                   
                                  </tr>
            </thead>
            <tbody>
        <td>1</td>
                <td>2021-10-10 16.08.12</td>
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
                  </script></td>
                <td>
                ayez
                </td>
                <td>Rp.300.000</td>
                <td> <a href="{{url('desc')}}" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a></td>
                
                                    <td>
                                      shinta.putrinirmala91@gmail.com
                                    </td>
                
                                  
            </tr>
                            </tbody>
        </table>

      
        
      </div>
      <ul class="pagination pull-right"><li><a class="round-icon" href="#" data-toggle="tooltip" data-title="Previous Page">&laquo;</a></li><li><a href="" style="text-decoration:underline">1</a></li><li><a href="?hal=2">2</a></li><li><a href="?hal=3">3</a></li><li><a>...</a></li><li><a href="?hal=81">81</a></li><li><a class="round-icon" href="?hal=2" data-toggle="tooltip" data-title="Next Page">&raquo;</a></li></ul>          </div>
  </div><!-- /.row -->
</div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->
</div>
@endsection