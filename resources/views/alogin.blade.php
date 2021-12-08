<!--Login Log/Login Attempt-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>LoginAttempt - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div class="row">
    <div class="col-lg-12">
        <h1>Login Attempt</h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Dashboard</a></li>
            <li class="active">Login Attempt</li>
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
                    <td>2021-10-02 13:35:52</td>
                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f8aa999c91949d889981889994b89f95999194d69b9795">[email&#160;protected]</a></td>
                    <td>172.70.142.248</td>
                    <td>Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36</td>
                    <td>member</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-02 13:35:52</td>
                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="376556535e5b5247564e47565b77505a565e5b1954585a">[email&#160;protected]</a></td>
                    <td>172.70.142.248</td>
                    <td>Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36</td>
                    <td>member</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-02 13:35:51</td>
                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c89aa9aca1a4adb8a9b1b8a9a488afa5a9a1a4e6aba7a5">[email&#160;protected]</a></td>
                    <td>172.70.142.248</td>
                    <td>Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36</td>
                    <td>member</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-02 13:35:42</td>
                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6b390a0f02070e1b0a121b0a072b0c060a020745080406">[email&#160;protected]</a></td>
                    <td>172.70.142.248</td>
                    <td>Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36</td>
                    <td>member</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-02 13:35:40</td>
                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a0f2c1c4c9ccc5d0c1d9d0c1cce0c7cdc1c9cc8ec3cfcd">[email&#160;protected]</a></td>
                    <td>172.70.142.248</td>
                    <td>Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36</td>
                    <td>member</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-02 13:35:02</td>
                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a2f1cfc9c9dbd2cf90e2c5cfc3cbce8cc1cdcf">[email&#160;protected]</a></td>
                    <td>162.158.166.157</td>
                    <td>Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36</td>
                    <td>member</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-02 13:34:59</td>
                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2b78464040525b46196b4c464a424705484446">[email&#160;protected]</a></td>
                    <td>162.158.166.157</td>
                    <td>Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36</td>
                    <td>member</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-02 13:34:58</td>
                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eebd838585979e83dcae89838f8782c08d8183">[email&#160;protected]</a></td>
                    <td>162.158.166.157</td>
                    <td>Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36</td>
                    <td>member</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-02 13:34:44</td>
                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0e5d636565777e633c4e69636f6762206d6163">[email&#160;protected]</a></td>
                    <td>162.158.166.157</td>
                    <td>Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36</td>
                    <td>member</td>
                </tr>
                                   
                <tr>
                    <td>2021-10-02 13:34:30</td>
                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="184b7573736168752a587f75797174367b7775">[email&#160;protected]</a></td>
                    <td>162.158.166.157</td>
                    <td>Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36</td>
                    <td>member</td>
                </tr>
                                    </tbody>
          </table>
        </div>
        <ul class="pagination pull-right"><li><a class="round-icon" href="#" data-toggle="tooltip" data-title="Previous Page">&laquo;</a></li><li><a href="" style="text-decoration:underline">1</a></li><li><a href="?hal=2">2</a></li><li><a href="?hal=3">3</a></li><li><a>...</a></li><li><a href="?hal=387">387</a></li><li><a class="round-icon" href="?hal=2" data-toggle="tooltip" data-title="Next Page">&raquo;</a></li></ul>            </div>
</div><!-- /.row -->
@endsection