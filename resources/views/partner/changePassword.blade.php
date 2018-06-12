@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="container">

<div class="space20"></div>

<div class="row main-left">
@include('layout.menu1')
<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" class="form-group row">
	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
    		<h2 style="margin-top:0px; margin-bottom:0px;">
    				đổi mật khẩu tài khoản  			
    		</h2>
    </div>
    <br>
	<form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">password</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputPassword33" placeholder="password">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Re-Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="re-Password">
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