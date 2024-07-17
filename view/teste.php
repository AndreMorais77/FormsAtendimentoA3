<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(to top right, #577ae4, #1f1eff);
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }
        form {
            width: 300px;
            text-align: center;
        }
        input {
            display: block;
            margin: 10px auto;
            width: 250px;
            height: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            font-weight: bold;
        }

        input:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); 
        }

        .login-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #ffffff;
        }

        .login-header h3 {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            font-size: 25px;
            margin-top: 15px;
        }
        .login-header img {
            width: 110px;
            height: 70px;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<?php

    $id = 0;
    print "<form method=post action='../controller/processaformaten.php'>";
    include_once "../perguntacontroller/perguntacontroller.php";
    include_once "../controller/formatenController.php"; 
   $res2 = perguntacontroller::pegaid();
   while ($row2 = $res2->fetch(PDO::FETCH_OBJ)){
   $id = ['id' => $row2->respostaAtendimento];
}
//print_r ($id);

    $res3= perguntacontroller::pegaidpergunta();
    while ($row2 = $res3->fetch(PDO::FETCH_OBJ)){
    $id2 = ['id2' => $row2->idPerguntaPublico];
    //print_R ($id2);
}
        $res = perguntacontroller::listarPergunta();
        print '<h1> -- Bloco 2 -- </h1><br>';
     while($row = $res->fetch(PDO::FETCH_OBJ)){
        if($id['id'] == $row->idPublico){
        print "<br><br>".$row->descricaoPergunta;
        print "<br><input type=text name=respostaatendimento>";
        print "<input type='hidden' name='id' value=".$row->idPerguntaPublico.">";
    }
     }
        
    print "<br><br><input type=submit value=enviar>";
    print "<input type=hidden name=op value=incluirresposta>";

?>
<a style="color:black;"href="logout.php">Sair</a> 
</body>
</html>
