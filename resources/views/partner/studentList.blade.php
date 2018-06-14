@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="container">

<div class="space20"></div>

@include('layout.menu2')
<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">danh sách sinh viên
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(count($errors)>0)
          <div class="alert alert-danger">
            @foreach($errors->all() as $err)
            {{$err}}
            @endforeach
          </div>
            @endif
        @if(Session::has('thanhcong'))
          <div class="alert alert-success">{{Session::get('thanhcong')}}</div'>
         @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>code</th>
                        <th>Tên sinh viên</th>
                        <th>khóa thực tập</th>
                        <th>đánh giá</th>
                        <th>xem</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($student as $std)
                    <tr class="odd gradeX" align="center">
                        <td>{{$std->msv}}</td>
                        <td>{{$std->fullname}}</td>
                        <td>{{$std->term}}</td>
                        <td></td>

                        <td class="center"><i class="fa fa-user  fa-fw"></i><a href="#"> xem</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
</div>


<!-- end Page Content -->
@endsection