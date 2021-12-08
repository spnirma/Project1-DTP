<!--merchant/merchant verivied-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Seller'stVerified - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div id="page-wrapper">

    <div class="row">
      <div class="col-lg-12">
        <h1>Seller's Verified</h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li class="active">Seller's Verified</li>
        </ol>
        
                  </div>
    </div><!-- /.row -->
            <div class="row">
      
              <div class="col-lg-12">
                <div class="search">
                <form method="GET" action="" class="form-inline" role="form">
    
                  <div class="form-group">
                    <input value="" name="s" type="text" class="form-control" id="" placeholder="Seller's">
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
              <!-- <input type="checkbox" name="indoloka" value="Y" onchange="this.form.submit()" > Merchant Indoloka -->
            </form>
          </div>
            <br>
                            <a href="#" type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Plus</a>
            <br><br>
                            <div class="table-responsive">
                <table class="table table-hover table-striped tablesorter ">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Verified Date</th>
                            <th>Last Update Date</th>
                            <th>Seller's Name</th>             
                            <th>Profil</th>                    
                            <th>Number of Moderasi Product</th>                                
                            <th>Number of verified Products</th>                                
                            <th>Number of Unverified Products</th>                                
            
                            <th>History</th>
                               <th>Edit Status</th>
                                                        </tr>
                    </thead>
                    <tbody>
                                                    
                        <tr class="success">
                            <td>1</td>
                            <td>
                                23-09-2021 15:05:53                                </td>
                            <td>
                                23-09-2021 15:09:13                                </td>
                            <td>Blibli </td>
    
                            <td>
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal1">View</button>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title" id="myModalLabel">Blibli </h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form-horizontal">
                                      <div class="form-group">
                                        <label for="user" class="col-lg-4">Nama Merchant</label>
                                        <div class="col-lg-4">
                                        Blibli                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user" class="col-lg-4">Email</label>
                                        <div class="col-lg-4"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3f4a5254520f060b5d7f58525e5653115c5052">[email&#160;protected]</a></div>
                                    </div>
                
                                                                            <div class="form-group">
                                        <label for="user" class="col-lg-4">Nama Pemilik</label>
                                        <div class="col-lg-4">
                                                                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user" class="col-lg-4">Propinsi</label>
                                        <div class="col-lg-4">
                                        jawa timur                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user" class="col-lg-4">Kota</label>
                                        <div class="col-lg-4">
                                        SURABAYA                                            </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="user" class="col-lg-4">Kota JNE Origin</label>
                                      <div class="col-lg-4">
                                          Ambon                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user" class="col-lg-4">Kecamatan</label>
                                        <div class="col-lg-4">
                                                                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user" class="col-lg-4">Tgl Lahir</label>
                                        <div class="col-lg-4">
                                            01-01-1970                                            </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="user" class="col-lg-4">Telp</label>
                                        <div class="col-lg-4">
                                                                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user" class="col-lg-4">Hp</label>
                                        <div class="col-lg-4">
                                                                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user" class="col-lg-4">Pic Email</label>
                                        <div class="col-lg-4"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0d786066603d34396f4d6a606c6461236e6260">[email&#160;protected]</a></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user" class="col-lg-4">Sales</label>
                                        <div class="col-lg-4">
                                                                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user" class="col-lg-4">Nama Bank</label>
                                        <div class="col-lg-4">
                                            
                                        </div>
                                      </div>
                                     <div class="form-group">
                                        <label for="user" class="col-lg-4">Nomer Rekening</label>
                                        <div class="col-lg-4">
                                                                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="user" class="col-lg-4">Pemilik Rekening</label>
                                        <div class="col-lg-4">
                                                                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                <a href="https://admin.fesyarjawa.com/admin/user/edit_merchant/861" type="button" class="btn btn-primary">Edit</a>
                                                                              </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
           
                            <td>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#ModalLog1">View</button>
                            <div class="modal fade" id="ModalLog1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title" id="myModalLabel">Log Status</h4>
                                    </div>
                                    <div class="modal-body">
                                      <table class="table">
                                        <thead>
                                          <tr>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Admin</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                                                                      </tbody>
                                      </table>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                                  
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </td>
  
                                                        <td>  
                                <button class="btn btn-primary btn-warning btn-xs" data-toggle="modal" data-target="#ModalUnveri1"><i class="fa fa-edit"></i>  Unverify</button>
                                  <div class="modal fade" id="ModalUnveri1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                                        </div>
                                          <form class="form-horizontal" action="https://admin.fesyarjawa.com/admin/merchant/act_unverified/merchant_verified/1/861" method="post">
                                        <div class="modal-body">
                                        <div class="form-group">
                                          <label for="user" class="col-lg-4 control-label">Reason For Refusal</label>
                                          <div class="col-lg-4">
                                              <textarea name="alasan" class="form-control" id="alamat" placeholder="Alasan Penolakan"></textarea>
                                          </div>
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <input type="submit" class="btn btn-primary" value="Unverify">
                                        </div>
                                          </form>
                                      </div>
                                    </div>
                                  </div>  
                            </td>
                                                        </tr>
                                                    
 
                        </td>
 
                                                        </tr>
                                                </tbody>
                </table>
            </div>
        <ul class="pagination pull-right"><li><a class="round-icon" href="#" data-toggle="tooltip" data-title="Previous Page">&laquo;</a></li><li><a href="" style="text-decoration:underline">1</a></li><li><a href="?hal=2">2</a></li><li><a href="?hal=3">3</a></li><li><a>...</a></li><li><a href="?hal=14">14</a></li><li><a class="round-icon" href="?hal=2" data-toggle="tooltip" data-title="Next Page">&raquo;</a></li></ul>            </div>
      
    </div><!-- /.row -->
    
  </div><!-- /#page-wrapper -->
</div>
@endsection