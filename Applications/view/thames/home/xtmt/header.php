<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo baseurl;?>/public/css/main.css">
</head>
<body>
  <div class="header-section">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo baseurl;?>/Supperadmin/index">Softwatefirmbd.com</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo baseurl;?>/Supperadmin/logout"><span class="glyphicon glyphicon-log-in"></span> <?php echo $_SESSION['username'];?></a></li>
    </ul>
  </div>
</nav>
  </div>

    <div class="sidebar-section">
      <nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo baseurl;?>/Supperadmin/index">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category-Option<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="<?php echo baseurl;?>/Category/managecategory">Category</a></li>
          </ul>
        </li>          
        <li ><a href="#">Libros<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
        <li ><a href="#">Tags<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
      </ul>
    </div>
  </div>
    </div>
<div class="content-section">
<div class="container">
  <div class="row">
    <div class="col-sm-12">