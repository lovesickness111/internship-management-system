@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="container">

<div class="space20"></div>

<div class="row main-left">
@include('layout.menu')
<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
  <div class="panel-heading col-sm-9 row form-group" style="background-color:#337AB7; color:white;" >
        <h2 style="margin-top:0px; margin-bottom:0px;">
            tiêu đề    
        </h2>
     </div>
     <div class="col-sm-3 pull-right"><button type="submit" class="btn btn-primary">follow</button>
     	     <hr/>
</div>

<!-- /.row -->
</div>
<!-- end Page Content -->
@endsection