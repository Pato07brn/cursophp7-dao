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
	//$valida = new User();
	//$valida->Login("Bruno", "123456");

	#cadastra pelo professor
	//$cadastro = new User("Rasiel", "474846");
	//$cadastro->Insert();
	//echo $cadastro;

	#atualiza
	//$atualiza = new User();
	//$atualiza->loadById(4);
	//$atualiza->Update("Rasiel", "160.568.3");
	//echo $atualiza;

	#deleta
	$apaga = new User();
	$apaga->loadById(2);
	$apaga->Deleta();

	echo $apaga;


 ?>