<?php

require_once '../models/UsuarioCrud.php';

if (isset($_GET['acao'])){
	$acao = $_GET['acao'];
}else{
	$acao = 'index';
}
$crud = new UsuarioCrud();


if ($acao == 'index'){
	//exibe a pagina principal de usuario, listando todos
	echo 'index';
}elseif($acao == 'inserir'){
	//exibe a pagina de insercao
	include '../views/usuarios/indexlog.html';
}elseif($acao == 'gravaInserir'){
//move o arquivo para uma pasta
	move_uploaded_file($_FILES['foto']['tmp_name'], '/home/aluno/public_html/exemplo/assets/imagens/'.$_FILES['foto']['name']);
//cria o objeto do usuario
	$usuario = new Usuario(null ,$_POST['nome']   , '/home/aluno/public_html/exemplo/assets/imagens/'.$_FILES['foto']['name']);
//cria o crud e depois insere o objeto criado no BD
	$crud = new UsuarioCrud();
	$crud->insertUsuario($usuario);
}elseif ($acao == 'login') {

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $us = $crud->login($login, $senha);

    if ($us) {
        echo 'Deu certo ' . $us->getNome();

    } else {
        echo 'Dados invalidos';

    }
}elseif ($acao = 'cadastrar'){

        echo '<pre>';
        var_dump($_POST);

        $insert = new UsuarioCrud();
        $user = new Usuario();
        $user->setCodUsuario(3);
        $user->setCodCidade(0);
        $user->setPreferencias(null);
        $user->setTelefone(0);
        $user->setGenero(null);
        $user->setCodTipuser(0);
        $user->setNome($_POST['nome']);
        $user->setSobrenome($_POST['sobrenome']);
        //$user->setEstado = $_POST['estado'];          CRIAR O ATRIBUTO ESTADO NA CLASSE USUARIO
        $user->setCidadeOrigem($_POST['cidade']);
        $user->getDtNasc($_POST['bday']);
        $user->setEmail($_POST['email']);
        $user->setSenha($_POST['senha']);

        $cadastro = $insert->insertUsuario($user);

    }
