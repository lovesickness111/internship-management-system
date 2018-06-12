<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="đăngnhập sinh viên ">
    <meta name="author" content="">

    <title>sinh viên </title>
    <base href="{{asset('')}}" >
    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin_asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
@include('layout.header')
    <div class="container">
            <div class="col-md-5 col-lg-5">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-7">
                <div class=" panel panel-default" style="margin-top: 110px ">
                    <div class="panel-heading">
                        <h3 class="panel-title">thông báo</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <a href="https://drive.google.com/drive/folders/0B7AsBq-Fi9qXSGdHOURMRk1XVVk" target="_blank"><li class="list-group-item" >Mẫu báo cáo thực tập.</li></a>
                            <li class="list-group-item">Nếu có vấn đề, thắc mắc trong quá tình sử dụng hệ thống, liên hệ qua email: khoa.cntt.vnu@gmail.com. Lưu ý không dùng vnu để gửi mail</li>
                            <li class="list-group-item">Các bạn sinh viên K58 đăng kí tài khoản theo email vnu ví dụ vupk_58@vnu.edu.vn
email có số là của các bạn K59 trở về sau</li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
@include('layout.footer')
    <!-- jQuery -->
    <script src="admin_asset/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin_asset/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin_asset/dist/js/sb-admin-2.js"></script>

</body>

</html>
