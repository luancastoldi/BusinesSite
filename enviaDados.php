<?php


session_start();
$PDO = new PDO("sqlite:data.db");  //Diretório

	
	// Dados do formulário
    $title = $_POST["title"];
    $content = $_POST["content"];
    $buy = $_POST["buy"];
    // $photo = $_POST["photo"];

    
    // var_dump($title);
    // var_dump($content);
    // var_dump($photo);
    // var_dump($buy);


    // Insert
	$sql = $PDO->prepare("INSERT INTO itens (title, content, buy) VALUES (?, ?, ?)");
	$exec = $sql->execute(array($title, $content, $buy));
	
	if ($exec)
	{
	   $mensagem = urldecode("Enviado!");
		header("Location:home.php?msg=$mensagem");
	
	}
	else{
		$mensagem = urldecode("Erro !");
		header("Location:home.php?msg=$mensagem");
		
	}
