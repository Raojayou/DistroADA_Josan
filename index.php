<?php
    include_once 'config.php';
    include_once 'connect_db.php';

    $queryResult = $pdo->query("SELECT * from distroada");
?>

<html lang="es">
<head>
    <meta charset="utf-8">
    <title>DistroADA</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="app.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">DistroADA</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="add.php">Add Distro</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    <h1>Most Popular Distros</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Os Type</th>
            <th>Version</th>
            <th>Web</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Debian</td>
            <td>Linux, BSD</td>
            <td>9</td>
            <td>http://www.debian.org/</td>
            <td><span class="glyphicon glyphicon-pencil edit" aria-hidden="true"></span></td>
            <td><span class="glyphicon glyphicon-trash delete" aria-hidden="true"></span></td>
        </tr>
        <tr>
            <td>Fedora</td>
            <td>Linux</td>
            <td>26</td>
            <td>https://getfedora.org/</td>
            <td><span class="glyphicon glyphicon-pencil edit" aria-hidden="true"></span></td>
            <td><span class="glyphicon glyphicon-trash delete" aria-hidden="true"></span></td>
        </tr>
        <tr>
            <td>Ubuntu</td>
            <td>Linux</td>
            <td>17.10</td>
            <td>https://www.ubuntu.com/</td>
            <td><span class="glyphicon glyphicon-pencil edit" aria-hidden="true"></span></td>
            <td><span class="glyphicon glyphicon-trash delete" aria-hidden="true"></span></td>
        </tr>
        <tr>
            <td>ArchLinux</td>
            <td>Linux</td>
            <td>2017.10</td>
            <td>http://www.archlinux.org/</td>
            <td><span class="glyphicon glyphicon-pencil edit" aria-hidden="true"></span></td>
            <td><span class="glyphicon glyphicon-trash delete" aria-hidden="true"></span></td>
        </tr>
        <tr>
            <td>FreeBSD</td>
            <td>BSD</td>
            <td>10.4</td>
            <td>http://www.freebsd.org/</td>
            <td><span class="glyphicon glyphicon-pencil edit" aria-hidden="true"></span></td>
            <td><span class="glyphicon glyphicon-trash delete" aria-hidden="true"></span></td>
        </tr>
        </tbody>
    </table>
</div><!-- /.container -->
</body>
</html>