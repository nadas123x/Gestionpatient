<!DOCTYPE html>
<html>
 
</head>
<body style="background-color:#e3b4b4;">  
 
<br>
<br>
<br>
<br>
<table align="center" border="10" bgcolor="#ffe5e5" >

    <form action="ValAddEmpll.php" method="post">
 
<tr><td> <p>Nom d'employé </p> </td><td><input type="varchar(100)" name="nom">  </td></tr>

<tr><td> <p>Prénom d'employé </p></td><td><input type="varchar(100)" name="prenom"></td></tr>
<tr><td><p>Genre </td><td> Masculin<input type="radio" name="sexe" value="M" checked>
Féminin <input type="radio" name="sexe" value="F" ></td></tr>

<tr><td><p>Adresse de l'employé </p>   </td><td><input type="text" name="adress">  </td></tr>
<tr><td><p>Date de naissance  </p></p> </td><td> <input type="Date" name="datedenaissance"  required></td></tr>

<tr><td><p>Numéro service </p>  </td><td><br><input type="int(11)" name="numServ"></td></tr>

 <tr align="center"><td></td><td><input type="submit" name="send" value="ajouter" ></td></tr>
</form>
</table>

         
   <?php 
 require 'connexion.php';

  $pnom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;

  $pprenom = !empty($_POST['prenom']) ? $_POST['prenom'] : NULL;
  $psexe = !empty($_POST['sexe']) ? $_POST['sexe'] : NULL;
   $padresse = !empty($_POST['adress']) ? $_POST['adress'] : NULL;
   $pddn = !empty($_POST['datedenaissance']) ? $_POST['datedenaissance'] : NULL;
   $pserviceattache = !empty($_POST['numServ']) ? $_POST['numServ'] : NULL;

   $pSubmit = !empty($_POST['send']) ? $_POST['send'] : NULL;
  
   if($pSubmit){
   $query="INSERT INTO `employes`(`nom`,`prenom`,`sexe`,`adress`,`datedenaissance`,`numServ`) VALUES('".$pnom."','$pprenom','$psexe','$padresse','$pddn','$pserviceattache')";
 
   $result = mysqli_query($conn,$query);
   
} 
   ?>
  
   
</body>
</html>