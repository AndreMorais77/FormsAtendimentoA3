<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<a href="logout.php">Sair</a>

<?php 
$id = $_REQUEST['nomePublico'];
echo $id;
print '<h1> Bloco 2 </h1><br>';
print "<form method='post'>";
    include_once "../perguntacontroller/perguntacontroller.php";
        $res = perguntacontroller::listarid();
        ($row = $res->fetch(PDO::FETCH_OBJ));
        print_r ($res);
       $res = perguntacontroller::listarPergunta();
       while($row = $res->fetch(PDO::FETCH_OBJ)){
            print "<br>".$row->descricaoPergunta;
            print "<br> <input type=text name=repostaPergunta>";
        }
    print "<input type='submit' value='enviar'> ";
    print '    <input type="hidden" name="op" value=Incluir>'; 
    print "</form>";
    ?>
</body>
</html>