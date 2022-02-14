<!DOCTYPE html>
<html>
<head>ç
<link rel="shortcut icon" href="imagenes/icon.png">

<style>
	
h2{
	text-align: center;
	
	color: #1E37D6;
	font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
	font-size: 26px;
}
.nombre{
	
	font-size: 15px;
	font-family: "Arial Black", "Arial Bold", sans-serif;
	margin-right: 4px;
	color: #1E37D6;
}
input {
  border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 2px solid #1C42FF;
  color: #1E37D6;
  font-family: "Arial Black", "Arial Bold",  sans-serif;
 
}
button{
	background-color: #1E37D6;
	color: black;
	font-family: "Arial Black", "Arial Bold",  sans-serif;
	padding: 4px 6px;
	border-radius: 8px;

}
.botonEnviar{

width:100%;
background: grey;
border: none;
border-radius: 3.5px;
padding: 12px;
color: black;
margin: 16px 0;
font-size: 16px;
}
form{
	border: 4px solid #1C42FF;
	position: absolute;
	left: 28%;
	top: 25%;
	width: 700px;
	height: 130px;
	padding-left: 9px;
	background-color:rgb(189,189,189);
}
.logo{
	display: block;
  	margin-left: auto;
  	margin-right: auto;
  	padding-top: 5px;
	height: 70px;
	width: auto;
	align-content: center;
}
.divnombre{
	display: block;
	align-content: center;
	margin-left: 145px;
  	margin-right: auto;
	  
}
body{
	
	background-image: url(imagenes/fondon.jpg);
}

	

</style>
</head>
<body>
<form action = "productos.php" method="post">
<label ><img class="logo" src="imagenes/logopng.png"><h2>¡Bienvenido a Yoli´s shop!</h2></label>
	<div class="divnombre">
	<label class="nombre"><b>Ingresa tu nombre:</b></label><input type="text" name="usuario" value="">
	<button  type="submit" name="ingresar" value="Ingresar">Entrar</button>
	<div>
</form>
</body>
</html>