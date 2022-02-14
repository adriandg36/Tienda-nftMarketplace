<!DOCTYPE html>
<html>
<head>
<style>
	
body{
	
	
	margin-top:250px;
	padding-right: 500px;
	padding-left: 500px;
	background-image: url(imagenes/fondon.jpg);
	align-content: center;
	
	padding-top:0px;
		
}
.logo{
	display: block;
  	margin-left: auto;
  	margin-right: auto;
  	padding-top: 5px;
	height: 60px;
	width: auto;
	align-content: center;
}
.divconfirmacion{
	
	border: 4px solid #1C42FF;
 text-align:center;
	background-color:rgb(189,189,189);
  

}
h1{

	
	font-family: "Arial Black", "Arial Bold",  sans-serif;
	
}
a{
	border: black 3.2px solid;
	text-decoration: none;
	color: black;
}
</style>
</head>
<body>
<?php
session_start();
?>
<div class="divconfirmacion">
<img class="logo" src="imagenes/logopng.png">

<label><h1>Felicidades <?php echo $_SESSION['usuario'];?></h1></label>
<label><h3>Usted acaba de adquirir</h3></label>
<?php
foreach ($_SESSION['cant'] as $key => $valor){
	if ($valor>0) {
		echo $valor." ".$key."<br>";
	}
} ?>
<label><h3>Gracias por su compra</h3></label>
<a class="botonfin" href="formulario.php">Terminar</a>
</div>
</body>
</html>