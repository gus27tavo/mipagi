</html>
<?php
$servidor = "bd9zkj4sv8fvm6h3a68f-mysql.services.clever-cloud.com";
$user = "ubsqtbfkff3vckgz";
$password = "uH0nl0lEGMeCFoAVJYMW";
$bd = "bd9zkj4sv8fvm6h3a68f";


$conn = new mysqli($servidor,$user,$password,$bd);
if ($conn->connect_error){
die("Conexion fallida".$conn->connect_error);
}
echo "Conexion exitosa";

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellido'];
$fecha = $_POST['fecha'];
$direccion = $_POST['direccion'];
$colonia = $_POST['colonia'];
$codigo = $_POST['codigo'];
$telefono = $_POST['tel'];
$sql = "INSERT INTO prueba (nombres, apellidos, fecha, direccion, colonia, codigo, telefono) VALUES ('$nombres','$apellidos','$fecha','$direccion','$colonia','$codigo','$telefono')";
if($conn->query($sql) ===TRUE){
    echo "Datos almacenados correctamente";
}else{
    echo "Error:".$sql."<br>".$conn->error;
}
    $conn->close();



?>
