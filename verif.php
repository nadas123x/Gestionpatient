<?php
$login=$_POST['login'];
$password=md5($_POST['password']);

require 'connexion.php';

$query="select count(*) from users where login='$login' and password='$password'";
$resut=mysqli_query($con,$query);

$data=mysqli_fetch_row($resut);

if($data[0]==1) 
{
	session_start();
	
	$_SESSION['user']=$login;
	header('location:allEmpls.php');
}

else header('location:index.php?auth=false');
?>