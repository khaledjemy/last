<?php 
session_start();

if(empty($_SESSION)){
    require('php/facelogo.php');
	require("php/login.php");
    

}else{

    require('php/home.php');
  

}
?>