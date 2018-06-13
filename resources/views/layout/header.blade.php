    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" pull-left>
                <a class="navbar-brand " href="student/recruitment">HUMAN RESOURCES MANAGEMENT</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav pull-right">
                    <?php $nguoidung = Auth::user(); ?>
                    @if(!isset($nguoidung))
                    <li>
                        <a href="student/login">Sinh viên</a>
                    </li>
                    <li>
                        <a href="lecturer/login">Giảng Viên</a>
                    </li>
                    <li>
                        <a href="partner/login">Đối tác</a>
                    </li>
                    <li>
                        <a href="admin/login">Administrator</a>
                    </li>
                </ul>
			    <ul class="nav navbar-nav pull-right">
                        <li>
                            <a href="student/signin">Đăng ký</a>
                        </li>
                        
                    @else 
                        <li>
                        	<a href="student/infor">
                        		<span class ="glyphicon glyphicon-user"></span>
                        		{{$nguoidung->name}}
                        	</a>
                        </li>
                        <li>
                        	<a href="student/logout">Đăng xuất</a>
                        </li>
                    @endif
                </ul>
            </div>


            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
