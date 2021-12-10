<?php

include('connection.php');
date_default_timezone_set('America/Santiago');
$fecha_actual=date("y-m-d h:i:s");
if (isset($_POST['enviar'])) {


  $tema = $_POST['tema'];
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $contenido = $_POST['contenido'];
  $query = "INSERT INTO informacion(tema, titulo, descripcion, contenido,fecha) VALUES ('$tema','$titulo', '$descripcion', '$contenido','$fecha_actual')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: form.php');

}

?>