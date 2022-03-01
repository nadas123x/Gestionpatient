<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  href="a.css">
</head>
<body>
	
</body>
</html>
<style>
      table { border-color: #8ebf42; background-color: #d9d9d9;}
     th  {border:2.5px solid #095484;}   
      td {border:2.5px solid #095484;}
    </style>
<table class="content-table" align="center">
	<th>code</th>
	<th>nom</th>
	<th> prenom</th>
	<th>sexe</th>
	<th>adresse</th>
	<th>ddn</th>
	<th>serviceattache</th>
	<th>modifier</th>


<?php
            $host         = "localhost:3307";
            $user         = "nada";
            $password     = "";
            $dbName       = "grh";

$conn = mysqli_connect($host, $user, $password,$dbName);

$query= "SELECT * FROM `employes` ";
$result = mysqli_query($conn,$query);
if($result){
	while($row=mysqli_fetch_assoc($result)){
		$code=$row['code'];
		echo "<tr>"."<td>".$code."</td>"."<td>". $row['nom']."</td>"."<td>".$row['prenom']."</td>"."<td>".$row['sexe']."</td>"."<td>".$row['adress']."</td>"."<td>".$row['datedenaissance']."</td>"."<td>".$row['numServ']."</td>"."<td>"."<a href='editEmpl.php?code=$code'>modifier</a>"."</td>"."</tr>" ;
			}
	echo "</table>";
	
}
else{
	echo "y a une erreur";
}


?>