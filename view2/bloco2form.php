<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

print '<h1> Bloco 2 </h1><br>';
    
    $op = $_REQUEST["nomePublico"];
    echo $op;
    include_once("../controller/perguntacontroller.php");
       $res = perguntacontroller::listarPergunta();
       while($row = $res->fetch(PDO::FETCH_OBJ)){
        Print $row->idPerguntaPublico;
        print "<input type='text' name=" .$row->repostaAtendimento. " >";
       }
        print "<br> <br><button onclick='location.href='view/form4.php?op=avancar'>avancar</button>";
    
    ?>

</body>
</html>