<?php 

$server = '10.99.1.77';
$database = 'APLICACIONES';
$user = 'usr_ausentismos';
$pass = '4Au$s3Ent1I$mo0oS';

// $server = 'DEVELOPMENT\SQLEXPRESS';
// $database = 'APLICACIONES';
// $user = 'sa';
// $pass = 'Alejandra123alejandra';



$connectionInfo = array("Database"=>$database, "UID"=>$user, "PWD"=>$pass);

// Connect to MSSQL
$conexion = sqlsrv_connect($server, $connectionInfo);

if($conexion) {
  // echo "Connection established.<br />";
}else{
  echo '<div class = "card mx-5 mt-5"><div class="card-body"><h2>Algo salio mal con la conexion</h2><br><h4>Antes de continuar por favor  revise sus conexiones de red y/o credenciales de conexion a la base de datos de la aplicacion.</h4><br/>';
  
  echo 'Descripcion del error: <br>';
  die( print_r( sqlsrv_errors(), true));
  echo '</div></div>';
}

?>