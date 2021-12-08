<!--merchant/merchant unverified-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SellerUnverified - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div id="page-wrapper">

    <div class="row">
      <div class="col-lg-12">
        <h1>Seller's Unverified</h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li class="active">Seller's Unverified</li>
        </ol>
        
                  </div>
    </div><!-- /.row -->
            <div class="row">
      
        <div class="col-lg-12">
            <div class="search">
            <form method="GET" action="" class="form-inline" role="form">

              <div class="form-group">
                <input value="" name="s" type="text" class="form-control" id="" placeholder="Merchant">
              </div>
              <div class="form-group">
                <input value="" name="mail" type="text" class="form-control" id="" placeholder="Email">
              </div>

                                <button type="submit" class="btn btn-primary">Search</button>
                                <button type="submit" class="btn btn-primary" name="export" value='1'>Export</button>
                                <br><br>
              <!-- <input type="checkbox" name="indoloka" value="Y" onchange="this.form.submit()" > Merchant Indoloka -->
            </form>
          </div>
            <br>
            <div class="table-responsive">
                <table class="table table-hover table-striped tablesorter ">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Unverified Date</th>
                            <th>Seller's Name</th>                  
                            <th>Profil</th>                    
                            <th>Number of Product's</th>                                
                            <th>Reason</th>                                

                                                            <th>Status Edit</th>
                                                                                            <th>Remove Seller</th>
                                                        </tr>
                    </thead>
                    <tbody>
                                                </tbody>
                </table>
            </div>
        <ul class="pagination pull-right"><li><a class="round-icon" href="#" data-toggle="tooltip" data-title="Previous Page">&laquo;</a></li></ul>            </div>
      
    </div><!-- /.row -->
    
  </div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->
</div>
@endsection