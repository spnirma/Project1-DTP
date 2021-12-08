<!--Homepage management/product rows/edit title-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>FooterHomepage - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <h1>Homepage Management</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Dashboard</a></li>
        <li class="active">Homepage Management</li>
      </ol>
                  </div>
  </div><!-- /.row -->

  <div class="row">
    <div class="col-lg-12">
    <div>
      <form method="post" action="" class="form-horizontal" role="form" enctype="multipart/form-data">
        <div class="col-lg-12">
          <div class="form-group">
          <div class="col-lg-4">
            <input name="name" type="text" class="form-control" id="title" placeholder="Title">
          </div>
        </div>
                      <div class="form-group" id="type">
            <div class="col-lg-4">
                <select  class="form-control" name="type">
                  <option value="link">link</option>
                  <option value="page">page</option>
                </select>
            </div>
        </div>
        <div class="form-group" id="page" style="display:none">
            <div class="col-lg-4">
                <select  class="form-control" name="page_link">                        
                  <option value="">-- Select --</option>
                                        </select>
            </div>
        </div>
        <div class="form-group" id="link">
          <div class="col-lg-4">
            <input name="link" type="text" class="form-control" id="title" placeholder="Url">
          </div>
        </div>
                      <div class="form-group">
          <div class="col-lg-4">
              <button class="btn btn-primary" type="submit" name="save" value="1">Save</button>
            </div>
        </div>
        </div>
      </form>
      <br>
        <table class="table table-hover table-striped tablesorter">
          <thead>
            <tr>
              <th>Title</th>
                                  <th>Urutan</th>
              <th>Url</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
                                                <tr>
              <td>About Us</td>
                                  <td>1</td>
              <td>https://</td>
              <td>
                                                            <a href="#" type="button" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Down</a>
                                      <a href="#" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</a>
              </td>    
            </tr>
 
                            </tbody>
        </table>
    </div>

  </div>
    </div>
  </div><!-- /.row -->
</div><!-- /.row -->
@endsection