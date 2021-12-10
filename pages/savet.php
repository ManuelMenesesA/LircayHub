<?php

include('connection.php');
date_default_timezone_set('America/Santiago');
$fecha=date("y-m-d h:i:s");
if (isset($_POST['send'])) {


  $tema_new = $_POST['titulo_t'];
  $descripcion_t = $_POST['descripcion_t'];
  $me_gusta = $_POST['me_gusta'];
  $no_megusta = $_POST['no_megusta'];
  $query = "INSERT INTO informacion(nombre_tema, descripcion_t, fecha, me_gusta,no_megusta) VALUES ('$titulo_t', '$descripcion_t','$fecha', '$me_gusta','$no_megusta')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: temas.php');

}

?>