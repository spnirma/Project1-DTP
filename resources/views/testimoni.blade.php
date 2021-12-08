<!--payment-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Testimonial - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1> Testimonial</h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Dashboard</a></li>
                <li class="active">testimonial</li>
            </ol>
            
            <form method="get" action="">
                
                <!-- <input value="" name="mail" type="text" style="padding: 5px 33px 6px 6px;" id="mail" placeholder="Email"> -->
                <input value="" name="nama produk" type="text" style="padding: 5px 33px 6px 6px;" id="mail" placeholder="Appraiser Name">
               
                <input type="submit" value="Search" style="padding: 5px 33px 6px 6px;">
              
	    </form>

        <div role="tabpanel" class="tab-pane active" id="produk_row">
            <div class="table-responsive">
              <table class="table table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>image</th>
                    <th>Date</th>
                    <th>Text</th>
                  </tr>
                </thead>
                <tbody>
                                                              <tr data-id="1">
                    <td>Swisyanto</td>
                    <td>
                        <input name="banner_upload" type="file" class="form-control" id="banner_upload"></input>
                        <script>
                        $("#banner_upload").change(function(){
                          var file = $("#banner_upload")[0].files[0];
                          var reader = new FileReader();                                       
                          reader.onload = function(e) {
                            $("#banner_upload_preview").attr("src", e.target.result);
                          }
                          reader.readAsDataURL(file);
                        })
                        </script>
                    </td>
                    <td >2021-8-10</td>
               <td>--------------------------------------------</td>                  
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
        <div style="margin-right:auto;margin-left: auto;width: 30%"><ul class="pagination pull-right"><li><a class="round-icon" href="#" data-toggle="tooltip" data-title="Previous Page">&laquo;</a></li><li><a href="" style="text-decoration:underline">1</a></li><li><a href="?hal=2">2</a></li><li><a href="?hal=3">3</a></li><li><a>...</a></li><li><a href="?hal=167">167</a></li><li><a class="round-icon" href="?hal=2" data-toggle="tooltip" data-title="Next Page">&raquo;</a></li></ul></div>
    </div>
</div><!-- /.row -->

</div><!-- /#page-wrapper -->   
    </div><!-- /#wrapper -->

</div>
@endsection