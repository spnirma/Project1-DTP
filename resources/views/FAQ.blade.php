<!--Homepage management-->
@extends('partisi.body')
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>FAQ - Admin</title>
	<link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
        <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>FAQ</h1>
            <ol class="breadcrumb">
              <li><a href="{{url('/')}}">Dashboard</a></li>
              <li class="active">FAQ</li>
            </ol>
              
                        </div>
        </div><!-- /.row -->
        <div class="row">
     <div class="col-lg-12">
       <div class="search" style="margin-bottom:5px">
        <form method="GET" class="form-inline" role="form">
          <div class="form-group">
                        <button type="submit" name="ex" id="export" value="export" class="btn btn-primary">Export</button>
          </div>
        </form>
        </div>
      </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
          <div>

          <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="#produk_row" aria-controls="home" role="tab" data-toggle="tab">privacy</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">payments</a></li>
            <li role="presentation"><a href="#footer" aria-controls="footer" role="tab" data-toggle="tab">account</a></li>
            <li role="presentation"><a href="#rekomendasi" aria-controls="rekomendasi" role="tab" data-toggle="tab">delivery</a></li>
            <!-- <li role="presentation"><a href="#feature" aria-controls="feature" role="tab" data-toggle="tab">Featured Merchant</a></li> -->
            <!-- <li role="presentation"><a href="#kategori" aria-controls="kategori" role="tab" data-toggle="tab">Kategori</a></li> -->
            <!-- <li role="presentation"><a href="#flat-row" aria-controls="flat-row" role="tab" data-toggle="tab">Flat Rows</a></li> -->
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="produk_row">
                <div class="table-responsive">
                  <table class="table table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Show / Hide</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                                                                  <tr data-id="1">
                        <td>1</td>
                        <td>
                            zz
                        </td>
                        <td>
                          --
                        </td>
                        <td class="value_config">Show</td>
                        <td>
                           <a href="#"><button type="button" class="btn btn-xs btn-warning edit_status_value"><i class="fa fa-edit"></i>Hide</button></a>
                          
            
                        </td>  
                                                                  </tr>                  
                    </tbody>
                  </table>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">
              <div class="table-responsive">
                <table class="table table-hover table-striped tablesorter">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>pertanyaan</th>
                      <th>jawaban</th>
                      <th>Show / Hide</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tbody>
                                                                <tr data-id="1">
                      <td>1</td>
                      <td>
                          --
                      </td>
                      <td>
                        --
                      </td>
                      <td class="value_config">Show</td>
                      <td>
                         <a href="#"><button type="button" class="btn btn-xs btn-warning edit_status_value"><i class="fa fa-edit"></i>Hide</button></a>
                       

                      </td>  
                                                                </tr>                  
                  </tbody>
                </table>
              </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="footer">
            <div class="table-responsive">
              <table class="table table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>pertanyaan</th>
                    <th>jawaban</th>
                    <th>Show / Hide</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody>
                                                              <tr data-id="1">
                    <td>1</td>
                    <td>
                        ii
                    </td>
                    <td>
                      --
                    </td>
                    <td class="value_config">Show</td>
                    <td>
                       <a href="#"><button type="button" class="btn btn-xs btn-warning edit_status_value"><i class="fa fa-edit"></i>Hide</button></a>
                      
                
                    </td>
                                                              </tr>                    
                </tbody>
              </table>
            </div>
         </div>
        <div role="tabpanel" class="tab-pane" id="rekomendasi">
          <div class="table-responsive">
            <table class="table table-hover table-striped tablesorter">
              <thead>
                <tr>
                  <th>No</th>
                  <th>pertanyaan</th>
                  <th>jawaban</th>
                  <th>Show / Hide</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
                                                            <tr data-id="1">
                  <td>1</td>
                  <td>
                      pp
                  </td>
                  <td>
                    --
                  </td>
                  <td class="value_config">Show</td>
                  <td>
                     <a href="#"><button type="button" class="btn btn-xs btn-warning edit_status_value"><i class="fa fa-edit"></i>Hide</button></a>
                  
              
                  </td>
                                                            </tr>                    
              </tbody>
            </table>
          </div>
            </div>
          </div>
        </div>

      </div><!-- /#page-wrapper -->   
</div>
@endsection