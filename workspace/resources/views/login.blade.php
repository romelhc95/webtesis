<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WEB Tesis</title>
    <link rel="stylesheet" href=" {{URL::secure('bower_components/bootstrap/dist/css/bootstrap.min.css')}} " type="text/css" /><!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href=" {{URL::secure('bower_components/metisMenu/dist/metisMenu.min.css')}} " type="text/css" /><!-- MetisMenu CSS -->
    <link rel="stylesheet" href=" {{URL::secure('dist/css/sb-admin-2.css') }} " type="text/css" /><!-- Custom CSS -->
    <link rel="stylesheet" href=" {{URL::secure('bower_components/font-awesome/css/font-awesome.min.css') }} " type="text/css" /><!-- Custom Fonts -->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <select name="select1" id="select1" class="form-control">
                                        <option value="personal1" selected> SECRETARIA</option>
                                        <option value="personal2"> JEFE DE AREA</option>
                                        <option value="personal3"> REVISOR</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="index.html" class="btn btn-lg btn-primary btn-block">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ URL::secure('bower_components/jquery/dist/jquery.min.js') }}"></script><!-- jQuery -->
    <script type="text/javascript" src="{{ URL::secure('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script><!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="{{ URL::secure('bower_components/metisMenu/dist/metisMenu.min.js') }}"></script><!-- Metis Menu Plugin JavaScript -->
    <script type="text/javascript" src="{{ URL::secure('dist/js/sb-admin-2.js') }}"></script><!-- Custom Theme JavaScript -->

</body>

</html>
