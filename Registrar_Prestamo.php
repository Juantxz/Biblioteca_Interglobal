
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="principal.css">

    <title></title>
</head>

<body>
    <script src="jquery-3.2.1.js" charset="utf-8"></script>
    <script type="text/javascript">    </script>
    <?php
    include("base.php");
      include("imprimir.php");

$user=$_POST['user'];
$tit1=$_POST['titulo2'];
$tit2=$_POST['titulob'];
$tit3=$_POST['titulod'];


$rows=array();


     $sql = "SELECT * FROM usuario WHERE id_Usuario = '$user'";
     $result = mysqli_query($db, $sql);
     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
     $count = mysqli_num_rows($result);

     $sqlp = "SELECT * from prestamo where Boleta_alumn='$user'";
     $resultp = mysqli_query($db, $sqlp);
     $rowp = mysqli_fetch_array($resultp, MYSQLI_ASSOC);
     $countp = mysqli_num_rows($resultp);
if($countp != 3 ) {

/*checa si el usuario está en la BD*/     if ($count == 1 ) {

/*------------------PRESTAMO DEL LIBRO 1-------------------*/
       if (isset($_POST['titulo2']) && !empty($_POST["titulo2"])) {

         $sql2 = "SELECT * FROM material WHERE id_Materiales = '$tit1'";
         $result2 = mysqli_query($db, $sql2);
         $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
         $count2 = mysqli_num_rows($result2);

        /*checa si el libro está en la BD*/        if($count2 == 1)
               {
                $sql22="SELECT * FROM material WHERE id_Materiales = '$tit1' && Cont = 1";
                $result22 = mysqli_query($db, $sql22);
                $row22 = mysqli_fetch_array($result22, MYSQLI_ASSOC);
                $count22 = mysqli_num_rows($result22);
            /*checa si el libro está prestado*/     if($count22 ==1 )
                {
                  $queryL1 = "INSERT INTO prestamo VALUES(1,'$user', '$tit1',20170512,20170518,9.5)";
                      mysqli_query($db, $queryL1);
                  $query2= "UPDATE material SET Cont = 0 WHERE id_Materiales='$tit1'";
                      mysqli_query($db, $query2);


                }
 else{echo("\nLIbro prestado 1\n");}
               }
       else{echo("Error en el libro 1\n");}
       }
/*------------------PRESTAMO DEL LIBRO 1-------------------*/


/*------------------PRESTAMO DEL LIBRO 2-------------------*/
       if (isset($_POST['titulob']) && !empty($_POST["titulob"])) {

         $sql2 = "SELECT * FROM material WHERE id_Materiales = '$tit2'";
         $result2 = mysqli_query($db, $sql2);
         $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
         $count2 = mysqli_num_rows($result2);

        /*checa si el libro está en la BD*/        if($count2 == 1)
               {
                $sql22="SELECT * FROM material WHERE id_Materiales = '$tit2' && Cont = 1";
                $result22 = mysqli_query($db, $sql22);
                $row22 = mysqli_fetch_array($result22, MYSQLI_ASSOC);
                $count22 = mysqli_num_rows($result22);
            /*checa si el libro está prestado*/     if($count22 ==1 )
                {
                  $query = "INSERT INTO prestamo VALUES(2,'$user', '$tit2',20170512,20170518,9.5)";
                      mysqli_query($db, $query);
                  $query2= "UPDATE material SET Cont = 0 WHERE id_Materiales='$tit2'";
                      mysqli_query($db, $query2);
                }
 else{echo("\nLIbro prestado 2\n");}
               }
       else{echo("Error en el libro 2\n");}
       }
/*------------------PRESTAMO DEL LIBRO 2-------------------*/

/*------------------PRESTAMO DEL LIBRO 3-------------------*/
       if (isset($_POST['titulod']) && !empty($_POST["titulod"])) {

         $sql2 = "SELECT * FROM material WHERE id_Materiales = '$tit3'";
         $result2 = mysqli_query($db, $sql2);
         $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
         $count2 = mysqli_num_rows($result2);

        /*checa si el libro está en la BD*/        if($count2 == 1)
               {
                $sql22="SELECT * FROM material WHERE id_Materiales = '$tit3' && Cont = 1";
                $result22 = mysqli_query($db, $sql22);
                $row22 = mysqli_fetch_array($result22, MYSQLI_ASSOC);
                $count22 = mysqli_num_rows($result22);
            /*checa si el libro está prestado*/     if($count22 ==1 )
                {
                  $query = "INSERT INTO prestamo VALUES(3,'$user', '$tit3',20170512,20170518,9.5)";
                      mysqli_query($db, $query);
                  $query2= "UPDATE material SET Cont = 0 WHERE id_Materiales='$tit3'";
                      mysqli_query($db, $query2);
                }
 else{echo("\nLIbro prestado 3\n");}
               }
       else{echo("Error en el libro 3\n");}
       }
/*------------------PRESTAMO DEL LIBRO 3-------------------*/

/*------------------IMPRIME LOS PRESTAMOS-------------------*/
$rows=array();
$query3 = "SELECT * from prestamo where Boleta_alumn='$user'";
$resultado3 = mysqli_query($db, $query3);
while ($row = mysqli_fetch_array($resultado3, MYSQLI_ASSOC)) {
    $rows[]=$row;
}

myprint_r($rows);
/*------------------IMPRIME LOS PRESTAMOS-------------------*/
     }
     else{
          echo("ERROR EN EL USUARIO");
     }
}
else{echo("Ya tiene 3 libros prestados");}

     ?>
   </body>

  </html>
