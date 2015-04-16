<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
    <link rel="stylesheet" href="{{url('backend/assets/css/font-awesome.min.css')}}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"  type="text/javascript"></script>
    <link rel="stylesheet" href="{{url('backend/assets/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css')}}">
    <link rel="stylesheet" href="{{url('backend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('backend/assets/css/bootstrap-fileupload.css')}}">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

    <!-- Plugin CSS -->

    <link rel="stylesheet" href="{{url('backend/assets/js/plugins/icheck/skins/minimal/blue.css')}}">
    <link rel="stylesheet" href="{{url('backend/assets/js/plugins/select2/select2.css')}}">
    <link rel="stylesheet" href="{{url('backend/assets/js/plugins/fullcalendar/fullcalendar.css')}}">


    <!-- App CSS -->
    <link rel="stylesheet" href="{{url('backend/assets/css/target-admin.css')}}">


</head>
<body>

@include('flash::message')
<div class="navbar">

    <div class="container">


        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-cogs"></i>
            </button>
<div style="margin-top:15px;"><h3>ÖNER CMS</h3></div>

        </div> <!-- /.navbar-header -->

@include('backend.layout.navbar')

    </div> <!-- /.container -->

</div> <!-- /.navbar -->



<div class="mainbar">

    <div class="container">

        <button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
            <i class="fa fa-bars"></i>
        </button>

        <div class="mainbar-collapse collapse">

            <ul class="nav navbar-nav mainbar-nav">

                <li class="active">
                    <a href="{{route('admin.dashboard')}}">
                        <i class="fa fa-dashboard"></i>
                        Dashboard
                    </a>
                </li>

                <li class="dropdown ">
                    <a href="#about" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                        <i class="fa fa-pencil"></i>
                                Blog
                        <span class="caret"></span>
                    </a>


                    <ul class="dropdown-menu">
                        <li><a href="{{route('admin.blog.create')}}"><i class="fa fa-user nav-icon"></i> Add Blog</a></li>
                        <li><a href="{{route('admin.blog.index')}}"><i class="fa fa-bars nav-icon"></i>All Blogs</a></li>
                        <li><a href="{{route('admin.category.create')}}"><i class="fa fa-asterisk nav-icon"></i>Add Category</a></li>
                        <li><a href="{{route('admin.category.index')}}"><i class="fa fa-asterisk nav-icon"></i>All Categories</a></li>


                    </ul>
                </li>

                <li class="dropdown ">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                        <i class="fa fa-align-left"></i>Page<span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{route('admin.page.create')}}">
                                <i class="fa fa-location-arrow nav-icon"></i>
                                Add Page</a></li>

                        <li>
                            <a href="{{route('admin.page.index')}}">
                                <i class="fa fa-location-arrow nav-icon"></i>
                                All Pages</a></li>

                    </ul>
                </li>

                <li class="dropdown ">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                        <i class="fa fa-files-o"></i>
                        Menus
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="{{route('admin.menu.index')}}"><i class="fa fa-user nav-icon"></i>Menus</a></li>
                    </ul>
                </li>

            <li class="dropdown ">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                    <i class="fa fa-cloud-upload"></i>Gallery<span class="caret"></span></a>

                <ul class="dropdown-menu">
                    <li>
                        <a href="{{route('admin.gallery.create')}}">
                            <i class="fa fa-location-arrow nav-icon"></i>
                            Add Gallery</a></li>

                    <li>
                        <a href="{{route('admin.gallery.index')}}">
                            <i class="fa fa-picture-o"></i>
                            Galleries</a></li>

                </ul>
            </li>

            <li class="dropdown ">
                    <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                        <i class="fa fa-user"></i>
                        Users
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{route('admin.user.create')}}">
                                <i class="fa fa-user"></i>
                                  Add User
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.user.index')}}">
                                <i class="fa fa-edit"></i>
                               All Users
                            </a>
                        </li>

                    </ul>
                           <li class="dropdown ">
                    <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                        <i class="fa fa-comment"></i>
                        Comments
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="#">
                                <i class="fa fa-comment"></i>
                                All Comments
                            </a>
                        </li>
                        </ul>
                </li>
                <li class="dropdown ">
                    <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                        <i class="fa fa-cog"></i>
                        Settings
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="#">
                                <i class="fa fa-comment"></i>
                              Main Page Settings
                            </a>
                        </li>
                        </ul>
                </li>

                <li class="dropdown ">
                    <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                        <i class="fa fa-picture-o"></i>
                      Add  Slider
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="#">
                                <i class="fa fa-pencil"></i>
                                Sliders
                            </a>
                        </li>
                    </ul>
                </li>

        </div> <!-- /.navbar-collapse -->

    </div> <!-- /.container -->

</div> <!-- /.mainbar -->


<div class="container">

    <div class="content">

        <div class="content-container">

@yield('content')

        </div> <!-- /.content-container -->

    </div> <!-- /.content -->

</div> <!-- /.container -->


<footer class="footer">

    <div class="container">

        <div class="row">

            <div class="col-sm-3">

                <h4>About Theme</h4>

                <br>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                <hr>

                <p>&copy; 2014 Jumpstart Themes.</p>

            </div> <!-- /.col -->

            <div class="col-sm-3">

                <h4>Support</h4>

                <br>

                <ul class="icons-list">
                    <li>
                        <i class="fa fa-angle-double-right icon-li"></i>
                        <a href="javascript:;">Frequently Asked Questions</a>
                    </li>
                    <li>
                        <i class="fa fa-angle-double-right icon-li"></i>
                        <a href="javascript:;">Ask a Question</a>
                    </li>
                    <li>
                        <i class="fa fa-angle-double-right icon-li"></i>
                        <a href="javascript:;">Video Tutorial</a>
                    <li>
                        <i class="fa fa-angle-double-right icon-li"></i>
                        <a href="javascript:;">Feedback</a>
                    </li>
                </ul>

            </div> <!-- /.col -->

            <div class="col-sm-3">

                <h4>Legal</h4>

                <br>

                <ul class="icons-list">
                    <li>
                        <i class="fa fa-angle-double-right icon-li"></i>
                        <a href="javascript:;">License</a>
                    </li>
                    <li>
                        <i class="fa fa-angle-double-right icon-li"></i>
                        <a href="javascript:;">Terms of Use</a>
                    </li>
                    <li>
                        <i class="fa fa-angle-double-right icon-li"></i>
                        <a href="javascript:;">Privacy Policy</a>
                    </li>
                    <li>
                        <i class="fa fa-angle-double-right icon-li"></i>
                        <a href="javascript:;">Security</a>
                    </li>
                </ul>

            </div> <!-- /.col -->

            <div class="col-sm-3">

                <h4>Settings</h4>

                <br>

                <ul class="icons-list">
                    <li>
                        <i class="fa fa-angle-double-right icon-li"></i>
                        <a href="javascript:;">Consectetur adipisicing</a>
                    </li>
                    <li>
                        <i class="fa fa-angle-double-right icon-li"></i>
                        <a href="javascript:;">Eiusmod tempor </a>
                    </li>
                    <li>
                        <i class="fa fa-angle-double-right icon-li"></i>
                        <a href="javascript:;">Fugiat nulla pariatur</a>
                    </li>
                    <li>
                        <i class="fa fa-angle-double-right icon-li"></i>
                        <a href="javascript:;">Officia deserunt</a>
                    </li>
                </ul>

            </div> <!-- /.col -->

        </div> <!-- /.row -->

    </div> <!-- /.container -->

</footer>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>

<script src="{{url('backend/assets/js/libs/bootstrap.min.js')}}"></script>
<script src="{{url('backend/assets/js/plugins/icheck/jquery.icheck.js')}}"></script>
<script src="{{url('backend/assets/js/plugins/select2/select2.js')}}"></script>
<script src="{{url('backend/assets/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{url('backend/assets/js/plugins/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{url('backend/assets/js/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.4.5/ckeditor.js"></script>
<script src="{{url('backend/assets/js/onr.js')}}"></script>
<script src="{{url('backend/assets/js/target-admin.js')}}"></script>
<script src="{{url('backend/assets/js/bootstrap-fileupload.js')}}"></script>
@yield('script')

<style>
.alert{margin-bottom:0 !important;}
</style>



</body>
</html>