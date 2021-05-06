<?php
session_start();

//Conexão com o banco
$PDO = new PDO("sqlite:data.db");

$sqlListar = $PDO->prepare("SELECT mensage FROM dados ORDER BY id DESC  LIMIT 5 ");
$sqlListar->execute();
$dadosListagem = $sqlListar->fetchAll();



$sqlItens = $PDO->prepare("SELECT * FROM itens");
$sqlItens->execute();
$itensListagem = $sqlItens->fetchAll();

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

            <?php
            foreach ($itensListagem as $itens) {
				?>
			<div class="grid-100 allPro">
				<div class="grid-50 zoom">
					<img src="imgs/<?=$itens["id"]?>.jpg" class="imgShow">
				</div>
				<div class="grid-50 textAll">
					<h1 class="titlePro"><?=$itens["title"]?></h1>
					<h3>
                    <?=$itens["content"]?>
					</h3>
					<h3 style=" text-align: right;"><a href="<?=$itens["buy"]?>" class="buy"><img src="css/imagens/carrinho.png"	class="carrinho"></a></h3>
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