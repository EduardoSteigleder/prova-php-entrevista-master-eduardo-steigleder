<?php
require '../connection.php';

$id = $_GET['id'];
$connection = new Connection();

$query = "DELETE FROM users WHERE id = $id";
$connection->query($query);

echo "Usuário excluído com sucesso!";
header("Location: ../index.php"); // Redireciona de volta para a listagem de usuários
?>