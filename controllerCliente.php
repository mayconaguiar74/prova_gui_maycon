<?php
	include_once("ConexaoCliente.php");
	$objetoNoticia = new cliente();
	if(filter_input(INPUT_POST, "nome") &&
	   filter_input(INPUT_POST, "telefone") &&
		filter_input(INPUT_POST, "celular") &&
		filter_input(INPUT_POST, "email") &&
		filter_input(INPUT_POST, "endereco")&&
		filter_input(INPUT_POST, "numero")&&
		filter_input(INPUT_POST, "complemento")&&
		filter_input(INPUT_POST, "bairro")&&
		filter_input(INPUT_POST, "cidade")&&
		filter_input(INPUT_POST, "cep")
	) {
		$nome = filter_input(INPUT_POST, "nome");
		$telefone = filter_input(INPUT_POST, "telefone");
		$celular = filter_input(INPUT_POST, "celular");
		$email = filter_input(INPUT_POST, "email");
		$endereco = filter_input(INPUT_POST, "endereco");
		$numero = filter_input(INPUT_POST, "numero");
		$complemento = filter_input(INPUT_POST, "complemento");
		$bairro = filter_input(INPUT_POST, "bairro");
		$cidade = filter_input(INPUT_POST, "cidade");
		$cep = filter_input(INPUT_POST, "cep");		
		$dados=array($nome, $telefone, $celular, $email, $endereco, $numero, $complemento, $bairro, $cidade, $cep);
		$objetoNoticia->cadastrar($dados);
	}else {
		echo "Os campos não foram preenchidos!!!";	
	}
?>