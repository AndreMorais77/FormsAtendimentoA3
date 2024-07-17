<?php
session_start();


include_once '../DAO/Conexao.php';
$conex = new Conexao();

$conex->fazConexao();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conex->conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: bloco1form.php');
        exit();
    } else {
        $error = 'Nome de usuário ou senha inválidos';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Login</title>
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
    <div class="container">
            <h2> --- Login --- </h2>
    <?php if (isset($error)): ?>
        <p style="color:black;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST">
        <label>Nome de usuário:</label>
        <input type="text" name="username" required>
        <br>
        <label>Senha:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Entrar</button>
    </form>
    </div>
</body>
</html>
