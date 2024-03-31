
<?php   
define('HOST','127.0.0.1');
define('LOGIN', 'admin');
define('PASSWORD', '123456');
define('DB', 'db_barbearia');

$conexao = mysqli_connect(HOST, LOGIN, PASSWORD, DB ) or die ('Não foi possivel realizar a conexão');
?>

