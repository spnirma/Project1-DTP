<!-- product verified/PUBG-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>PUBG - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div id="page-wrapper">

    <div class="row">
      <div class="col-lg-12">
        <h1>Product Acc PUBG</h1>
        <ol class="breadcrumb" style="height:30px;">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li class="active">Product</li>
          <div class="pull-right">
                        <a href="{{url('Addproduct')}}" type="button" class="btn btn-sm btn-default"><i class="fa fa-plus"></i>Add</button></a>
          <a href="{{url('settingproduct2')}}" type="button" class="btn btn-sm btn-default"><i class="fa fa-cog"></i> Setting</button></a>
                                      <a href="{{url('resetindex2')}}"><button class="btn btn-sm btn-default"><i class="fa fa-exclamation-triangle"></i> Reset Index</button></a>
                        </div>
        </ol>
                              </div>
    </div><!-- /.row -->

    <div class="row">
      <div class="col-lg-12">
        <div class="search">
          <form method="GET" action="" class="form-inline" role="form">
            <div class="form-group">
                <input value="" style="width:130px;" name="mer_name" type="text" class="form-control" id="autocomplete_merchant" placeholder="Merchant">
                <input value="" style="width:130px;" name="mer" type="hidden" class="form-control" id="merchant_auto_id" placeholder="Merchant">


                            <br><br>
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
                <th>Verified Date</th>
                <th>Modified Date</th>
                <th>Seller's Name</th>
                <th>Product Name</th>
                <th>Price</th>
                                    <th>Product Details</th>
                  
                                  </tr>
            </thead>
            <tbody>
        <td>1</td>
                <td>2021-09-11 18:11:18</td>
                <td>2021-09-11 18:11:18</td>
                <td>
                  <a href="{{url('namamerchant2')}}"">Machili</a>
                </td>
                <td>ayez</td>
                <td>rp.200.000</td>
                
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#Veri1" data-id-produk-verify="7382" type="button" class="btn btn-warning btn-xs edit-verify-produk"><i class="fa fa-edit"></i> Edit</a>
                                        <div class="modal fade" id="Veri1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        </div>
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