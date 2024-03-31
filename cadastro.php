<?php

    require_once "config.php"; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);


        $sql = "INSERT INTO tb_login (name, password, email) VALUES (?, ?, ?)";

        $stmt = $conn->prepare($sql);
        
        $stmt->bind_param("sss", $name, $hashed_password, $email); 

        if ($stmt->execute()) {
            echo "Usuário criado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();


    }
    $conn->close();