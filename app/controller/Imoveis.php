<?php 
    class Imoveis extends DB
    {
        public $imovel;
        public $imoveis;

        function __construct($id = null){
            parent::__construct();
            
            if(isset($id)){
                $this->imovel = $this->medoo->select("imovel", '*',[
                    "id" => $id
                ])[0];
            }else{
                $this->imoveis = $this->medoo->select("imovel", '*');
            }
        }
    
        public function inserir($imovel)
        {
            $this->medoo->insert("imovel", [
                "numero"            => $imovel['Número'], 
                "endereco"          => $imovel['Endereço'], 
                "descricao"         => $imovel['Descrição'], 
                "tipo"              => $imovel['Tipo_Imovel'],
                "limite_pessoas"    => $imovel['Limite_de_pessoas'],
                "usuario_id"        => $_SESSION['user'], 
                "universidades_id"  => 1        
            ]);

            move_uploaded_file($_FILES['Foto_Imovel']['tmp_name'], "uploads/" . $this->medoo->id() . '.jpg');

            return true;
        }

        public function editar($imovel, $id)
        {
            $this->medoo->update("imovel", [
                "numero"            => $imovel['Número'], 
                "endereco"          => $imovel['Endereço'], 
                "descricao"         => $imovel['Descrição'], 
                "limite_pessoas"    => $imovel['Limite_de_pessoas'],
                "usuario_id"        => $_SESSION['user'], 
                "universidades_id"  => 1        
            ], [
                'id' => $id
            ]);

            return true;
        }
    }