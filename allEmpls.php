<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  href="a.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<br>
<br>
<br>	
<body style="background-color:#e3b4b4;">  
</html>
<style>
      table { border-color: #201e1e; background-color: #ffdfdf;}
     th  {border:2.5px solid #201e1e;}   
      td {border:2.5px solid #201e1e;}
    </style>

<a href="FormAddEmpl.php" >
<img src="add.jpg" align="center" height="50px" margin-left="10%">
</a>

<br>
<br>
<a href="editlEmpl1.php" >
<img src="di.png" align="center" height="50px">
</a>
<br>
<br>
<a href="delEmpl1.php" >
<img src="dele.jpg" align="center" height="50px">
</a>






<table class="content-table" align="center">
	<th><p>Code d'employé</p></th>
	<th><p>Nom d'employé</p></th>
	<th><p> Prénom d'employé</th>
	<th><p>Genre</th>
	<th><p>Adresse de l'employé</th>
	<th><p>Date de naissance</th>
	<th><p>Numéro services</th>


<?php
            $host         = "localhost:3307";
            $user         = "nada";
            $password     = "";
            $dbName       = "grh";

$conn = mysqli_connect($host, $user, $password,$dbName);

$query= "SELECT * FROM `employes`";
$result = mysqli_query($conn,$query);
if($result){
	while($row=mysqli_fetch_assoc($result)){
		$code=$row['code'];
		

		echo "<tr>"."<td>".$code."</td>"."<td>". $row['nom']."</td>"."<td>".$row['prenom']."</td>"."<td>".$row['sexe']."</td>"."<td>".$row['adress']."</td>"."<td>".$row['datedenaissance']."</td>"."<td>".$row['numServ']."</td>"."</tr>" ;

			}
	echo "</table>";
	
}
else{
	echo "y a une erreur";
}


?>

</div>