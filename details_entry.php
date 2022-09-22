<?php
$server_name="localhost";
$user_name="root";
$password="";
$database_name="consesionario";

//crear conexion
$conn = new mysqli ($server_name,$user_name,$password,$database_name);

if (!$conn)
{
		die("conecion fallida:" .mysqli_connect_error());
}

if(isset($_POST['save']))
{
	$placa_name=$_POST['placa_name'];
	$marca_name=$_POST['marca_name'];
	$modelo_name=$_POST['modelo_name'];
	$color_name=$_POST['color_name'];
	$estado_gender=$_POST['estado_gender'];
	
	
	$sql_query = "INSERT INTO entry_details (placa_name, marca_name, modelo_name, color_name, estado_gender)
	VALUES ('$placa_name','$marca_name','$modelo_name','$color_name', '$estado_gender')";
	
	if (mysql_query($conn, $sql_query))
	{	
		echo "Datos insertados con exito";
	}
	else
	{
		echo"error insertados Datos ".$sql . "" . mysql_error($conn);
	}
	mysql_close($conn)
}
?>