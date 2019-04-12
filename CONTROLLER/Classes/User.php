<?php
//include(): Tenta incluir uma página. Caso de algum erro, o script retorna um warning (aviso) e prossegue com a execução do script.
//Require(): Tenta incluir uma página. Caso de algum erro, o script retorna um fatal error e aborta a execução do script.
//include_once() e require_once(): Idênticas as suas funções simples, porém se o arquivo referenciado 
//já foi incluso na página anteriormente, a função retorna ‘false’ e o arquivo não é incluido.

//Inclue a classe:
require("../../MODEL/PHP files/DAOLogin.php");

// classe usuario, dentro dela estão as variaveis privadas;

class User
{

    private $userName;
    private $userPassword;
    private $userCod_user;//vai Tirado depois
    private $userNiuser;

//function é função (obvio), sendo um função ela tem um corpo, 
//esse corpo é composto por chaves, a função que leva 
// o nome da classe é um método contrutor
// ctrl + : comentario

    function __construct()
    {
        LoginCheck();

        $this->userName = $_SESSION['user'];
        $this->userPassword = $_SESSION['password'];
        $this->userCod_user = $_SESSION['cod_user'];
        $this->userNiuser = $_SESSION['ni_user'];
    }

    function getName()
    {
        return $this->userName;
    }

    function getPassword()
    {
        return $this->userPassword;
    }

    function getCod_user()
    {
        return $this->userCod_user;//vai ser tirado depois foi mal/:
    }

    function getN_user()
    {
        return $this->userNiuser;
    }

// verificação
    function LoginCheck()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (!$_SESSION['user']) {
            header('Location: ../../index.php');
            exit();
        }


    }
}

?>