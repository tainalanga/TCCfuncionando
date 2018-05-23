<?php

class Usuario{

    private $cod_usuario;
    private $cod_cidade;
    private $cidade_origem;
    private $nome;
    private $sobrenome;
    private $dt_nasc;
    private $email;
    private $senha;
    private $preferencias;
    private $telefone;
    private $genero;
    private $cod_tipuser;

    /**
     * Usuario constructor.
     * @param $cod_usuario
     * @param $cod_cidade
     * @param $cidade_origem
     * @param $nome
     * @param $sobrenome
     * @param $dt_nasc
     * @param $email
     * @param $senha
     * @param $preferencias
     * @param $telefone
     * @param $genero
     * @param $cod_tipuser
     */
    public function __construct($cod_usuario = 0, $cod_cidade = 0, $cidade_origem = 0, $nome = '', $sobrenome = '', $dt_nasc = 0, $email = '', $senha = '', $preferencias = '', $telefone = 0, $genero = '', $cod_tipuser = 0)
    {
        $this->cod_usuario = $cod_usuario;
        $this->cod_cidade = $cod_cidade;
        $this->cidade_origem = $cidade_origem;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->dt_nasc = $dt_nasc;
        $this->email = $email;
        $this->senha = $senha;
        $this->preferencias = $preferencias;
        $this->telefone = $telefone;
        $this->genero = $genero;
        $this->cod_tipuser = $cod_tipuser;
    }

    /**
     * @return mixed
     */
    public function getCodUsuario()
    {
        return $this->cod_usuario;
    }

    /**
     * @param mixed $cod_usuario
     */
    public function setCodUsuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;
    }

    /**
     * @return mixed
     */
    public function getCodCidade()
    {
        return $this->cod_cidade;
    }

    /**
     * @param mixed $cod_cidade
     */
    public function setCodCidade($cod_cidade)
    {
        $this->cod_cidade = $cod_cidade;
    }

    /**
     * @return mixed
     */
    public function getCidadeOrigem()
    {
        return $this->cidade_origem;
    }

    /**
     * @param mixed $cidade_origem
     */
    public function setCidadeOrigem($cidade_origem)
    {
        $this->cidade_origem = $cidade_origem;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * @param mixed $sobrenome
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    /**
     * @return mixed
     */
    public function getDtNasc()
    {
        return $this->dt_nasc;
    }

    /**
     * @param mixed $dt_nasc
     */
    public function setDtNasc($dt_nasc)
    {
        $this->dt_nasc = $dt_nasc;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getPreferencias()
    {
        return $this->preferencias;
    }

    /**
     * @param mixed $preferencias
     */
    public function setPreferencias($preferencias)
    {
        $this->preferencias = $preferencias;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * @param mixed $genero
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    /**
     * @return mixed
     */
    public function getCodTipuser()
    {
        return $this->cod_tipuser;
    }

    /**
     * @param mixed $cod_tipuser
     */
    public function setCodTipuser($cod_tipuser)
    {
        $this->cod_tipuser = $cod_tipuser;
    }


}