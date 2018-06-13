@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="row">
	<div id="content">	
		<form action="student/signin" method="post" class="form-control">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="row">
				<div class="col-sm-3">@if(count($errors)>0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $err)
						{{$err}}
						@endforeach
					</div>
				@endif
				@if(Session::has('thanhcong'))
					<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
				@endif</div>
				
				<div class="col-sm-6">
					<h4>Đăng kí</h4>
					<div class="space20">&nbsp;</div>
				
					<div class="form-group">
						<label for="your_last_name">Fullname*</label>
						<input type="text" name="name" required>
					</div>
					
					<div class="form-group">
							<label for="email">Email vnu*</label>
							<input type="email" name="email" required>
					</div>
					<div class="form-group">
						<label for="phone">Password*</label>
						<input type="password" name="password" required>
					</div>
					<div class="form-group">
						<label >level* &nbsp;&nbsp;&nbsp; </label>
						<input type="text" name="level" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Register</button>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</form>
	</div> <!-- #content -->
	</div> <!-- .container -->
<!-- /.row -->
@endsection