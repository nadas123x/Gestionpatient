
   <?php 
            $host               = "localhost:3307";
            $user               = "nada";
            $password      = "";
            $dbName       = "grh";

$conn = mysqli_connect($host, $user, $password,$dbName);

if(!empty($_GET['code']) ? $_GET['code'] : NULL){
$code = !empty($_GET['code']) ? $_GET['code'] : NULL;
$query="DELETE from `employes` where code ='$code'";
$result = mysqli_query($conn,$query);
header("Location:allEmpls.php");
}
   ?>