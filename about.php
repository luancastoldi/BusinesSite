<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css?time=<?=time()?>">
	<link rel="stylesheet" href="css/unsemantic-grid-responsive.css">
	<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me</title>
</head>
<body>
        <?php 
			include('topBar.php');
		?>

    <div class="grid-100">
        <div class="title">
        About me
        </div>

        <div class="grid-100 image-about">
        <img  style="visibility: visible;" src="css/imagens/eu.png" >      
        </div>

        <div class="grid-100" >
      <h2 style="color: white; text-align: center;">  My name is Luan Castoldi, i have 21 years old. I am new in the programming. But i am learning
        JavaScript, React Native, HTML, CSS, PHP and AutoHotkey</h2>
        </div>

		<div class="grid-100 grid1">
			<img class="imagemHome" src="css/imagens/js.png">
			<img class="imagemHome" src="css/imagens/html.png">
			<img class="imagemHome" src="css/imagens/css.png">
			<img class="imagemHome" src="css/imagens/rn.png">
	</div>

</body>
</html>