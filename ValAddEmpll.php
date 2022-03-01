<?php 
            $host               = "localhost:3307";
            $user               = "nada";
            $password      = "";
            $dbName       = "grh";

$conn = mysqli_connect($host, $user, $password,$dbName);

  $pnom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
  $pprenom = !empty($_POST['prenom']) ? $_POST['prenom'] : NULL;
  $psexe = !empty($_POST['sexe']) ? $_POST['sexe'] : NULL;
   $padresse = !empty($_POST['adress']) ? $_POST['adress'] : NULL;
   $pddn = !empty($_POST['datedenaissance']) ? $_POST['datedenaissance'] : NULL;
   $pserviceattache = !empty($_POST['numServ']) ? $_POST['numServ'] : NULL;

   $pSubmit = !empty($_POST['send']) ? $_POST['send'] : NULL;
  
   if($pSubmit){
   $query="INSERT INTO `employes`(`nom`,`prenom`,`sexe`,`adress`,`datedenaissance`,`numServ`) VALUES('$pnom','$pprenom','$psexe','$padresse','$pddn','$pserviceattache')";
 
   $result = mysqli_query($conn,$query);
   
} 
   ?>
  
   
</body>
</html>