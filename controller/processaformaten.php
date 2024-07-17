<?php

    $op = $_POST['op'];
    switch($op)
    {
        case "incluirpublico": incluirpublico();
            break;
        case "incluirnome": incluirnome();
            break;
        case "incluirresposta": incluirresposta();
            break;
        case "incluirfinal" : incluirfinal();
            break;
    }

    function incluirfinal(){   
          $nomeAtendimento = $_REQUEST["tipoatendimento"];
          include_once 'formatenController.php';
          $formaten = new formatenController();
          $formaten->incluirfinal($nomeAtendimento,00000000000000,'S');
    }

    function incluirpublico()
    {
        $nomeAtendimento = $_REQUEST["nomePublico"];
        //$dataCadastro = $_REQUEST["dataCadastro"];
        //$ativo = $_REQUEST["ativo"];
       
    
        include_once 'formatenController.php';
        $formaten = new formatenController();
        $formaten->cadastraFormaAtendimento($nomeAtendimento,00000000000000,'S');
    
    }

function incluirnome()
{
    $nomeAtendimento = $_REQUEST["nomeperfil"];
    //$dataCadastro = $_REQUEST["dataCadastro"];
    //$ativo = $_REQUEST["ativo"];
   

    include_once 'formatenController.php';
    $formaten = new formatenController();
    $formaten->cadastranome($nomeAtendimento,00000000000000,'S');

}

function incluirresposta()
{
    $nomeAtendimento = $_REQUEST["respostaatendimento"];
    //$dataCadastro = $_REQUEST["dataCadastro"];
    //$ativo = $_REQUEST["ativo"];
   

    include_once 'formatenController.php';
    $formaten = new formatenController();
    $formaten->cadastraresposta($nomeAtendimento,00000000000000,'S');

}



function excluir()
{
    $idFormaAtendimento = $_REQUEST["idFormaAtendimento"];
    include_once 'formatenController.php';
    $contr = new formatenController();
    $contr->excluirFormaAtendimento($idFormaAtendimento);
}

function listar(){
include_once '../view/formListarUsu.php';// mudar ref.
}

function alterar(){
    $nomeAtendimento = $_REQUEST["nomeAtendimento"];
    $dataCadastro = $_REQUEST["dataCadastro"];
    $ativo = $_REQUEST["ativo"];
    $idFormaAtendimento = $_REQUEST["idFormaAtendimento"];


    include_once 'formatenController.php';
    $formaten = new formatenController();
    $formaten->alterarFormaAtendimento($idFormaAtendimento,$nomeAtendimento,$dataCadastro,$ativo);  
}
?>