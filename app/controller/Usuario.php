<?php 
    class Usuario extends DB
    {
        public $usuario;

        function __construct($id = null){
            parent::__construct();

            if(isset($id)){
                $this->usuario = $this->medoo->select("usuarios", '*',[
                    "id" => $id
                ])[0];
            }
        }

        

        public function logar($id)
        {
            $this->__construct($_SESSION['user'] = $id);
            return true;
        }

        public function checarLogin()
        {
            if(isset($_SESSION['user'])){
                return $this->medoo->has("usuarios", [
                    "AND" => [
                        "id" => $_SESSION['user'],
                    ]
                ]);
            }else{
                return false;
            }
        }

        public function inserir($usuario)
        {
            $this->medoo->insert("usuarios", [
                "nome"              => $_POST['Nome'], 
                "email"             => $_POST['Email'], 
                "senha"             => $_POST['Senha'], 
                "genero"            => $_POST['Genero'],
                "telefone"          => $_POST['Telefone'], 
                "preferencias"      => $_POST['Preferencias'], 
                "data_nascimento"   => $_POST['Data_de_nascimento']        
            ]);

            return $this->logar($this->medoo->id());
        }
    }