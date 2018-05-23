<?php
  require_once 'Usuario.php';
  require_once 'DBConnection.php';

class UsuarioCrud{

    private $conexao;

    public function __construct()
    {
        $con = new DBConnection();
        $this->conexao = $con->getConexao();
    }

	public function getUsuarios(){
		//retorna todos os usuarios
		$bd = new DBConnection();
		$conexao = $bd->getConexao();

		$sql = "select * from Usuario";
		$resultado = $conexao->query($sql);  //executa a consulta criada

		$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
		$listaUsuarios = [];
		foreach ($usuarios as $usuario) {
		    $listaUsuarios[] = new Usuario($usuario['cod_usuario'], $usuario['cod_cidade'], $usuario['cidade_origem'], $usuario['nome'], $usuario['sobrenome'], $usuario['dt_nasc'], $usuario['email'], $usuario['senha'], $usuario['preferencias'], $usuario['telefone'], $usuario['genero'], $usuario['cod_tipuser']);
        }
        return $listaUsuarios;
		}


	public function getUsuario($id){
		//retorna um usuario, de acordo com o $id

        $bd = new DBConnection();
        $conexao = $bd->getConexao();

        $sql = "select * from Usuario where cod_usuario=".$id;

        $resultado = $conexao->query($sql);  //executa a consulta criada

        $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
        $objusu = new Usuario($usuario['cod_usuario'], $usuario['cod_cidade'], $usuario['cidade_origem'], $usuario['nome'], $usuario['sobrenome'], $usuario['dt_nasc'], $usuario['email'], $usuario['senha'], $usuario['preferencias'], $usuario['telefone'], $usuario['genero'], $usuario['cod_tipuser']);
        return $objusu;
	}

	public function insertUsuario(Usuario $usuario){
		//recebe um Usuario e insere no BD



        $sql = "INSERT INTO Usuario ( nome, sobrenome, dt_nasc, email, senha, preferencias, telefone, genero) VALUES ( '{$usuario->getNome()}', '{$usuario->getSobrenome()}', {$usuario->getDtNasc()}, '{$usuario->getEmail()}', '{$usuario->getSenha()}', '{$usuario->getPreferencias()}', {$usuario->getTelefone()}, '{$usuario->getGenero()}');";
//        O NOME DA TABELA E NO SEGUNDO () OS VALORES DOS ATRIBUTOS

        echo $sql;

        $this->conexao->exec($sql);
	}


	public function login($email, $senha)
    {
        //retorna um usuario, de acordo com um email e uma senha

        $bd = new DBConnection();
        $conexao = $bd->getConexao();

        $sql = "select * from Usuario where email='{$email}' and senha='{$senha}'";

        $resultado = $conexao->query($sql);  //executa a consulta criada

        if ($resultado->rowCount() > 0) {

            $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
            $objusu = new Usuario($usuario['cod_usuario'], $usuario['cod_cidade'], $usuario['cidade_origem'], $usuario['nome'], $usuario['sobrenome'], $usuario['dt_nasc'], $usuario['email'], $usuario['senha'], $usuario['preferencias'], $usuario['telefone'], $usuario['genero'], $usuario['cod_tipuser']);
            return $objusu;
        }else{
            return faLse;
        }
    }

}
