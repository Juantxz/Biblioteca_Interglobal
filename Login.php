<?php
include("base.php");
include("imprimir.php");
$myusername = mysqli_real_escape_string($db, $_POST['usuario']);
     $mypassword = mysqli_real_escape_string($db, $_POST['pass']);

     $sql = "SELECT usuario FROM personal WHERE usuario = '$myusername' and password = '$mypassword'";

     $result = mysqli_query($db, $sql);
     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

     $count = mysqli_num_rows($result);
echo($myusername);
echo($mypassword);

     if ($count == 1) {

         header("location: Principal.html");
         echo"jajajaja";
     }
     else{
           header("Location: Login.html");
     }
     ?>
