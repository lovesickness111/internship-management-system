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
            Gửi tin nhắn
        </h2>
    </div>
  <form action="student/write-message" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="form-group">
          <label >To</label>
          <input type="email" class="form-control" name="email_receiver" placeholder="Email" required>
        </div>
        
      <div class="form-group">
        <label >tiêu đề</label>
        <input type="text" class="form-control" name="description" placeholder="mô tả" required>
      </div>
      <div class="form-group">
        <label>your message</label>
        <textarea class="form-control" name="text_content" placeholder="nhập tin nhắn" required></textarea>
      </div>
      <div class="form-row">
        
        <div class="custom-file form-group col-md-8">
    		  <input type="file" class="custom-file-input" name="file">
     		 <label class="custom-file-label" for="customFile">Choose file</label>
    	</div>
        <div class="form-group col-md-4">
          <label for="inputState">loại file</label>
          <select id="inputState" class="form-control">
            <option selected>tin nhắn bình thường</option>
            <option>báo cáo thực tập</option>
          </select>
          <a href="student/report"><button  class="btn btn-success">báo cáo thực tập cuối kì</button></a>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
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