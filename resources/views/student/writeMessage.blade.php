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
    <form>
  <div class="form-row">
      <label for="inputEmail4">To</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    

  <div class="form-group">
    <label >tiêu đề</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="báo cáo thực tập">
  </div>
  <div class="form-group">
    <label>your message</label>
    <textarea class="form-control" name="" placeholder="nhập tin nhắn"></textarea>
  </div>
  <div class="form-row">
    
    <div class="custom-file form-group col-md-8">
		  <input type="file" class="custom-file-input" id="customFile">
 		 <label class="custom-file-label" for="customFile">Choose file</label>
	</div>
    <div class="form-group col-md-4">
      <label for="inputState">loại file</label>
      <select id="inputState" class="form-control">
        <option selected>tin nhắn bình thường</option>
        <option>báo cáo thực tập</option>
      </select>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Send</button>
</form>
</div>

<!-- /.row -->
</div>
<!-- end Page Content -->
@endsection