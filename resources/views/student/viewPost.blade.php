@extends('layout.index')

@section('content')
<!-- Page Content -->


<div class="space20"></div>


@include('layout.menu')
<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
  <div class="panel-heading col-sm-9 row form-group" style="background-color:#337AB7; color:white;" >
        <h2 style="margin-top:0px; margin-bottom:0px;">
            {{$intern_post->description}} 
        </h2>
     </div>
     
   		<div class="col-sm-3 pull-right"><a href="student/follow/{{$intern_post->id}}"><button class="btn btn-success">follow</button></a>
     	     <hr/>
		  </div>
<div class="container-fluid">
	{{$intern_post->content}}
</div>
<!-- /.row -->
<a href="{{$intern_post->link}}">Bấm vào đây để truy cập trang chủ công ty</a>
</div>
</div>
<!-- end Page Content -->
@endsection