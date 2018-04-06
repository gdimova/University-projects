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

if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "gabi1234";

try {
    $conn = new PDO("mysql:host=$servername;dbname=test3", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //   echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	
	
   if(isset($_FILES['ffile'])){
      $errors= array();
      $file_name = $_FILES['ffile']['name'];
      $file_size =$_FILES['ffile']['size'];
      $file_tmp =$_FILES['ffile']['tmp_name'];
      $file_type=$_FILES['ffile']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['ffile']['name'])));
      
      $expensions= array("docx","doc","pdf");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a DOCX or PDF or DOC file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,__DIR__ . "/diplomski/".$file_name);
        // echo "Success";
      }else{
         print_r($errors);
      }
   }

	
	$sql = "INSERT INTO file (f_name, f_path, f_type_fk)
VALUES ('".$_POST["fname"]."','". __DIR__ ."/diplomski/".$file_name."',1)";
if ($conn->query($sql)) {
echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

$conn = null;

}
?>

<html>
  <head>
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
	 form{
	    position: absolute;
    left: 5%;
    bottom: 60%;
	 }
	 #stil{ 
		position: absolute; 
		left:10%; 
		bottom:70%
	 }
	 .glaven{
		position: absolute;
		left: 43%;
	 }
    </style>
  </head>
  <body>

 <!-- Navigation bar -->
	   <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container" style="margin-bottom: 6px;">
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

	<form name="finki" action="finki.php" method="post" enctype="multipart/form-data">
    <input name="fname" type = "text"> </input>
	<input name="ffile" type = "file"> </input>
	<input name="submit" type = "submit"> </input>
   </form>
   
   <?php
   
   if ($handle = opendir(__DIR__ .'/diplomski/')) {
	   echo '<div style="padding-bottom: 10%;">  </div>';
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
			
            echo "<a class='glaven' href='download.php?file=".$entry."'>".$entry."</a><br/>";
			
        }
    }
		
    closedir($handle);
}

?>
   


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- // <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
</body>
<footer>
 <div class="footer text-center" style="    position: absolute; left: 37%; bottom: 0%;">
<p>&copy; 2017 Дипломски работи. Сите права се задржани</p>
    </div><!-- End Footer --></footer>
</html>



