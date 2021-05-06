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
	<title>HOME - Luan Castoldi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css?time=<?= time() ?>">
	<link rel="stylesheet" href="css/unsemantic-grid-responsive.css">
	<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
</head>

<body>
	<?php
	include('topBar.php');
	?>

	<div class="grid-container">

		<div class="nameAndTitle">
			<div class="title">
				<!-- <img class="title" style="visibility: visible; width: 80px; height: 80px;" src="css/imagens/icon.png"> -->
				<p>LUAN CASTOLDI</p>
			</div>

		</div>




		<div class="grid-100 divPro">
			<h1 style="margin-bottom: 20px;">My Projects</h1>

			<div class="grid-100 allPro showText ">
				<div class="grid-50 zoom ">
				<img src="imgs/loli.jpg" class="imgShow">
				</div>
				<div class="grid-50 textAll">
					<h1 class="titlePro">Loler - O clicker de Loli
					</h1>
					<h3>
						Neste jogo clicker de android você tem a tarefa de cuidar de uma Loli, fazendo ações que gerando um dinheiro no jogo que pode ser usado para comprar coisas para sua Loli e melhorar sua experiência de jogo
					</h3>
				</div>
			</div>


			<div class="grid-100 allPro showText ">
				<div class="grid-50 zoom ">
					<img src="imgs/kwai.jpg" class="imgShow">
				</div>
				<div class="grid-50 textAll">
					<h1 class="titlePro">BOOT KWAI
					</h1>
					<h3>
					Este Boot usa seu mouse para ficar pulando os vídeos no Kwai, assim ganhando pontos e transformando em dinheiro.
					</h3>
					
				</div>
			</div>

			<div class="grid-100 allPro showText ">
				<div class="grid-50 zoom ">
					<img src="imgs/pedido.jpg" class="imgShow">
				</div>
				<div class="grid-50 textAll">
					<h1 class="titlePro">APP PEDIDOS
					</h1>
					<h3>
					
					</h3>
					
				</div>
			</div>

		</div>


		<div class="grid-100 comments">
			<h1 class="resume">Comments...</h1>
			<div class="grid-50" style="margin-bottom: 50px;">
				<img src="css/imagens/logo.png" style="visibility: visible; width: 20%; height: 20%; padding: 0; margin: 0;">
				<h1>LUAN CASTOLDI / LC COMPANY</h1>
			</div>
			<div class="grid-50">
				<form name="frmList" action="insert.php" method="post">
					<input type="text" name="mensage" required="required" maxlength="50" autocomplete="disabled" placeholder="Your Comment">
					<input type="submit" value="Send">
				</form>
				<?php
				foreach ($dadosListagem as $mensagens) {
				?>
					<div class="grid-100 global-comments">
						<div>
							<p>🎲 <?= $mensagens["mensage"] ?></p>
						</div>
					</div>
				<?php
				}
				?>
			</div>


		</div>
	</div>
</body>
</div>

</html>