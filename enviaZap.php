<?php
    session_start();
    $PDO = new PDO("sqlite:secret.db");

    //Dados para inserir
    $mensage = $_POST["mensage"];

    //Insert
    $enviar = $PDO->prepare("INSERT INTO dados (mensage) VALUES (?)");
    $exec = $enviar->execute(array($mensage));
    
    if ($exec)
	{
	   $mensagem = urldecode("Ok !");
		header("Location:zap.php?msg=$mensagem");
	
	}
	else{
		$mensagem = urldecode("Erro");
		header("Location:zap.php?msg=$mensagem");
		
	}
?>