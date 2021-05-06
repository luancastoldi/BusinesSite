<?php
session_start();
$PDO = new PDO("sqlite:data.db");  //Diretório
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
</head>

<body>
    <form name="frmEnviaDados" action="enviaDados.php" method="POST">
        <div class="grid-container" style="text-align: center;">
            <h1>ADD ITEM</h1>
            <div class="grid-100">
                <input type="text" placeholder="Titulo" name="title" required="required">
                <p></p>
                <textarea name="content" placeholder="conteudo" ></textarea>
                <p></p>
                <input type="text" placeholder="Link Compra" name="buy" required="required">
                <p></p>
                <!-- <input name="photo" type="file" accept=".jpg, .jpeg"> -->
                <p></p>
                <input type="submit" value="ENVIAR">
            </div>

    </form>
    </div>
</body>

</html>