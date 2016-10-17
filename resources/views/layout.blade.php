<!DOCTYPE html>
<html>
<html lang="en" >
<title>@yield('title')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/app.css">
</head>
<body ng-app="app">

<div ng-controller="index">
    <ui-view></ui-view>
</div>



{{--<nav class="navbar navbar-fixed-top navbar-inverse">--}}
    {{--<div class="container">--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<a class="navbar-brand logo" href="#">Fitness</a>--}}
        {{--</div>--}}
        {{--<div id="navbar" class="collapse navbar-collapse navbar-right">--}}
            {{--<ul class="nav navbar-nav">--}}

                {{--<li><a href="">connexion</a></li>--}}
                {{--<li><a href="#contact">incription</a></li>--}}
            {{--</ul>--}}
        {{--</div><!-- /.nav-collapse -->--}}
    {{--</div><!-- /.container -->--}}
{{--</nav><!-- /.navbar -->--}}

{{--<div class="container">--}}

    {{--<div class="row row-offcanvas row-offcanvas-right">--}}

        {{--<div class="col-xs-12 ">--}}
            {{--<p class="pull-right visible-xs">--}}
                {{--<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>--}}
            {{--</p>--}}
            {{--<div class="jumbotron">--}}
                {{--<h1>Hello, world!</h1>--}}
                {{--<p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-6 col-lg-4">--}}
                    {{--<h2>Heading</h2>--}}
                    {{--<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>--}}
                    {{--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>--}}
                {{--</div><!--/.col-xs-6.col-lg-4-->--}}
                {{--<div class="col-xs-6 col-lg-4">--}}
                    {{--<h2>Heading</h2>--}}
                    {{--<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>--}}
                    {{--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>--}}
                {{--</div><!--/.col-xs-6.col-lg-4-->--}}
                {{--<div class="col-xs-6 col-lg-4">--}}
                    {{--<h2>Heading</h2>--}}
                    {{--<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>--}}
                    {{--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>--}}
                {{--</div><!--/.col-xs-6.col-lg-4-->--}}
                {{--<div class="col-xs-6 col-lg-4">--}}
                    {{--<h2>Heading</h2>--}}
                    {{--<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>--}}
                    {{--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>--}}
                {{--</div><!--/.col-xs-6.col-lg-4-->--}}
                {{--<div class="col-xs-6 col-lg-4">--}}
                    {{--<h2>Heading</h2>--}}
                    {{--<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>--}}
                    {{--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>--}}
                {{--</div><!--/.col-xs-6.col-lg-4-->--}}
                {{--<div class="col-xs-6 col-lg-4">--}}
                    {{--<h2>Heading</h2>--}}
                    {{--<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>--}}
                    {{--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>--}}
                {{--</div><!--/.col-xs-6.col-lg-4-->--}}
            {{--</div><!--/row-->--}}
        {{--</div><!--/.col-xs-12.col-sm-9-->--}}


{{--</div><!--/row-->--}}

{{--<hr>--}}

<footer>
<p>&copy; 2016 Company, Inc.</p>
</footer>




    <!-- angular dependencies -->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/angular.js"></script>
    <script type="text/javascript" src="{{ url('/js/ui-bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/angular-ui-router.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/restangular.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/satellizer.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/lodash.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/moment.js') }}"></script>
    <script src="{{ url('/js/angular-file-upload.min.js') }}"></script>
    {{--<script type="text/javascript" src="{{ url('/js/angular-stripe.js') }}"></script>--}}
    {{--<script type="text/javascript" src="{{ url('/js/angular-credit-cards.js') }}"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.2.0/ui-bootstrap-tpls.js

"></script>


    <script type="text/javascript" src="app/app.js"></script>
    <script type="text/javascript" src="app/index.js"></script>
    <script type="text/javascript" src="app/home/HomeController.js"></script>
    <script type="text/javascript" src="app/inscription/InscriptionController.js"></script>






</body>
</html>
