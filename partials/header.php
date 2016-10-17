<!DOCTYPE html>
<html>
  <head>
    <title>List manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset='utf-8'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">

  </head>
  <body>
  <?php 
    include('config.php');
    include('session.php');
    $userDetails=$userClass->userDetails($session_uid);

  ?>
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="mylist.php">Prive</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="home.php">Home</a></li>
              <li><a href="mylist.php">Din lista</a></li>
              <li><a href="doorlist.php">Dörrlista</a></li>
              <li><a href="vip.php">VIP</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown" style="float:right;">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <?php echo $userDetails->username; ?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="moderate.php">Granska</a></li>
                  <li><a href="help.php">Hjälp</a></li>
                  <li class="disabled"><a href="#" class="disabled">Statistik</a></li>
                  <!--<li role="separator" class="divider"></li>
                  <li class="dropdown-header"></li>-->
                  <li class="disabled"><a href="#">Inställningar</a></li>
                  <li><a href="logout.php">Logga ut</a></li>
                </ul>
              </li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>