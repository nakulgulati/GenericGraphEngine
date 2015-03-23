<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Graph Engine</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!--nav-->

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Graph Engine</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-menu-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >Type <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li value="type_create"><a href="#">Create</a></li>
                        <li value="type_read"><a href="#">Read</a></li>
                        <li value="type_update"><a href="#">Update</a></li>
                        <li value="type_delete"><a href="#">Delete</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >Node <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li value="node_create"><a href="#">Create</a></li>
                        <li value="node_read"><a href="#">Read</a></li>
                        <li value="node_update"><a href="#">Update</a></li>
                        <li value="node_delete"><a href="#">Delete</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >Edge <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li value="edge_create"><a href="#">Create</a></li>
                        <li value="edge_read"><a href="#">Read</a></li>
                        <li value="edge_update"><a href="#">Update</a></li>
                        <li value="edge_delete"><a href="#">Delete</a></li>
                        <!--<li class="divider"></li>-->
                        <li value="edge_association"><a href="#">Entity Association Graph</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

