<?php
// colocar o ip da onde for hospedado
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_scrum";



$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$descricao = $_POST["descricao"];



$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "INSERT INTO `db_scrum`.`tb_clientes` (`nome`, `email`, `telefone`, `descricao`) VALUES ('$nome','$email','$telefone','$descricao')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastrado com sucesso";
} else {
    echo "Qué Qué Qué Qué";
}

$conn->close()

?>
<br>
<button type="button" class="btn btn-secondary btn-block" onclick="window.location.href='index.php'">Voltar</button>