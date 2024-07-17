

<html lang="en">
<head>
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloco 01</title>
    <style>
        * 
        body {
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(to top right, #577ae4, #1f1eff);
            margin: 0;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }

    </style>
</head>
<body>

    <?php 
     
print "<div class='container'>";
print '<h1> -- Bloco 1 -- </h1><br>';
print "<form method='post' action='../controller/processaformaten.php'>";

include_once "../controller/formatenController.php";
       $res = formatenController::listarusuario();
       echo " ==> 1. Selecione o Usuário: <br> ";
       print "<select name = nomeUsuario>";
       while($row = $res->fetch(PDO::FETCH_OBJ)){
       print "<option value=".$row->idUsuario.">" .$row->nomeUsuario."</option>";
       
    }
    print "</select>";

    include_once "../controller/formatenController.php";
       $res = formatenController::listarFormaAtendimento();
       echo "<br> <br> <br>  ==> 2. Selecione a forma de atendimento: <br> ";
       print "<select name = nomeAtendimento>";
       while($row = $res->fetch(PDO::FETCH_OBJ)){
       print "<option value=".$row->idFormaAtendimento.">" .$row->nomeAtendimento."</option>";
       
    }
    print "</select>";
    include_once "../controller/formatenController.php";   
        $res = formatenController::listarPublico();
       echo "<br> <br> ==> 3. Quem está atendendo: <br> ";
       print "<select name=nomePublico>";
       while($row = $res->fetch(PDO::FETCH_OBJ)){
       print "<option value=".$row->idPublico.">" .$row->nomePublico."</option>";
       

    }
    print "</select>";
    echo "<br><br>";
    print "<button onclick=location.href='../view/teste.php'>Avançar</button>";

    print '    <input type="hidden" name="op" value=incluirpublico>'; 
    print "</div>";
    print "</form>";

        ?>
    <a style="color:black;"href="logout.php">Sair</a> 
</div>
</body>

</html>