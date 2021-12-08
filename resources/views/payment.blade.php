<!--payment-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Payment - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1> All Payment</h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Dashboard</a></li>
                <li class="active">payment</li>
            </ol>
            
                        <h3>Payment List</h3>
            <form method="get" action="">
                
                <!-- <input value="" name="mail" type="text" style="padding: 5px 33px 6px 6px;" id="mail" placeholder="Email"> -->
                <input value="" name="nama produk" type="text" style="padding: 5px 33px 6px 6px;" id="mail" placeholder="Product Name">
               
                <input type="submit" value="Search" style="padding: 5px 33px 6px 6px;">
                <a href="#"><input type="button" value="Refresh" style="padding: 5px 33px 6px 6px;"></a>
	    </form>
            <br>
            <br>
            <div class="table-responsive">
                <form method="post" action="https://admin.fesyarjawa.com/admin/payment/release_all">
                    <table class="table table-bordered table-hover table-striped tablesorter">
                        <thead>
                            <tr>
                                <th><div align='center'></div></th>
                        <th><div align='center'>No.</div></th>
			<th><div align='center'>Product Name</div></th>
                        <th><div align='center'>Nominal</div></th>
                        <th><div align='center'>Type of Payment</div></th>
                        <th><div align='center'>VA</div></th>
                        <th><div align='center'>Status</div></th>
                        <th><div align='center'>Time</div></th>
                        <!-- <th><div align='center'>Action</div></th>                     -->
                        </tr>
                        </thead>
                        <tbody>
                                                            <tr>
                                    <td><div align='center'>
                                                                                <td><div align='center'>1</div></td>
                                    <td><div align='center'>avenger mobile</div></td>
				    <td><div align='center'>0</div></td>
                                    <td><div align='center'>Free Of Charge</div></td>
                                    <td><div align='center'></div></td>
                                    <td><div align='center'>Unpaid</div></td>
                                    <td><div align='center'>2020-10-08 14:34:43</div></td>
                                </tr>
                                <tr>
                                    <td><div align='center'>
                                                                                <td><div align='center'>2</div></td>
                                    <td><div align='center'>avenger mobile</div></td>
				    <td><div align='center'>0</div></td>
                                    <td><div align='center'>Free Of Charge</div></td>
                                    <td><div align='center'></div></td>
                                    <td><div align='center'>Unpaid</div></td>
                                    <td><div align='center'>2020-10-08 14:34:43</div></td>
                                </tr>
                                <tr>
                                    <td><div align='center'>
                                                                                <td><div align='center'>3</div></td>
                                    <td><div align='center'>avenger mobile</div></td>
				    <td><div align='center'>0</div></td>
                                    <td><div align='center'>Free Of Charge</div></td>
                                    <td><div align='center'></div></td>
                                    <td><div align='center'>Unpaid</div></td>
                                    <td><div align='center'>2020-10-08 14:34:43</div></td>
                                </tr>
                                
                                                    </tbody>
                    </table>
                                    </form>
            </div>
        </div>
        <div style="margin-right:auto;margin-left: auto;width: 30%"><ul class="pagination pull-right"><li><a class="round-icon" href="#" data-toggle="tooltip" data-title="Previous Page">&laquo;</a></li><li><a href="" style="text-decoration:underline">1</a></li><li><a href="?hal=2">2</a></li><li><a href="?hal=3">3</a></li><li><a>...</a></li><li><a href="?hal=167">167</a></li><li><a class="round-icon" href="?hal=2" data-toggle="tooltip" data-title="Next Page">&raquo;</a></li></ul></div>
    </div>
</div><!-- /.row -->

</div><!-- /#page-wrapper -->   
    </div><!-- /#wrapper -->

</div>
@endsection