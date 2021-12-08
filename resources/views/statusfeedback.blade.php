<!--Homepage management/product rows/edit title-->
@extends('partisi.body')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>EditTitle - Admin</title>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/324/120/png-transparent-shopping-cart-computer-icons-shopping-cart.png">
</head>
@section('index')
<div class="content">
  <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" onclick="$('#feedback_edit_form').hide()">×</button>
			<h4 class="modal-title" id="myModalLabel">Status Feedback Edit</h4>
		</div>
	<div class="modal-body">
		<div class="form-horizontal">
			
			<input type="hidden" name="id" id="id">
			<div class="form-group">
				<label for="status" class="col-lg-4">Status</label>
				<div class="col-lg-4">
					<select class="form-control" name="status" id="status">
						<option value="open">Open</option>
						<option value="replied">Replied</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="pic" class="col-lg-4">PIC</label>
				<div class="col-lg-4">
					<input type="text" name="pic" class="form-control" id="pic">
				</div>
			</div>
			<div class="form-group">
				<label for="date_start" class="col-lg-4">Tanggal</label>
				<div class="col-lg-4">
					<input type="text" class="form-control" id="date_start" name="tanggal">
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
				<button class="btn btn-primary" id="simpan_edit">Simpan</button>
				</div>
			</div>
			
	<div class="modal-footer">
	</div>
	</div>
</div>
</div>
</div>
</div>
</div><!-- /.row -->
@endsection