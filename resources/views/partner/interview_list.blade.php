@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="container">

<div class="space20"></div>

<div class="row main-left">
@include('layout.menu')
        <!-- Page Content -->
<div class="col-md-9 ">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>Đợt thực tập 2 năm 2018</b></h4>
                    </div>
                        <div>
                            <ul class="list-group">
                                <li class="list-group-item">Giảng Viên</li>
                                <li class="list-group-item">Loại thực tập</li>
                                <li class="list-group-item">Nơi thực tập</li>
                                 <li class="list-group-item">Điểm</li>
                            </ul>
                        </div>
                        <h1 class="page-header">danh sách công ty bạn đã theo dõi
                            <small>đợt 2 năm 2018</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Read</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX" align="center">
                                <td>1</td>
                                <td>None</td>
                                <td>đang chờ</td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>2</td>
                                <td>abc</td>
                                <td>đang chờ</td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
</div>
<!-- /.row -->
</div>
<!-- end Page Content -->
@endsection