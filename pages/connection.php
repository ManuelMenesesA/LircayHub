
    <?php 
    $conn = mysqli_connect("localhost","root","","lircayhub");


    if($conn->connect_errno){
        die("La conexion ha fallado" . $conn->connect_errno);
    }
    else{
        echo(":)");
    }
?>



