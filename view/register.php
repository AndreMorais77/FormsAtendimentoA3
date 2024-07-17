<?php
session_start();

include_once '../DAO/Conexao.php';

$conex = new Conexao();

$conex->fazConexao();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password !== $password_confirm) {
        $error = 'As senhas não coincidem.';
    } else {
        $stmt = $conex->conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        if ($stmt->fetch()) {
            $error = 'Nome de usuário já existe.';
        } else {
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $conex->conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            if ($stmt->execute([$username, $hashed_password])) {
                $success = 'Usuário registrado com sucesso. Você pode fazer login agora.';
            } else {
                $error = 'Erro ao registrar o usuário. Tente novamente.';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Registro de Novo Usuário</title>
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
        <h2>Registro de Novo Usuário</h2>
        <?php if (isset($error)): ?>
            <p style="color:red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <?php if (isset($success)): ?>
            <p style="color:green;"><?php echo $success; ?></p>
        <?php endif; ?>
        <form method="POST">
            <label>Nome de usuário:</label>
            <input type="text" name="username" required><br>
            <label>Senha:</label>
            <input type="password" name="password" required><br>
            <label>Confirme a senha:</label>
            <input type="password" name="password_confirm" required><br>
            <button type="submit">Registrar</button>
        </form>
        <br>
        <a style="color:white;" href="login.php">Já tem uma conta? Faça login</a>
        </div>
    </body>
</html>
