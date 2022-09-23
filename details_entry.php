<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="consesionario";

//crear coneccion
$conn=mysqli_connect($server_name,$username,$password,$database_name);

if (!$conn)
{
		die("coneccion fallida:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
	$placa_name = $_POST['placa_name'];
	$marca_name = $_POST['marca_name'];
	$modelo_name = $_POST['modelo_name'];
	$color_name = $_POST['color_name'];
	$estado_gender = $_POST['estado_gender'];
	
	
	$sql_query = "INSERT INTO entry_details (placa_name, marca_name, modelo_name, color_name, estado_gender)
	VALUES ('$placa_name','$marca_name','$modelo_name','$color_name', '$estado_gender')";
	
	if (mysqli_query($conn, $sql_query))
	{	
		echo "Datos insertados con exito";
	}
	else
	{
		echo "Error: ". $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>