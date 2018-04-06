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
<style>
div.img {
    border: 1px solid #ccc;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
</br></br></br></br></br>
</br>
<div style="position: absolute; left: 7%; top: 110px;">
<img src="img/knigi.jpg" alt="" width="500" height="200"/></a>
</div>
<div style="position: absolute; top: 110px; left: 54%;">
<img src="img/vraboten2.jpg" alt="" width="500" height="200"/></a>
</div>
<style>
.tekst{
color:#5e6db7;
font-size:80;
}
</style>
<div style="position: absolute; bottom: 4%; text-align:center; left:15%; ">
<p  class="tekst"<b>
          Документите кои можете да ги најдете на нашата страна се комплетни, бесплатни, со содржина и литература прикачени од нас или од наши корисници, 
		  <br>
		  а кои сигурно ќе ви 
послужат како основа од која понатаму ќе си го создадете вашиот оригинален труд.
<br>
Исто така можете да не контактирате и да нарачате труд по ваша потреба која ќе биде оригинална и иизработена од нашите вработени.
<br>
Изработката на трудови е прилагодена според ЕКТС критериуми на изработка (соодветно цитирање во фусноти или Harvard system,
<br>
 порамнување,нумерирање, академски стил на изразување ...)
<br>
- Секој труд се изработува индивидуално. (елиминирана е можноста од плагијатерство)
<br>
- Се користи литература која ја третира селектираната проблематика. (поголем број на печатени извори и дел од електронски PDF file)
<br>
- Можност за лекторирање на трудовите.
<br>
-Трудот се изработува според договорениот временски период.
<br>
-Ценовник за изработка според типот на труд е прикачен на страната.
<br>
Во понудата на изработка на трудови се:
<br>
-Семинарски труд
<br>
-Дипломски труд
<br>
-Магистерски труд
</b>
</p>
</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- // <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
</body>

</html>