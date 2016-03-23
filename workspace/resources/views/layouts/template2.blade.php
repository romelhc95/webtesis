<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administración de Tesis</title>
    <link rel="stylesheet" href=" {{URL::secure('bower_components/bootstrap/dist/css/bootstrap.min.css')}} " type="text/css" />
    <link rel="stylesheet" href=" {{URL::secure('bower_components/metisMenu/dist/metisMenu.min.css')}} " type="text/css" />
    <link rel="stylesheet" href=" {{URL::secure('dist/css/sb-admin-2.css') }} " type="text/css" />
    <link rel="stylesheet" href=" {{URL::secure('bower_components/font-awesome/css/font-awesome.min.css') }} " type="text/css" />
    <link rel="stylesheet" href=" {{URL::secure('bower_components/file-input/dist/css/fileinput.min.css') }} " type="text/css" />
</head>

<body>

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
           
           <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Administración De Tesis</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       <li>
                            <a href="#"><i class="glyphicon glyphicon-book glyphicon-fw" ></i> Documentos Recibidos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="#"><i class="fa fa-file fa-fw"></i> Documentos a Cargo</a></li>
                            </ul>
                        </li>
                       <li>
                            <a href="#"><i class="fa fa-group fa-fw" ></i> Documentos Aprobados<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="#"><i class="glyphicon glyphicon-user"></i> Documentos Cuantitativos</a></li>
                                <li><a href="#"><i class=" fa fa-user fa-fw"></i> Documentos Cualitativos</a></li>
                                <li>
                                    <a href="#"><i class="fa fa-exchange fa-fw" ></i> Documentos Pendientes<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="#"> Documentos Cuantitativos</a></li>
                                        <li><a href="#"> Documentos Cualitativos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->

     </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>
    

    <script type="text/javascript" src="{{ URL::secure('bower_components/jquery/dist/jquery.min.js') }}"></script><!-- jQuery -->
    <script type="text/javascript" src="{{ URL::secure('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script><!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="{{ URL::secure('bower_components/metisMenu/dist/metisMenu.min.js') }}"></script><!-- Metis Menu Plugin JavaScript -->
    <script type="text/javascript" src="{{ URL::secure('dist/js/sb-admin-2.js') }}"></script><!-- Custom Theme JavaScript -->
    <script type="text/javascript" src="{{ URL::secure('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::secure('bower_components/jquery/dist/combodinamico.js') }}"></script><!--javaScript de combo dinamico-->
    <script type="text/javascript" src="{{ URL::secure('bower_components/file-input/dist/js/fileinput.min.js') }}"></script>
</body>

</html>