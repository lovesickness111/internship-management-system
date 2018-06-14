@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="container">

<div class="space20"></div>

<div class="row main-left">
@include('layout.menu')
        <!-- Page Content -->
<div class="col-md-9 ">
        
           
    <div class="row">
        
            <div class="panel-heading" style="background-color:#337AB7; color:white;">
            <h4><b>Đợt thực tập 2 năm 2018</b></h4>
        </div>
            <div>
                <ul class="list-group">
                    <li class="list-group-item">Giảng Viên: <b>{{$student->lecturer->fullname}}</b></li>
                    <li class="list-group-item">Loại thực tập:<b>{{$student->internship_type}}</b></li>
                    <li class="list-group-item">Nơi thực tập:<b></b></li>
                     <li class="list-group-item">Điểm: <b></b></li>
                </ul>
            </div>
            <h1 class="page-header">danh sách công ty bạn đã theo dõi
                <small>đợt 2 năm 2018</small>
            </h1>
        
        <!-- /.col-lg-12 -->
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>Id</th>
                    <th>Tên công ty</th>
                    <th>email</th>
                    <th>Read</th>
                    <th>unfollow</th>
                </tr>
            </thead>
            <tbody>
                @foreach($follow as $fl)
                <tr class="odd gradeX" align="center">
                    <td>{{$fl->id}}</td>
                    <td>{{$fl->partner_name}}</td>
                    <td>{{$fl->partner_email}}</td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="student/view-post/{{$fl->post_id}}">Edit</a></td>
                    <td class="center"><i class="fa fa-trash fa-fw"></i> <a href="student/unfollow/{{$fl->id}}">xóa</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
                <!-- /.row -->
            
            <!-- /.container-fluid -->
       
        <!-- /#page-wrapper -->
</div>
<!-- /.row -->
</div>
</div>
<!-- end Page Content -->
@endsection