<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


    <div class="container">
<?php 

print '<h1> -- Bloco 3 -- </h1><br>';
print "<form method='POST' action=../controller/processaformaten.php>";
include_once("../perguntacontroller/perguntacontroller.php");
    $res = perguntacontroller::listarid();
    ($row = $res->fetch(PDO::FETCH_OBJ));

   $res = perguntacontroller::listarTipoAten();
  print "<select name='tipoatendimento'>"; 
   while($row = $res->fetch(PDO::FETCH_OBJ)){
        print "<br><option>".$row->tipoatendimento. "</option>";
    }
    
   print"<br> <br> <input type=submit value=Enviar>";
   print "<input type=hidden name=op value=incluirfinal>";
    ?>
    <a style="color:black;"href="logout.php">Sair</a> 
    </div>
</body>
</html>