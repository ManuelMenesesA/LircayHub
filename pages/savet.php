<?php

include('connection.php');
date_default_timezone_set('America/Santiago');
$fecha=date("y-m-d h:i:s");
if (isset($_POST['send'])) {


  $titulo_t= $_POST['titulo_t'];
  $descripcion_t = $_POST['descripcion_t'];
  $query = "INSERT INTO temas_nuevos(titulo_t, descripcion_t, fecha) VALUES ('$titulo_t', '$descripcion_t','$fecha')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: temas.php');

}

?>