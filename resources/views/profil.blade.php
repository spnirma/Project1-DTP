<!--head/profil-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>profile - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <h1>Profile Admin</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Dashboard</a></li>
        <li class="active">Profile</li>
      </ol>
      
     </div>
</div><!-- /.row -->

    <div class="row">
        <div class="col-lg-12"> 
         <!-- <form class="form-horizontal" method="post" action="" enctype="multipart/form-data"> -->
          <form method="GET" action="" class="form-horizontal" role="form" enctype="text/plain">
            <div class="form-group">
              <label for="" class="col-lg-2 control-label"><a href="#" id="change_pp">Change Picture</a></label>
              <div class="col-lg-6" id="img_pp">
                <img id="previewHolder" src="#">
              </div>
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
            </div>
            <div class="form-group">
              <label for="" class="col-lg-2 control-label">Username</label>
              <div class="col-lg-4">
                <input value="superadmin" name="username" type="text" class="form-control" id="username" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-lg-2 control-label">First Name</label>
              <div class="col-lg-4">
                <input value="x" name="firstname" type="text" class="form-control" id="firstname" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-lg-2 control-label">Last Name</label>
              <div class="col-lg-4">
                <input value="coba" name="lastname" type="text" class="form-control" id="lastname" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-lg-2 control-label">Bio</label>
              <div class="col-lg-4">
                <textarea name="bio" class="form-control" id="bio" placeholder="" rows=5>coba</textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-lg-2 control-label">Address</label>
              <div class="col-lg-4">
                <textarea name="alamat" class="form-control" id="alamat" placeholder="">atas langit</textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-lg-2 control-label">Phone</label>
              <div class="col-lg-4">
                <input value="0987654321"name="telpon" type="number" class="form-control" id="telpon" placeholder="">
              </div>
            </div>

            <div class="clearfix"></div>
            <br><br>
            <div style="text-align:center;">
              <button class="btn btn-primary save-product" type="submit" name="simpan" value=1 action="update {{url('profil')}} ">Save
              </button>

            </div>                      
            
            </div>
          </form>

        </div>
      </div><!-- /.row -->

</div><!-- /#page-wrapper -->   
@endsection