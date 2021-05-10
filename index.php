<?php

require_once("config.php");

//Carrega 1 usuário
//$root = new Usuario();
//$root->loadById(1);
//echo $root;


//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("Jo");
//echo json_encode($search);


//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root","!@#$%");
//echo $usuario;



//Criando um novo usuário
//$aluno = new Usuario();

//$aluno->setDeslogin("aluno");
//$aluno->Setdessenha("@alun0");
//$aluno->insert();

//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor","!@#$%¨&*");

echo $usuario;

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/


?>