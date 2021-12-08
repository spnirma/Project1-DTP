<!-- Contact Form-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ContactFrom - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1>Contact Form</h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li class="active">Contact Form</li>
        </ol>
      </div>
    </div><!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="search" style="margin-bottom:5px">
    <form method="GET" class="form-inline" role="form">
      <div class="form-group">
        <input type="text" class="form-control tanggal" name="ds" placeholder="Date Start" value="">
      </div>
      <div class="form-group">
        <input type="text" class="form-control tanggal" name="de" placeholder="Date End" value="">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="n" placeholder="Name" value="">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="e" placeholder="Email" value="">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="p" placeholder="Chat" value="">
      </div>
      <div class="form-group">
        <button type="submit" name="c" id="cari" value="cari" class="btn btn-primary">Search</button>
                    <button type="submit" name="ex" id="export" value="export" class="btn btn-primary">Export</button>
                  </div>
    </form>
    </div>
  </div>
</div>
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Sent Date</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Chat</th>
                <th colspan="2">Status feedback</th>
                                    <th>action</th>
                                  </tr>
            </thead>
            <tbody>
                                <tr valign='top' id="row31">                    
                <td width='15%'>08-09-2015 10:39:26</td>
                <td width='15%'>Agung</td>
                <td width='15%'><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="047166716a6368616966617c447d656c6b6b2a676b69">[email&#160;protected]</a></td>
                <td width='15%'>Testing</td>
                <td width='50%'>Testing</td>
                <td width='15%'>-</td>
                <td width='15%'>
                <button class="btn btn-warning btn-xs" onclick="feedback_edit(31)"><a href="{{url('statusfeedback')}}" style="color: white"><i class="fa fa-edit"></i> Edit</a></button>
           
      </td>
                                    <td>                      
                  <div type="button" class="btn btn-default btn-xs" onclick="delete_contact_form(31)" style="color: #FFF;background-color: #D9534F;border-color: #D43F3A;"><i class="fa fa-trash-o"></i> Delete</div>
                </td>
                             
              </tr>
                                <tr valign='top' id="row30">                    
                <td width='15%'>08-09-2015 10:37:40</td>
                <td width='15%'>Agung</td>
                <td width='15%'><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f38691869d949f969e91968bb38a929b9c9cdd909c9e">[email&#160;protected]</a></td>
                <td width='15%'>Testing</td>
                <td width='50%'>Coba testing ya</td>
                <td width='15%'>-</td>
                <td width='15%'>
                <button class="btn btn-warning btn-xs" onclick="feedback_edit(30)"><a href="{{url('statusfeedback')}}" style="color: white"><i class="fa fa-edit"></i> Edit</a></button>
           
      </td>
                                    <td>                      
                  <div type="button" class="btn btn-default btn-xs" onclick="delete_contact_form(30)" style="color: #FFF;background-color: #D9534F;border-color: #D43F3A;"><i class="fa fa-trash-o"></i> Delete</div>
                </td>
                             
              </tr>
                                <tr valign='top' id="row29">                    
                <td width='15%'>08-09-2015 10:05:48</td>
                <td width='15%'>Agung</td>
                <td width='15%'><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f2a3d2a3138333a323d3a271f263e373030713c3032">[email&#160;protected]</a></td>
                <td width='15%'>Testing</td>
                <td width='50%'>Testing API V3</td>
                <td width='15%'>-</td>
                <td width='15%'>
                <button class="btn btn-warning btn-xs" onclick="feedback_edit(29)"><a href="{{url('statusfeedback')}}" style="color: white"><i class="fa fa-edit"></i> Edit</a></button>
           
      </td>
                                    <td>                      
                  <div type="button" class="btn btn-default btn-xs" onclick="delete_contact_form(22)" style="color: #FFF;background-color: #D9534F;border-color: #D43F3A;"><i class="fa fa-trash-o"></i> Delete</div>
                </td>
                             
              </tr>
                              </tbody>
          </table>
        </div>
        <ul class="pagination pull-right"><li><a class="round-icon" href="#" data-toggle="tooltip" data-title="Previous Page">&laquo;</a></li><li><a href="" style="text-decoration:underline">1</a></li><li><a href="?hal=2">2</a></li><li><a href="?hal=3">3</a></li><li><a class="round-icon" href="?hal=2" data-toggle="tooltip" data-title="Next Page">&raquo;</a></li></ul>          </div>
    </div><!-- /.row -->

  </div><!-- /#page-wrapper --> 
  </div>
@endsection