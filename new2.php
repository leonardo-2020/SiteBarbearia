<?php
session_start();

require_once "config.php";

if (empty($_POST['name']) || empty($_POST['password'])) {
    header('Location: login.php');
    exit();
}

$name = $_POST['name'];

// Senha fornecida pelo formulário de login
$password = $_POST['password'];

// Consulta preparada para selecionar o hash de senha do usuário
$query = "SELECT hashed_password FROM tb_login WHERE name = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 's', $name);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
    // Hash de senha recuperado do banco de dados
    $hashed_password_from_db = $row['hashed_password'];

    // Verifica se a senha fornecida corresponde ao hash armazenado
    if (password_verify($password, $hashed_password_from_db)) {
        // Senha correta
        // Faça o que precisa ser feito após a autenticação
        $_SESSION['name'] = $name;
        header('Location: page.php');
        exit();
    } else {
        // Senha incorreta
        // Trate o erro ou redirecione de volta ao formulário de login
        header('Location: login.php');
        exit();

    }
} else {
    // Nome de usuário não encontrado
    // Trate o erro ou redirecione de volta ao formulário de login
    header('Location: new2.php');
        exit();

}