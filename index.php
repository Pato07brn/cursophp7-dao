<?php 

	require_once("config.php");


	# Executa um comando
	//$sql = new Sql();
	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	//echo json_encode($usuarios);

	# Carrega um usuario
	//$root = new User();
	//$root->loadById(2);
	//echo $root;

	# Cadastra um valor no BD ------ eu que fiz
	//$cadastro = new User();
	//$cadastro->InserirValor("Bruno", "123456");
	
	#carrega uma lista de usuarios
	//$lista = User::getList();
	//echo json_encode($lista);

	
	#Faz uma busca no BD com base na coluna deslogin
	//$busca = User::Search("o");
	//echo json_encode($busca);

	#valida login e senha
	$valida = new User();
	$valida->Login("Bruno", "123456");

	echo $valida;

 ?>