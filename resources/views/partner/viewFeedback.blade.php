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
                        <th>id</th>
                        <th>Tên sinh viên</th>
                        <th>tên công ty</th>
                        <th>file</th>

                        <th>Đánh giá</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX" align="center">
                        <td>1</td>
                        <td>cường</td>
                        <td>None</td>
                        <td>a</td>
                        <td>a</td>

                    <tr class="even gradeC" align="center">
                        <td>2</td>
                        <td>vũ</td>
                        <td>aas</td>
                        <td>aas</td>
                        
                        <td>Ẩn</td>
        
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
</div>
    



<!-- end Page Content -->
@endsection