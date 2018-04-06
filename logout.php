<?php

session_start();
if(session_destroy())
{
$_SESSION["flag"] = 0;
header("Location: najava.php");
}
?>