<?php
session_start();

//Conexão com o banco
$PDO = new PDO("sqlite:data.db");

$sqlListar = $PDO->prepare("SELECT mensage FROM dados ORDER BY id DESC  LIMIT 5 ");
$sqlListar->execute();
$dadosListagem = $sqlListar->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Inicial - Luan Castoldi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css?time=<?= time() ?>">
	<link rel="stylesheet" href="css/unsemantic-grid-responsive.css">
	<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
</head>

<body>
	<?php
	include('topBar.php');
	?>

	<div class="title">
		Welcome 🎉
	</div>

	<div class="resume">
		My site in English.. It's in progress
	</div>

	<div class="grid-100" style="margin-top: 40px;">Recent Comments
		<?php
		foreach ($dadosListagem as $mensagens) {
		?>

		<div class="grid-100 global-comments" >
			<div>
			<p>👨‍💻<?=$mensagens["mensage"] ?></p>
			</div>
			</div>
		<?php
		}
		?>
	</div>

		<form name="frmList" action="insert.php" method="post">
			<input type="text" name="mensage" required="required" maxlength="50" autocomplete="disabled" placeholder="Your Comment">
			<input type="submit"  value="Send">
		</form>
		<!-- <a style="color: whitesmoke; font-size: 20px;" href="zap.php">Do you have some suggestions or improvements ? </a> -->

	</div>
</body>
</div>

</html>