<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/update1.css">

    <meta charset="UTF-8">
   
     
      
 
</head>
<body>
  
<?php





  $host               = "localhost:3307";
            $user               = "nada";
            $password      = "";
            $dbName       = "grh";
            $conn = mysqli_connect($host, $user, $password,$dbName);


            $code = !empty($_GET['code']) ? $_GET['code'] : NULL;
$query="SELECT * FROM `employes` where code='$code'";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);





  ?>
<table align="center" border="1">

<form action="editEmpl.php" method="post">

  <p><tr><td>code      : <br><input type="int(11)" name="code" value="<?php echo $row['code'] ; ?>"></td></tr></p>
  <p><tr><td>nom     : <br><input type="varchar(100)" name="nom" value="<?php echo $row['nom'] ; ?>"></td></tr></p>
  <p><tr><td>prenom     : <br><input type="varchar(100)" name="prenom" value="<?php echo $row['prenom'] ; ?>"></td></tr></p>
  <p><tr><td>sexe      <br>M<input type="radio" name="sexe" value='M' ></p>
  F <input type="radio" name="sexe" value='F'></td></tr>
  <p><tr><td>adresse     : <br><input type="text" name="adress" value="<?php echo $row['adress'] ; ?>"></td></tr></p>
  <p><tr><td>ddn     : <br><input type="date" name="datedenaissance" value="<?php echo $row['datedenaissance'] ; ?>"></td></tr></p>
  <p><tr><td>serviceattache    : <br><input type="int(11)" name="numServ" value="<?php echo $row['numServ'] ; ?>"></td></tr></p>
  
   <p><tr><td> <input type="submit" name="send" value="modifier"></td></tr></p>

   <?php 
            $host               = "localhost:3307";
            $user               = "nada";
            $password      = "";
            $dbName       = "grh";
            $conn = mysqli_connect($host, $user, $password,$dbName);
$code = !empty($_POST['code']) ? $_POST['code'] : NULL;

 
   $nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
   $prenom = !empty($_POST['prenom']) ? $_POST['prenom'] : NULL;
   $sexe = !empty($_POST['sexe']) ? $_POST['sexe'] : NULL;
   $adress = !empty($_POST['adress']) ? $_POST['adress'] : NULL;
   $datedenaissance = !empty($_POST['datedenaissance']) ? $_POST['datedenaissance'] : NULL;
   $numServ = !empty($_POST['numServ']) ? $_POST['numServ'] : NULL;
   
   $pSubmit = !empty($_POST['send']) ? $_POST['send'] : NULL;

 if($pSubmit){
$code = !empty($_POST['code']) ? $_POST['code'] : NULL;
$query="UPDATE `employes` SET `code`='$code',`nom`='$nom',`prenom`='$prenom',`sexe`='$sexe',`adress`='$adress',`datedenaissance`='$datedenaissance',`numServ`='$numServ' where code = '$code'";
$result = mysqli_query($conn,$query);
header("Location:allEmpls.php");
}
?>
</form>
</table>
</body>
</html>