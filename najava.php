<!DOCTYPE html>


<?php

global $flag;
		function baraj()
		{
			$konekcija = mysqli_connect("localhost","root","gabi1234","test3");
			$ime=$_POST['user'];
			$lozinka=$_POST['pass'];
			$brojac = 0;
		    
			
			if (mysqli_connect_errno())
			{
			   echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			$komanda="SELECT password FROM students2 WHERE st_name LIKE '%" . $ime . "%'";
			$rez=mysqli_query($konekcija, $komanda);
			if ($konekcija)
			{
			  while ($row=mysqli_fetch_array($rez))
			    {
					
			    	if($row['password']===$lozinka)
			    	{
						echo "<script> window.location.assign('index.php'); </script>";
			    		$brojac = $brojac + 1;
			    		session_start();
			    		$_SESSION["flag"] = $brojac;
			    	}
			    }
			    if($brojac==0)
			    {
			    	echo '<script language="javascript">';
					echo 'alert("Грешна лозинка или име")';
					echo '</script>';
			    }
			 // mysqli_free_result($result);
			}
			else
			{
				echo "Nemate pristap!";
			}
			mysqli_close($konekcija);
		}

		if(!empty($_POST)){
			baraj();
		}
?>
   

	


<html>
  <head>
<meta charset ="utf-8"> </meta>
    <title>Дипломски работи</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
	<style>
	div.main{
width: 320px;
float:center;
padding: 10px 55px 40px;
background-color: rgb(190, 211, 244);
border: 15px solid white;
box-shadow: 0 0 10px;
border-radius: 2px;
font-size: 13px;
margin: 56px;
margin-left: 190px;
    position: absolute;
	bottom: 10%;
    right: 34%;
}
#name {
width: 97.7%;
height: 34px;
padding-left: 5px;
margin-bottom: 20px;
margin-top: 8px;
box-shadow: 0 0 5px #00F5FF;
border: 2px solid #00F5FF;
color: #4f4f4f;
font-size: 16px;
}
#prezime{
width: 97.7%;
height: 34px;
padding-left: 5px;
margin-bottom: 20px;
margin-top: 8px;
box-shadow: 0 0 5px #00F5FF;
border: 2px solid #00F5FF;
color: #4f4f4f;
font-size: 16px;
}
#password{
width: 97.7%;
height: 34px;
padding-left: 5px;
margin-bottom: 20px;
margin-top: 8px;
box-shadow: 0 0 5px #00F5FF;
border: 2px solid #00F5FF;
color: #4f4f4f;
font-size: 16px;
}
</style>
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>
    
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">

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
	  </div>


	  
	   <div  class="main">
	   
      <form class="form" method="post">
       <h2>Најави се</h2>
	   <br>
		  <br>
          <label>Име :</label>
          <input type="text" name="user" id="name"/>
		  <br>
		 
              <label>Password :</label>
          <input type="password" name="pass" id="password" />
		  <br>
            
       <input name="submit" type="submit" value = "Login"/>
       </form>
     </div>	
 
 
    </div><!-- End Navigation bar -->




</br></br></br></br></br></br></br></br></br></br></br>







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

