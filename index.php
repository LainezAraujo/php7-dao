<?php 

/*require_once("config.php");
//TODOS USUARIOS
$sql = new Sql();
$usuario = $sql-> select("SELECT * FROM tb_usuario");
echo json_encode($usuario);
*/


//carrega UM usuário
/*$root = new Usuario();
//$root->loadbyId(1);
echo $root;*/

//Carrega uma LISTA DE USUARIOS ESPECÍFICOS
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
/*$search =Usuario::search("r");
echo json_encode($search);*/

//CARREGA USUARIO LOGIN E SENHA
/*$usuario = new Usuario();
$usuario->login("root","123456");
echo $usuario;*/

//INSERT 
/*$aluno = new Usuario("aluno","@345");
$aluno-> insert();
echo $aluno;*/

//UPDATE
/*$usuario = new Usuario();
$usuario->loadbyId(4);
$usuario->update("professor","9080");
echo $usuario;*/

//DELETE

$usuario = new Usuario();
$usuario ->loadbyId(1);
$usuario->delete();
echo $usuario;


 ?>