@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="container">

<div class="space20"></div>

<div class="row main-left">
@include('layout.menu')
<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
  <div class="panel-heading" style="background-color:#337AB7; color:white;" >
        <h2 style="margin-top:0px; margin-bottom:0px;">
            Gửi báo cáo
        </h2>
    </div>
  <form action="student/report" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
     
        
      <div class="form-group">
        <label >tiêu đề</label>
        <input type="text" class="form-control" name="description" placeholder="mô tả" required>
      </div>
      
      <div class="form-row">
        <div class="custom-file form-group col-md-8">
    		  <input type="file" class="custom-file-input" name="file">
     		 <label class="custom-file-label" for="customFile">Choose file</label>
    	</div>
        
      </div>
      <button type="submit" class="btn btn-primary">submit</button>
</form>
 @if(count($errors)>0)
          <div class="alert alert-danger">
            @foreach($errors->all() as $err)
            {{$err}}
            @endforeach
          </div>
    @endif
        @if(Session::has('thanhcong'))
          <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
         @endif
        
</div>
</div>
<!-- /.row -->
</div>
<!-- end Page Content -->
@endsection