<?php
session_start();

require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['name'];
    $password = $_POST['password'];

    // Verifica o usuário na tabela usuario
    $sql = "SELECT * FROM tb_login WHERE name = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        
        // Verifica se a senha está correta
        if(password_verify($password, $row['password'])) {
            $_SESSION["loggedin"] = true;
            header("Location: page.php");
            exit;
        }
    } else {
        $error = "Usuário ou senha incorreta";
    }
}
