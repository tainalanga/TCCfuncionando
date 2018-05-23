<?php

require_once "app/models/UsuarioCrud.php";

 $Crud = new UsuarioCrud();


 $login = 'elisa@gmail.com';
 $senha = '123';
 
 $us = $Crud ->login($login, $senha);
 
 if ($us){
     echo 'Deu certo '.$us->getNome();
 }else{
     echo 'Dados invalidos';
 }


