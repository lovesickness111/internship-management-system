@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="container">

<div class="space20"></div>

<div class="row main-left">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" class="form-group row">
	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
    		<h2 style="margin-top:0px; margin-bottom:0px;">
    				đổi mật khẩu tài khoản  			
    		</h2>
    </div>
    <br>
	<form action="change-password" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control"  placeholder="password">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Re-Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control"  placeholder="re-Password">
    </div>
  
  	<br>
    <div class="col-sm-7 pull-right">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  
</form>
</div>

<!-- /.row -->
</div>
<!-- end Page Content -->
@endsection