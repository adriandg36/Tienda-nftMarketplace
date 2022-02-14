<!DOCTYPE html>
<html>
<head>
<style>
	
body{
	background-image: url(imagenes/fondon.jpg);
	border: 4px solid black;
	margin: 0px;
	width: auto;
	height: 1470px;
}
span{
	padding-right: 600px;
	margin-right: 400px;
}
.principal{
	margin-top: 10px;
	width: auto;
	height: 1450px;
	position: absolute;
	left: 10%;
	padding-left: 10px;
	padding-bottom: 10px;
	background-color: white;
	display: inline-block;
	float:left;
}
button{
	background-color: #1E37D6;
	color: white;
	font-family: "Arial Black", "Arial Bold", sans-serif;
	padding: 4px 6px;
	border-radius: 8px;
}
h2{
	text-align: center;
	font-family: "Arial Black", "Arial Bold", sans-serif;
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
.main{
  	border: 0;
  	outline: 0;
  	background: transparent;
  	font-family: "Arial Black", "Arial Bold",  sans-serif;
  	margin-left: 40px;
  	border-spacing: 0px;
}
img{
	width: 200px;
	height: 200px;
	padding-right: 30px;
}
.carrito{
	padding.right:60px
	padding-left: 60px;
}
.main td{
	vertical-align: top;
	border-bottom: 2px solid #1E37D6;
}
p{
	display: block;
    margin-block-start: 0px;
    margin-block-end: 0px;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
.titulo{
	font-size: 150%;
}
.descripcion{
	margin-top: 8px;
	font-size: 70%;
	width: 400px;
	padding-right: 10px;
}
.carrito{
	margin-top: 20px;
	margin-bottom: 5px;
	margin-right: 40px;
	
}
.precio{
	font-size: 250%;
	text-align: right;
	margin-right: 20px;
}
.cesta{
	margin-top: 10px;
	width: auto;
	height: 1320px;
	margin-right: 70px;
	padding-top: 130px;
	padding-bottom: 10px;
	background-color: white;
	display: inline-block;
	float: left;
	position: absolute;
  	left: 69%;
  	font-family: "Arial Black", "Arial Bold",  sans-serif;
}
.titulocesta{
	font-size: 200%;
	display: block;
	text-align: center;
}
.compra{
	margin-right: 10px;
	margin-left: 20px;
	border: 1px solid #1E37D6;
	border-spacing: 0px;
	height: 400px;
}
.compra td{
	border-bottom: 1px solid #1E37D6;
	font-size: 90%;
	padding-left: 10px;
	width: 200px;
	height: 40px;
}
.comprar{
	padding: 4px 6px;
	border-radius: 0px;
	margin-left: 18px;
	margin-top: 0px;
	width: 297px;
	height: 45px;
}
</style>
</head>
<body>
<?php
session_start();
if (isset($_POST['ingresar'])){
	$_SESSION['usuario'] = $_POST['usuario'];
	$_SESSION['cant']=["nftGioconda"=>0,"nftSeñora"=>0,"nftCena"=>0,"nftDama"=>0,"nftDoctor"=>0,"nftPerro"=>0];
} 
if (isset($_SESSION['usuario']) ||  isset($_POST['usuario'])){
$_SESSION['nftGioconda']=['Producto'=> "nftGioconda",'Titulo'=>"The Gioconda crazy",'Descripcion'=>"Es un óleo sobre tabla de álamo de 77 × 53 cm, pintado entre 1503 y 1519,​ y retocado varias veces por el autor y ahora por nosotros",'Precio'=>1.48,'img'=>"mona.png"];
$_SESSION['nftSeñora']=['Producto'=> "nftSeñora",'Titulo'=>"Señora de Richard Yates",'Descripcion'=>"Retrato de la señora de Richard Yates con la cara de Rowan Atkinson interpretando su papel de Mr bean ",'Precio'=>0.95,'img'=>"mrbean.png"];
$_SESSION['nftCena']=['Producto'=> "nftCena",'Titulo'=>"La última cena",'Descripcion'=>"Edit del mural de la última cena de Leonardo da Vincci en el que el famoso chef turco Salt Bae condimenta la cena como en su famoso restaurante Nusret Gocke de Dubai",'Precio'=>0.7,'img'=>"cena.png"];
$_SESSION['nftDama']=['Producto'=> "nftDama",'Titulo'=>"La dama del armiño",'Descripcion'=>"Edit de la pintura de la dama del Armiño de Leonardo da Vinnci con el pepinillo Rick de la serie de Rick and Morty",'Precio'=>0.61,'img'=>"pepino.png"];
$_SESSION['nftDoctor']=['Producto'=> "nftDoctor",'Titulo'=>"Doctor House",'Descripcion'=>"Edit del cuadro de lección de anatomía del Dr.Nicolaes Tulp en 1632 con la cara de Hugh Laurie como el doctor House",'Precio'=>0.33,'img'=>"doctor.png"];
$_SESSION['nftPerro']=['Producto'=> "nftPerro",'Titulo'=>"El perro motociclón",'Descripcion'=>"Exclusiva imagen del perro motociclón con su típico casco",'Precio'=>0.29,'img'=>"perro.png"];
$_SESSION['productos']=[$_SESSION['nftGioconda'],$_SESSION['nftSeñora'],$_SESSION['nftCena'],$_SESSION['nftDama'],$_SESSION['nftDoctor'],$_SESSION['nftPerro']];
if (isset($_POST['agregar'])==true){
	$_SESSION['cant'][$_POST['agregar']]+=1;
	$_SESSION['total'] = 0;
	foreach ($_SESSION['cant'] as $key => $valor){ 
		if ($valor>0) {
			foreach ($_SESSION['productos'] as $key1 => $valor1){ 
				if ($valor1['Producto']==$key){
					$_SESSION['total'] = $_SESSION['total'] + ($valor1['Precio'] * $valor*4445);
				}
			}
		}
	}
	header("Location: " . $_SERVER['PHP_SELF']);
}
if (isset($_POST['quitar'])==true){
	$_SESSION['cant'][$_POST['quitar']]-=1;
	$_SESSION['total'] = 0;
	foreach ($_SESSION['cant'] as $key => $valor){ 
		if ($valor>0) {
			foreach ($_SESSION['productos'] as $key1 => $valor1){ 
				if ($valor1['Producto']==$key){
					$_SESSION['total'] = $_SESSION['total'] + ($valor1['Precio']  *$valor);
				}
			}
		}
	}
	header("Location: " . $_SERVER['PHP_SELF']);
}
?>
<div class="principal">
<span>
<img class="logo" src="imagenes/logo.png">
<label><h2>¡¡¡<?php echo strtoupper($_SESSION['usuario']);?>, los siguientes nfts están esperándote!!!</h2></label>
</span>
<table class="main">
<form id="form1" action = "" method="post">
<?php 
foreach ($_SESSION['productos'] as $key1 => $valor1){  ?>
	<tr>
		<td><img src="imagenes/<?php echo $valor1['img']; ?>"></td>
		<td>
		<p class="titulo"><b><?php echo $valor1['Titulo']; ?></b></p>
		<p class="descripcion"><b><?php echo $valor1['Descripcion']; ?></b></p>
		</td>
		<td>
		<p class="precio"><b><?php echo $valor1['Precio']." ⧫ ETH"; ?></b></p>
		<br>
		<br>
		<br>
		<br>
		<button class="carrito" type="submit" name="agregar" value=<?php echo $valor1['Producto']; ?>>Añadir al carrito</button>
		</td>
	</tr>
<?php } ?>
</form>
</table>
<br>
</div>
<?php
$cont = false;
foreach ($_SESSION['cant'] as $key => $valor){
	if ($valor>0){
		$cont = true;
	}
}
if ($cont == true) {  ?>


<div class="cesta">
<img class="carrito" src="imagenes/carro.jpg">
<label class="titulocesta">Cesta</label>
<table class="compra">
<form id="form2" action = "" method="post">
<?php
foreach ($_SESSION['cant'] as $key => $valor){ 
	if ($valor>0) {
		?><tr>
			<td>
				<?php foreach ($_SESSION['productos'] as $key1 => $valor1){ 
						if ($valor1['Producto']==$key){
							echo $valor; ?><label style="color: #1E37D6"> | </label><?php echo $valor1['Titulo']; 
							break;
						}
					} ?>
			</td>
			<td style="text-align: right; width: auto; padding-right: 10px;">
				<button type="submit" name="quitar" value=<?php echo $key; ?>>Quitar</button>
			</td>
		</tr>
		<?php
	}
} ?>
<tr>
</tr>
</form>
</table>
<button class="comprar" type="button" name="comprar" value="comprar" onclick="location.href='confirmacion.php';">Comprar (<?php echo $_SESSION['total']; ?>€)</button>
</div>
<?php } 
} ?>
</body>
</html>