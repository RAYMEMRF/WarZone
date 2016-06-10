<?php#include(SITE_ROOT.'/resources/includes/init.php');?>
<?php #include(SITE_ROOT.'/resources/includes/common.php'); ?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo HTTP_ROOT?>/admin/resources/img/favicon.ico" />

    <title>Theme Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo HTTP_ROOT?>/admin/resources/css/bootstrap.css" rel="stylesheet" />
    <!-- Bootstrap theme -->
    <link href="<?php echo HTTP_ROOT?>/admin/resources/css/bootstrap-theme.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <!-- <link href="<?php #HTTP_ROOT?>/resources/css/theme.css" rel="stylesheet" /> -->
    <link href="<?php echo HTTP_ROOT?>/admin/resources/css/bootstrap-theme.css" rel="stylesheet" />

    <!-- Custom styles for WYSIWYG -->
    <link rel="stylesheet" type="text/css" href="<?php echo HTTP_ROOT?>/admin/resources/css/bootstrap-wysihtml5.css" />

<style media="screen" type="text/css">

  .jumbotron {
    padding-top: 50px;
    padding-bottom: 50px;
  }
  .container .jumbotron {
    padding-right: 60px;
    padding-left: 60px;
  }
  .jumbotron h1 {
    font-size: 63px;
  }

  .modal-dialog {
    right: auto;
    left: 50%;
    width: 600px;
    padding-top: 30px;
    padding-bottom: 30px;
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  }

  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -15px;
    margin-left: -15px;
    font-size: 30px;
  }
  .carousel-caption {
    right: 20%;
    left: 20%;
    padding-bottom: 30px;
  }
  .carousel-indicators {
    bottom: 20px;
  }</style><style media="all" type="text/css">
  .lead {
    font-size: 21px;
  }

  .dl-horizontal dt {
    float: left;
    width: 160px;
    overflow: hidden;
    clear: left;
    text-align: right;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .dl-horizontal dd {
    margin-left: 180px;
  }
  .dl-horizontal dd:before,
  .dl-horizontal dd:after {
    display: table;
    content: " ";
  }
  .dl-horizontal dd:after {
    clear: both;
  }
  .dl-horizontal dd:before,
  .dl-horizontal dd:after {
    display: table;
    content: " ";
  }
  .dl-horizontal dd:after {
    clear: both;
  }

  .container {
    max-width: 750px;
  }
  .col-sm-1,
  .col-sm-2,
  .col-sm-3,
  .col-sm-4,
  .col-sm-5,
  .col-sm-6,
  .col-sm-7,
  .col-sm-8,
  .col-sm-9,
  .col-sm-10,
  .col-sm-11 {
    float: left;
  }
  .col-sm-1 {
    width: 8.333333333333332%;
  }
  .col-sm-2 {
    width: 16.666666666666664%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-4 {
    width: 33.33333333333333%;
  }
  .col-sm-5 {
    width: 41.66666666666667%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-7 {
    width: 58.333333333333336%;
  }
  .col-sm-8 {
    width: 66.66666666666666%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-10 {
    width: 83.33333333333334%;
  }
  .col-sm-11 {
    width: 91.66666666666666%;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-push-1 {
    left: 8.333333333333332%;
  }
  .col-sm-push-2 {
    left: 16.666666666666664%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-4 {
    left: 33.33333333333333%;
  }
  .col-sm-push-5 {
    left: 41.66666666666667%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-7 {
    left: 58.333333333333336%;
  }
  .col-sm-push-8 {
    left: 66.66666666666666%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-10 {
    left: 83.33333333333334%;
  }
  .col-sm-push-11 {
    left: 91.66666666666666%;
  }
  .col-sm-pull-1 {
    right: 8.333333333333332%;
  }
  .col-sm-pull-2 {
    right: 16.666666666666664%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-4 {
    right: 33.33333333333333%;
  }
  .col-sm-pull-5 {
    right: 41.66666666666667%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-7 {
    right: 58.333333333333336%;
  }
  .col-sm-pull-8 {
    right: 66.66666666666666%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-10 {
    right: 83.33333333333334%;
  }
  .col-sm-pull-11 {
    right: 91.66666666666666%;
  }
  .col-sm-offset-1 {
    margin-left: 8.333333333333332%;
  }
  .col-sm-offset-2 {
    margin-left: 16.666666666666664%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333333333%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666666666667%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-7 {
    margin-left: 58.333333333333336%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666666666666%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333333334%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666666666666%;
  }

  .container {
    max-width: 970px;
  }
  .col-md-1,
  .col-md-2,
  .col-md-3,
  .col-md-4,
  .col-md-5,
  .col-md-6,
  .col-md-7,
  .col-md-8,
  .col-md-9,
  .col-md-10,
  .col-md-11 {
    float: left;
  }
  .col-md-1 {
    width: 8.333333333333332%;
  }
  .col-md-2 {
    width: 16.666666666666664%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-4 {
    width: 33.33333333333333%;
  }
  .col-md-5 {
    width: 41.66666666666667%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-7 {
    width: 58.333333333333336%;
  }
  .col-md-8 {
    width: 66.66666666666666%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-10 {
    width: 83.33333333333334%;
  }
  .col-md-11 {
    width: 91.66666666666666%;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-push-1 {
    left: 8.333333333333332%;
  }
  .col-md-push-2 {
    left: 16.666666666666664%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-4 {
    left: 33.33333333333333%;
  }
  .col-md-push-5 {
    left: 41.66666666666667%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-7 {
    left: 58.333333333333336%;
  }
  .col-md-push-8 {
    left: 66.66666666666666%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-10 {
    left: 83.33333333333334%;
  }
  .col-md-push-11 {
    left: 91.66666666666666%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-pull-1 {
    right: 8.333333333333332%;
  }
  .col-md-pull-2 {
    right: 16.666666666666664%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-4 {
    right: 33.33333333333333%;
  }
  .col-md-pull-5 {
    right: 41.66666666666667%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-7 {
    right: 58.333333333333336%;
  }
  .col-md-pull-8 {
    right: 66.66666666666666%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-10 {
    right: 83.33333333333334%;
  }
  .col-md-pull-11 {
    right: 91.66666666666666%;
  }
  .col-md-offset-0 {
    margin-left: 0;
  }
  .col-md-offset-1 {
    margin-left: 8.333333333333332%;
  }
  .col-md-offset-2 {
    margin-left: 16.666666666666664%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333333333%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666666666667%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-7 {
    margin-left: 58.333333333333336%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666666666666%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333333334%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666666666666%;
  }

  .container {
    max-width: 1170px;
  }
  .col-lg-1,
  .col-lg-2,
  .col-lg-3,
  .col-lg-4,
  .col-lg-5,
  .col-lg-6,
  .col-lg-7,
  .col-lg-8,
  .col-lg-9,
  .col-lg-10,
  .col-lg-11 {
    float: left;
  }
  .col-lg-1 {
    width: 8.333333333333332%;
  }
  .col-lg-2 {
    width: 16.666666666666664%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-4 {
    width: 33.33333333333333%;
  }
  .col-lg-5 {
    width: 41.66666666666667%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-7 {
    width: 58.333333333333336%;
  }
  .col-lg-8 {
    width: 66.66666666666666%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-10 {
    width: 83.33333333333334%;
  }
  .col-lg-11 {
    width: 91.66666666666666%;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-push-0 {
    left: auto;
  }
  .col-lg-push-1 {
    left: 8.333333333333332%;
  }
  .col-lg-push-2 {
    left: 16.666666666666664%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-4 {
    left: 33.33333333333333%;
  }
  .col-lg-push-5 {
    left: 41.66666666666667%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-7 {
    left: 58.333333333333336%;
  }
  .col-lg-push-8 {
    left: 66.66666666666666%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-10 {
    left: 83.33333333333334%;
  }
  .col-lg-push-11 {
    left: 91.66666666666666%;
  }
  .col-lg-pull-0 {
    right: auto;
  }
  .col-lg-pull-1 {
    right: 8.333333333333332%;
  }
  .col-lg-pull-2 {
    right: 16.666666666666664%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-4 {
    right: 33.33333333333333%;
  }
  .col-lg-pull-5 {
    right: 41.66666666666667%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-7 {
    right: 58.333333333333336%;
  }
  .col-lg-pull-8 {
    right: 66.66666666666666%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-10 {
    right: 83.33333333333334%;
  }
  .col-lg-pull-11 {
    right: 91.66666666666666%;
  }
  .col-lg-offset-0 {
    margin-left: 0;
  }
  .col-lg-offset-1 {
    margin-left: 8.333333333333332%;
  }
  .col-lg-offset-2 {
    margin-left: 16.666666666666664%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333333333%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666666666667%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-7 {
    margin-left: 58.333333333333336%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666666666666%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333333334%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666666666666%;
  }

  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .form-control {
    display: inline-block;
  }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    padding-left: 0;
    margin-top: 0;
    margin-bottom: 0;
  }
  .form-inline .radio input[type="radio"],
  .form-inline .checkbox input[type="checkbox"] {
    float: none;
    margin-left: 0;
  }

  .form-horizontal .control-label {
    text-align: right;
  }

  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }

  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }

  .navbar {
    border-radius: 4px;
  }

  .navbar-header {
    float: left;
  }

  .navbar-collapse {
    width: auto;
    border-top: 0;
    box-shadow: none;
  }
  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .navbar-collapse.in {
    overflow-y: visible;
  }

  .container > .navbar-header,
  .container > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }

  .navbar-static-top {
    border-radius: 0;
  }

  .navbar-fixed-top,
  .navbar-fixed-bottom {
    border-radius: 0;
  }

  .navbar > .container .navbar-brand {
    margin-left: -15px;
  }

  .navbar-toggle {
    display: none;
  }

  .navbar-nav {
    float: left;
    margin: 0;
  }
  .navbar-nav > li {
    float: left;
  }
  .navbar-nav > li > a {
    padding-top: 15px;
    padding-bottom: 15px;
  }

  .navbar-left {
    float: left !important;
  }
  .navbar-right {
    float: right !important;
  }
  .navbar-right .dropdown-menu {
    right: 0;
    left: auto;
  }

  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .form-control {
    display: inline-block;
  }
  .navbar-form .radio,
  .navbar-form .checkbox {
    display: inline-block;
    padding-left: 0;
    margin-top: 0;
    margin-bottom: 0;
  }
  .navbar-form .radio input[type="radio"],
  .navbar-form .checkbox input[type="checkbox"] {
    float: none;
    margin-left: 0;
  }

  .navbar-form {
    width: auto;
    padding-top: 0;
    padding-bottom: 0;
    margin-right: 0;
    margin-left: 0;
    border: 0;
    -webkit-box-shadow: none;
            box-shadow: none;
  }

  .navbar-text {
    margin-right: 15px;
    margin-left: 15px;
  }

  .visible-xs {
    display: none !important;
  }
  tr.visible-xs {
    display: none !important;
  }
  th.visible-xs,
  td.visible-xs {
    display: none !important;
  }

  .visible-sm {
    display: none !important;
  }
  tr.visible-sm {
    display: none !important;
  }
  th.visible-sm,
  td.visible-sm {
    display: none !important;
  }

  .visible-md {
    display: none !important;
  }
  tr.visible-md {
    display: none !important;
  }
  th.visible-md,
  td.visible-md {
    display: none !important;
  }

  .visible-lg {
    display: block !important;
  }
  tr.visible-lg {
    display: table-row !important;
  }
  th.visible-lg,
  td.visible-lg {
    display: table-cell !important;
  }

  .hidden-xs {
    display: block !important;
  }
  tr.hidden-xs {
    display: table-row !important;
  }
  th.hidden-xs,
  td.hidden-xs {
    display: table-cell !important;
  }

  .hidden-sm {
    display: block !important;
  }
  tr.hidden-sm {
    display: table-row !important;
  }
  th.hidden-sm,
  td.hidden-sm {
    display: table-cell !important;
  }

  .hidden-md {
    display: block !important;
  }
  tr.hidden-md {
    display: table-row !important;
  }
  th.hidden-md,
  td.hidden-md {
    display: table-cell !important;
  }

  .hidden-lg {
    display: none !important;
  }
  tr.hidden-lg {
    display: none !important;
  }
  th.hidden-lg,
  td.hidden-lg {
    display: none !important;
  }</style><style media="print" type="text/css">
  * {
    color: #000 !important;
    text-shadow: none !important;
    background: transparent !important;
    box-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: " (" attr(href) ")";
  }
  abbr[title]:after {
    content: " (" attr(title) ")";
  }
  .ir a:after,
  a[href^="javascript:"]:after,
  a[href^="#"]:after {
    content: "";
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  @page  {
    margin: 2cm .5cm;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  .navbar {
    display: none;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .btn > .caret,
  .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .label {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }

  .visible-print {
    display: block !important;
  }
  tr.visible-print {
    display: table-row !important;
  }
  th.visible-print,
  td.visible-print {
    display: table-cell !important;
  }
  .hidden-print {
    display: none !important;
  }
  tr.hidden-print {
    display: none !important;
  }
  th.hidden-print,
  td.hidden-print {
    display: none !important;
  }
  </style>
  <style type="text/css" id="holderjs-style">.holderjs-fluid {font-size:16px;font-weight:bold;text-align:center;font-family:sans-serif;margin:0}</style>
  <!--<style type="text/css">@import url("//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/css/bootstrap-glyphicons.css");</style>-->
  <style media="all" type="text/css">
  .white, .white a {
    color: #fff;
    }
  </style>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <script src="<?php echo HTTP_ROOT?>/admin/resources/js/jquery.js"></script>
  <script src="<?php echo HTTP_ROOT?>/admin/resources/js/respond.js"></script>
  <script src="<?php echo HTTP_ROOT?>/admin/resources/js/bootstrap.js"></script>
  <script src="<?php echo HTTP_ROOT?>/admin/resources/js/holder.js"></script>
  <script src="<?php echo HTTP_ROOT?>/admin/resources/js/jqBootstrapValidation.js"></script>
  </head>
  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo HTTP_ROOT?>/admin">
              <img style="width: 120px; height: 48px;" src="<?php echo HTTP_ROOT?>/admin/resources/img/terablanco.png">
                    &nbsp;&nbsp;&nbsp;&nbsp;TERA SOLUCIONES C.A. <i>- panel administrador -</i>
              </img></a>
        </div>
        <div class="navbar-right">
            <br>
            <div class="btn-group">
              <button type="button" class="btn btn-primary btn-sm"><?php #strtoupper($_SESSION['usuario']).' ('.$_SESSION['nombre'].')';?></button>
              <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="usuarios/editar.php?ref=<?php #$_SESSION['uid']?>"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;&nbsp;Cambiar mis datos</a></li>
                <li><a href="<?php str_replace('/admin','',HTTP_ROOT)?>"><span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp;&nbsp;Ir al sitio web</a></li>
                <li class="divider"></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;&nbsp;Cerrar sesi&oacute;n</a></li>
              </ul>
            </div>
        </div>
      </div>
    </div>

    <div class="container theme-showcase">
