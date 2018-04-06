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
<style>
      #map {
        height: 365px;
        width: 1000px;
       }
    </style>
  </head>
  <body>
<table>
<tr></tr><tr></tr><tr></tr>
    <!-- Navigation bar -->
    </br>
<td>
  </br>
  </br>
  </br>
<p align="right">
<h3>Контактирајте не</h3>
<FORM ACTION="pratena.html"
METHOD="POST">
Вашето име <BR>
<INPUT TYPE="TEXT" NAME="Вашето име" SIZE="40">
<P>
Вашата и-мејл адреса <BR>
<INPUT TYPE="TEXT" NAME="Вашата и-мејл адреса" SIZE="40">
<P>
Колку ви се допаѓа нашата страна:
<INPUT TYPE="RADIO" NAME="send" VALUE="yes"> 1
<INPUT TYPE="RADIO" NAME="send" VALUE="no"> 2
<INPUT TYPE="RADIO" NAME="send" VALUE="maybe"> 3
<INPUT TYPE="RADIO" NAME="status" VALUE="student"> 4
<INPUT TYPE="RADIO" NAME="status" VALUE="consult"> 5
<P>


<P>
Порака: <BR>
<TEXTAREA NAME="description" ROWS="8" COLS="45"></TEXTAREA>
<P>
<INPUT TYPE="SUBMIT" NAME="Испрати" VALUE="Испрати">
</FORM>
</p>


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
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">Факултет <b class="caret"></b></a>
              <ul class="dropdown-menu">
               <li><a href="feit.php">ФЕИТ</a></li>
                <li><a href="finki.php">ФИНКИ</a></li>
                <li><a href="mfs.php">МФС</a></li>
				<li><a href="arhitektonki.php">Архитектонски</a></li>
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
</td>
<td>
<h3>Нашата локација</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 41.99402, lng: 21.432650};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }

    </script>
</td>
</table>
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
        <p>&copy; 2017 Дипломски работи. Сите права се задржани</p>
    </div><!-- End Footer --></footer>
</html>
