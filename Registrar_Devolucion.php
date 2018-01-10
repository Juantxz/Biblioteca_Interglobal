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
      $tit1=$_POST['titulo2'];

      if (isset($_POST['titulo2']) && !empty($_POST["titulo2"])) {

        $sql2 = "SELECT * FROM material WHERE id_Materiales = '$tit1'";
        $result2 = mysqli_query($db, $sql2);
        $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
        $count2 = mysqli_num_rows($result2);


        if($count2 ==1){
echo("Se devolvió el libro");

      $query = "DELETE  from prestamo where id_libro= '$tit1'";
          mysqli_query($db, $query);
      $query2 = "UPDATE material SET Cont=1 WHERE id_Materiales='$tit1'";
      mysqli_query($db, $query2);

}
else{echo("No existe el libro");}
}





          ?>
        </body>

       </html>
