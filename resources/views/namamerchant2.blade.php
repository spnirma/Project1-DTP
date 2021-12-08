<!--Homepage management/product rows/edit title-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>profilemerchant - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div class="modal-dialog" style="width: 800px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Machili</h4>
      </div>
      <div class="modal-body">
        <div class="form-horizontal">
        <div class="form-group">
          <label for="user" class="col-lg-4">Nama Merchant</label>
          <div class="col-lg-4">
          Machili                                    </div>
      </div>
      
      <div class="form-group">
          <label for="user" class="col-lg-4">Propinsi</label>
          <div class="col-lg-4">
          dki jakarta                                    </div>
      </div>
      
      <div class="form-group">
          <label for="user" class="col-lg-4">Tgl Lahir</label>
          <div class="col-lg-4">
              01-01-1970                                    </div>
      </div>
       <div class="form-group">
          <label for="user" class="col-lg-4">Telp</label>
          <div class="col-lg-4">
                                                  </div>
      </div>
      <div class="form-group">
          <label for="user" class="col-lg-4">Hp</label>
          <div class="col-lg-4">
              081282892424                                    </div>
      </div>
      <div class="form-group">
          <label for="user" class="col-lg-4">Email</label>
          <div class="col-lg-4"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2e5b4345431e1e1f4f6e49434f4742004d4143">[email&#160;protected]</a></div>
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
        <button type="button" class="btn btn-default" data-dismiss="modal"><a href="{{url('PUBG')}}">Close</a></button>
                                          <a href="#" type="button" class="btn btn-primary">Edit</a>
                                        </div>
    </div>
  </div>
</div>
</div><!-- /.row -->
@endsection