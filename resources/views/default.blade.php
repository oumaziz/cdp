<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <title>CDP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        body {
            font: 20px Montserrat;
            line-height: 1.8;
        }
        p {font-size: 16px;}
        .margin {margin-bottom: 45px;}

        .container-fluid {
            padding-top: 1px;
            padding-bottom: 1px;
        }
        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;

        }
        .navbar-nav  li a:hover {
            color: #1abc9c !important;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Your Environment GL</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Create a project</a></li>
                <li><a href="#">Display Backlog</a></li>
                <li><a href="#">Create a sprint</a></li>
                <li><a href="#">Create a task</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
    @yield('content')
</div>




<!-- Footer -->
<div id="footer">
    <div class="container">
        <p>Université de Bordeaux 2015</p>
    </div>
</div>

</body>
</html>