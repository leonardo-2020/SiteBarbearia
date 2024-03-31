
<?php
   // session_start(); 

    $servername = "127.0.0.1";
    $username = "admin";
    $password = "123456";
    $dbname = "db_barbearia";


    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    
?>