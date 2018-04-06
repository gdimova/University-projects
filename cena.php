<!DOCTYPE html>


<?php

	session_start();
if($_SESSION["flag"] == 1){
	echo '<div style =" position:absolute; z-index:99999; left:92%; top: 25px; ">
              <a href="logout.php" style = "color: #0a35ad;">Одјава </a>
			  </div>';
}
else{
	echo '<div style =" position:absolute; z-index:99999; left:92%; top: 25px;">
             <a href="najava.php" style = "color: #0a35ad;">Најава </a>
			  </div>';
}
?>

<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>


.columns {
    float: left;
    width: 33.3%;
    padding: 8px;
}

.price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
    background-color: #111;
    color: white;
    font-size: 25px;
}

.price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
}

.price .grey {
    background-color: #eee;
    font-size: 20px;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
}

@media only screen and (max-width: 600px) {
    .columns {
        width: 100%;
    }
}
 #map {
        height: 365px;
        width: 1000px;
       }
</style>
    <meta charset ="utf-8"> </meta>
    <title>Дипломски работи</title>
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
  </head>
  <body>



<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
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
          </ul>
        </nav>
      </div>
    </div><!-- End Navigation bar -->






</br>
</br>
</br>
</br>
<h2 style="text-align:center">Цени за достапните услуги</h2>
<div class="columns">
  <ul class="price">
    <li class="header">Семинарски работи</li>
    <li class="grey">500 ден.</li>
    <li>Секоја семинарска е единечен примерок</li>
    <li>Најдостапни цени</li>
    <li>Напишани по факултетските стандарди</li>
    
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#6e9dea">Дипломски работи</li>
    <li class="grey"> 3000 ден.</li>
    <li>Секоја дипломска е единечен примерок</li>
    <li>Најдостапни цени</li>
    <li>Напишани по факултетските стандарди</li>
    
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Магистерски работи</li>
    <li class="grey">6000 ден.</li>
<li>Секоја магистерска е единечен примерок</li>
    <li>Најдостапни цени</li>
    <li>Напишани по факултетските стандарди</li>
   
    
  </ul>
</div>


    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAw4_6NToqLXZghGb78yWBZckpmLJf-SRw&callback=initMap">
    </script>


   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- // <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
</body>
<footer>
 <div class="footer text-center">
 
    </div><!-- End Footer -->
</footer>
</html>
