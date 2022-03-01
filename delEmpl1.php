<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	
</body>
</html>
<body style="background-color:#e3b4b4;">  
<style>
      table { border-color: #201e1e; background-color: #ffdfdf;}
     th  {border:2.5px solid #201e1e;}   
      td {border:2.5px solid #201e1e;}
    </style>






<table class="content-table" align="center">
	<th>code</th>
	<th>nom</th>
	<th> prenom</th>
	<th>sexe</th>
	<th>adresse</th>
	<th>ddn</th>
	<th>serviceattache</th>
	<th>supprimer</th>


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
		

		echo "<tr>"."<td>".$code."</td>"."<td>". $row['nom']."</td>"."<td>".$row['prenom']."</td>"."<td>".$row['sexe']."</td>"."<td>".$row['adress']."</td>"."<td>".$row['datedenaissance']."</td>"."<td>".$row['numServ']."</td>"."<td>".
		"<a href='delEmpl.php?code=$code'>Supprimer </a>"
		."</td>"."</tr>" ;

			}
	echo "</table>";
	
}
else{
	echo "y a une erreur";
}


?>

</div>