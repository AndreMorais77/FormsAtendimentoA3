<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Forma Atendimento</title>
</head>
<body>
<?php
    $operacao = $_REQUEST["op"];
    
    if($operacao=="Alterar"){
        // resgatar dados do banco
        include_once ("../controller/fromatenController.php");
        $res = formatenController::resgataPorID($_REQUEST["idFormaAtendimento"]);
        $row = $res->fetch(PDO::FETCH_OBJ);
        $nomeAtendimento = $row->nomeAtendimento;
        $dataCadastro=$row->dataCadastro;
        $ativo = $row->ativo;
        $idFormaAtendimento =$row->idFormaAtendimento;
        $idUsuario = $row->idUsuario;


    }
    else
    {
        $operacao = "Incluir";
        $idFormaAtendimento = "";
        $nomeAtendimento = "";
        $dataCadastro="";
        $ativo ="";
        $idUsuario="";

        
    }
    print '<h1> Formulário de cadastro de Forma de Atendimento</h1><br>';
    print '<form action="../controller/processaformaten.php" method="post">';
    print '    <label for="nomeAtendimento">Nome Atendimento:</label>';
    print '    <input type="text" name="nomeAtendimento" value='.$nomeAtendimento.'><br>';
    print '    <label for="dataCadastro">Data Cadastro:</label>';
    print '    <input type="text" name="dataCadastro" value='.$dataCadastro.'><br>';
    print '    <label for="ativo">Ativo ?:</label>';
    print '    <input type="text" name="ativo" value='.$ativo.'><br>';
    
    print '    <input type="hidden" name="op" value='.$operacao.'>'; 
    print '    <input type="hidden" name="id" value='.$idFormaAtendimento.'>';  
     print '    <input type="submit" value='.$operacao.'>';
    print '</form>';
    
    ?>
</body>
</html>