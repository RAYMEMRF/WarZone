
<?php
$host="sql211.260mb.net";
$database="n260m_16389542_mibase";
$usuario="n260m_16389542";
$pass="y5z0bg4m";
$nombre=$_POST['email'];
$password=$_POST['pass'];
$tabla="tabla1";

$conexion=mysql_connect($host,$usuario,$pass) or die ("no se pudo conestar");
$db=mysql_select_db($database,$conexion);



$consulta="INSERT INTO $tabla (email,pass) VALUES ('$nombre','$password')";

$resultado=mysql_query($consulta,$conexion);
if (!$resultado) {
    echo "algo esta mal";
	# code...
}


//user: n260m_16389542
//pass: qvsj6058






?>