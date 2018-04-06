<!DOCTYPE html>

<?php

	session_start();
if($_SESSION["flag"] == 1){
	echo '<div style =" position:absolute; z-index:99999; left:91%; top: 25px; ">
              <a href="logout.php" style = "color: #0a35ad;">Одјава </a>
			  </div>';
}
else{
	echo '<div style =" position:absolute; z-index:99999; left:91%; top: 25px;">
             <a href="najava.php" style = "color: #0a35ad;">Најава </a>
			  </div>';
}
?>

<html>

  <head>
    <meta charset ="utf-8"> </meta>
    <title>Дипломски трудови</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>
    
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript">
		
	</script>
  </head>
  <body>
    <!-- Navigation bar -->
	   <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">

          <a class="navbar-brand" href="#"><span class="green">Дипломски</span> трудови</a>
		  </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
          <ul class="navbar-nav nav">
            <li><a href="index.php">Почетна</a></li>
            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">Факултет  <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="feit.php">ФЕИТ</a></li>
                <li><a href="finki.php">ФИНКИ</a></li>
                <li><a href="mfs.php">МФС</a></li>
				<li><a href="arhitektonski.php">Архитектонски</a></li>
                <li class="divider"></li>
              </ul>
            </li>
            <li><a href="cena.php">Ценовник</a></li>
             <li><a href="pravilnik.php">Правилник</a></li>
           <li><a href="kontakt.php">Контакт</a></li>
		<li><a href="logout.php">  </a></li>
          </ul>
        </nav>
      </div>
    </div>
 <!-- End Navigation bar -->

    <!-- Slide gallery -->
    <div class="jumboton">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
           <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/carousel1.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="img/carousel2.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="img/lavotkral.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
<div class="item">
            <img src="img/konot.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div><!-- End Slide gallery -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- // <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
  </body>
</html>