@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="container">

<div class="space20"></div>

<div class="row main-left">
@include('layout.menu')

<div class="col-md-6 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>Danh sách công ty đối tác của khoa</b></h4>
                    </div>
                    @foreach($intern_post as $post)
                        
                         <div class="row-item row">
                        <div class="col-md-3">

                            <a href="detail.html">
                                <br>
                                <img width="200px" height="200px" class="img-responsive" src="image/320x150.png" alt="">
                            </a>
                        </div>

                        <div class="col-md-9">
                            <h3>{{$post->bpartner->name}}</h3>
                            <p>{{$post->description}}</p>
                            <a class="btn btn-primary" href="student/view-post/{{$post->id}}}}">xem thêm <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="break"></div>
                        </div>
                        
                    @endforeach
                    
                    <!-- Pagination -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <ul class="pagination">
                                <li>
                                    <a href="#">&laquo;</a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
            
</div>

<div class="col-md-3">
	<div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>Đăng ký thực tập ở ngoài</b></h4>
    </div>
    <i>* Nếu bạn ĐANG đi thực tập tại 1 công ty, hãy tìm kiếm và lựa chọn công ty đó. Nếu không có hãy đăng kí ở form bên cạnh.<br/>

* Việc đăng ký các công ty không thuộc danh sách đối tác của Khoa cần chờ sự xét duyệt của Khoa và có thể sẽ không được chấp nhận.</i>
<form action="" method="POST" role="form">
	<legend>Nhập thông tin</legend>

	<div class="form-group">
		<label for="">Tên công ty</label>
		<input type="text" class="form-control" id="" placeholder="Input field">
	</div>
<div class="form-group">
		<label for="">Đại chỉ</label>
		<input type="text" class="form-control" id="" placeholder="Input field">
	</div>
<div class="form-group">
		<label for="">Email</label>
		<input type="text" class="form-control" id="" placeholder="Input field">
	</div>	
<div class="form-group">
		<label for="">Số điện thoại</label>
		<input type="text" class="form-control" id="" placeholder="Input field">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>		
<!-- /.row -->
</div>
<!-- end Page Content -->
@endsection