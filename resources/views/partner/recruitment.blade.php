@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="container">

<div class="space20"></div>

<div class="row main-left">
@include('layout.menu2')



<div class="col-md-9">
	<div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>Thêm bài đăng tuyển dụng thực tập sinh</b></h4>
    </div>
   
<form action="partner/recruitment" method="POST" role="form">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
	<legend>Nhập thông tin</legend>

	<div class="form-group">
		<label for="">Tiêu đề</label>
		<input type="text" class="form-control" name="description" placeholder="Tiêu đề" required>
	</div>
<div class="form-group">
		<label >link</label>
		<input type="text" class="form-control" name="link" placeholder="đường dẫn đến trang chủ công ty" required>
	</div>
<div class="form-group">
		<label for="">Nội dung</label>
		<textarea class="form-control" name="content" placeholder="thông tin chi tiết" required></textarea>
	</div>	
	<button type="submit" class="btn btn-success">Submit</button>
</form>

        @if(Session::has('thanhcong'))
          <div class="alert alert-success">{{Session::get('thanhcong')}}</div'>
         @endif
</div>		
<!-- /.row -->
</div>
</div>
<!-- end Page Content -->
@endsection