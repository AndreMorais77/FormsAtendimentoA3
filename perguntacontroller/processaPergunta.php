<?php
    switch($_REQUEST["op"])
    {
        case "Incluir": incluir();
            break;
        case "Excluir": excluir();
            break;
        case "Listar": listar();
            break;
        case "Alterar": alterar();
            break;
    }

    function incluir(){

        $descricaoPergunta = $_REQUEST['descricaoPergunta'];
        $dataCadastro = $_REQUEST['dataCadastro'];
        $ativo = $_REQUEST['ativo'];
        

    include 'usuarioController.php';
    $usuario = new usuarioController();
    $usuario->cadastraUsuario($nomeUsuario,$emailUsuario,$loginUsuario,$senhaUsuario,$dataCadastro,$telefoneCelular,$ativo);

    }

    function excluir(){
        $idUsuario = $_REQUEST["idUsuario"];
        include_once 'usuarioController.php';
        $contr = new usuarioController();
        $contr->excluirUsuario($idUsuario);
    }

    function listar(){
        include_once '../view/formListarUsu.php';
    }

    function alterar(){
        $nomeUsario = $_REQUEST['nomeUsuario'];
        $emailUsuario = $_REQUEST['emailUsuario'];
        $loginUsuario = $_REQUEST['loginUsuario'];
        $senhaUsuario = $_REQUEST['senhaUsuario'];
        $dataCadastro = $_REQUEST['dataCadastro'];
        $telefoneCelular = $_REQUEST['telefoneCelular'];
        $ativo = $_REQUEST['ativo'];
        $idUsuario = $_REQUEST['idUsuario'];


        include_once 'usuarioController.php';
        $auto = new usuarioController();
        $auto->alterarUsuario($idUsuario, $nomeUsario,$emailUsuario,$loginUsuario,$senhaUsuario,$dataCadastro,$telefoneCelular,$ativo);  
    }
?>