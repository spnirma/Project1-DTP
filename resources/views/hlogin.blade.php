<!--Login Log/History Login-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>LoginHistory - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div class="row">
    <div class="col-lg-12">
        <h1>Login History</h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Dashboard</a></li>
            <li class="active">Login History</li>
        </ol> 
                
    
    </div>
</div><!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form method="GET" action="" class="form-inline" role="form">
            <div class="form-group">
          <input value="" name="date_start" type="text" class="form-control" placeholder="Start Date" id="date_start">
        </div>
        <div class="form-group">
          <input value="" name="date_end" type="text" class="form-control" placeholder="End Date" id="date_end">
        </div>
        <div class="form-group">
          <input value="" name="email" type="text" class="form-control" placeholder="Email / Username">
        </div>
        <div class="form-group">
          <input value="" name="ip_address" type="text" class="form-control" placeholder="IP Address">
        </div>
        <div class="form-group">
          <input value="" name="user_agent" type="text" class="form-control" placeholder="User Agent">
        </div>
        <div class="form-group">
            <select name="login_from" class="form-control" onchange="$('#cari_btn').click();">
                <option value=""> -- Choose Login From--</option>
                <option value="cms admin" >CMS Admin</option>
                <option value="member" >Member</option>
                <option value="mobile" >Mobile</option>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" name="cari" value="1" id="cari_btn">Search</button>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" name="csv" value="1" id="cari_btn">Export CSV</button>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" name="export_count_login" value="1" id="cari_btn">Export Count Login</button>
        </div>
        </form>
        <br><br>
        <div class="table-responsive">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>Date</th>
                <th>Email / Username</th>
                <th>Ip Address</th>
                <th>User Agent</th>
                <th>Login From</th>
              </tr>
            </thead>
            <tbody>     
                                   
                <tr>
                    <td>2021-10-11 22:30:17</td>
                    <td>superadmin</td>
                    <td>162.158.166.17</td>
                    <td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Safari/537.36</td>
                    <td>cms admin</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-11 16:11:38</td>
                    <td>superadmin</td>
                    <td>172.70.188.218</td>
                    <td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36</td>
                    <td>cms admin</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-11 15:45:38</td>
                    <td>superadmin</td>
                    <td>172.68.144.43</td>
                    <td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36</td>
                    <td>cms admin</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-11 11:15:26</td>
                    <td>0</td>
                    <td>162.158.165.230</td>
                    <td>Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Mobile Safari/537.36</td>
                    <td>member</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-11 07:16:21</td>
                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="95fbf4e7fce3fabbf3e7f4fbe6fce6f6f4a6a3d5f2f8f4fcf9bbf6faf8">[email&#160;protected]</a></td>
                    <td>172.70.188.70</td>
                    <td>Mozilla/5.0 (Linux; Android 9; CPH2015) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Mobile Safari/537.36</td>
                    <td>member</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-10 10:33:12</td>
                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c0aea1b2a9b6afeea6b2a1aeb3a9b3a3a1f3f680a7ada1a9aceea3afad">[email&#160;protected]</a></td>
                    <td>172.68.144.121</td>
                    <td>Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Safari/537.36</td>
                    <td>member</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-10 10:13:59</td>
                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="127f7b616677607f6b22232752757f737b7e3c717d7f">[email&#160;protected]</a></td>
                    <td>172.70.142.60</td>
                    <td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36</td>
                    <td>member</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-09 22:12:24</td>
                    <td>0</td>
                    <td>172.70.142.192</td>
                    <td>Mozilla/5.0 (Linux; Android 10; RMX2020) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.181 Mobile Safari/537.36</td>
                    <td>member</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-09 20:53:00</td>
                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6f1c0e18410e060b0e0b150e04060e56562f08020e0603410c0002">[email&#160;protected]</a></td>
                    <td>172.70.188.158</td>
                    <td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36</td>
                    <td>member</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-09 17:56:32</td>
                    <td>superadmin</td>
                    <td>172.68.144.45</td>
                    <td>Mozilla/5.0 (Linux; Android 8.1.0; SM-J260G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.120 Mobile Safari/537.36</td>
                    <td>cms admin</td>
                </tr>
                                    </tbody>
          </table>
        </div>
        <ul class="pagination pull-right"><li><a class="round-icon" href="#" data-toggle="tooltip" data-title="Previous Page">&laquo;</a></li><li><a href="" style="text-decoration:underline">1</a></li><li><a href="?hal=2">2</a></li><li><a href="?hal=3">3</a></li><li><a>...</a></li><li><a href="?hal=1085">1085</a></li><li><a class="round-icon" href="?hal=2" data-toggle="tooltip" data-title="Next Page">&raquo;</a></li></ul>            </div>
</div><!-- /.row -->
</div>
@endsection