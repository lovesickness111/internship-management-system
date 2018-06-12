@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="container">

<div class="space20"></div>

@include('layout.menu1')
<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên sinh viên</th>
                        <th>khóa thực tập</th>
                        <th>đánh giá</th>
                        <th>Điểm</th>

                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX" align="center">
                        <td>1</td>
                        <td>Tin Tức</td>
                        <td>None</td>
                        <td>a</td>
                        <td>a</td>

                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                    </tr>
                    <tr class="even gradeC" align="center">
                        <td>2</td>
                        <td>Bóng Đá</td>
                        <td>Thể Thao</td>
                        <td>Ẩn</td>
                        <td>a</td>
                        
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
</div>
    



<!-- end Page Content -->
@endsection