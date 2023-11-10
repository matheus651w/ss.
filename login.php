<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        #container {
            width: 100%;
            height: 100%;
            background-color: black;
            color: green;
            text-align: center;
            font-size: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        #header {
            padding: 20px;
        }
        #content-box {
            border: 2px solid green;
            padding: 20px;
        }
        #login-box {
            background-color: black;
            border: 2px solid green;
            padding: 20px;
            width: 80%;
            max-width: 400px;
        }
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        #login-button {
            background-color: green;
            color: black;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="header">
            Mister Lara criador
        </div>
        <div id="content-box">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $password = $_POST["password"];
                $correctPassword = trim(file_get_contents("2.txt"));
                if ($password == $correctPassword) {
                    // Senha correta, mostrar o conteúdo
                    $fileContents = file_get_contents("login.txt");
                    echo nl2br($fileContents);
                } else {
                    // Senha incorreta, exibir mensagem de erro
                    echo "Senha incorreta. Tente novamente.";
                }
            } else {
                // Exibir formulário de login
                echo '<div id="login-box">
                        <form method="post">
                            <label for="password">Senha:</label>
                            <input type="password" name="password" id="password">
                            <br>
                            <button id="login-button" type="submit">Entrar</button>
                        </form>
                    </div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
