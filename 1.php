<!DOCTYPE html>
<html>
<head>
    <title>Ganhar Seguidores no Instagram</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #007bff;
        }

        #follower-form {
            background-color: #ffffff;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px;
            max-width: 400px;
            margin: 0 auto;
        }

        #usuarioInstagram {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        #enviar {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            width: 100%;
        }

        #resultado {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Ganhar Seguidores no Instagram</h1>
    <div id="follower-form">
        <p>Atenção: Os seguidores são grátis uma vez por dia. Ganhe 300 seguidores grátis. Digite seu usuário do Instagram abaixo e aguarde os seguidores.</p>
        <form method="post" action="processar.php">
            <label for="usuarioInstagram">Digite seu usuário do Instagram:</label>
            <input type="text" name="usuarioInstagram" id="usuarioInstagram" required>
            <br>
            <button type="submit" id="enviar">Enviar</button>
        </form>
        <div id="resultado">
            <!-- Aqui será exibida a mensagem de "Seguidores enviados" após o envio. -->
        </div>
    </div>
</body>
</html>
