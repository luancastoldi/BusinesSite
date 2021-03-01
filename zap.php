<?php
session_start();

//Conexão com o banco
$PDO = new PDO("sqlite:secret.db");

$sqlListar = $PDO->prepare("SELECT mensage FROM dados ORDER BY id desc LIMIT 20 ");
$sqlListar->execute();
$dadosListagem = $sqlListar->fetchAll();
?>

<!DOCTYPE html>
<html style="height:100%">

<head>
	<title>Inicial - Luan Castoldi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css?time=<?= time() ?>">
	<link rel="stylesheet" href="css/unsemantic-grid-responsive.css">
	<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
</head>
<style>
    input[type=submit]{
  background-color: rgb(0, 67, 251);
  border: none;
  color: white;
  text-decoration: none;
  cursor: pointer;
  font-size: 25px;
  border-radius: 7px;
  padding: 0;
  width: 100%;
  
}
input[type=text]{
	font-size: 23px;
	border: none;
	color: black;
	text-align: center;
	padding: 0;
	width: 100%;
	height: 100%;
} 
.user-comments{
	margin-top: 10px;
	color: black;
	font-size: 25px;
	padding: 0;
	background-color: white;
	border-radius: 10px;
}
header{
    position: fixed;
    top:0;
    left: 0;
}
</style>

<body style="background-color: #eee;">
<div> 

<div class="grid-100">
		<form name="frmList" action="enviaZap.php" method="post">
			<input type="text" name="mensage" autofocus="enabled" required="required" maxlength="25" autocomplete="off" placeholder="Digite aqui...">
			<input type="submit"  value="+">
		</form>
	</div>

	<div class="grid-100" style="padding: 0;">
		<?php
		foreach ($dadosListagem as $mensagens) {
		?>

		<div class="grid-100 ">
			<div>
			<p class="user-comments">👨‍💻<?=$mensagens["mensage"] ?></p>
			</div>
			</div>
		<?php
		}
		?>
	</div>   
</div>
</body>
</div>
</html>

