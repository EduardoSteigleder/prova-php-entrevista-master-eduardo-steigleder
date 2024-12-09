<?php
require '../connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $connection = new Connection();
    $query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    $connection->query($query);

    echo "Usuário criado com sucesso!";
   
    header("Location: ../index.php");
}
?>
<link rel="stylesheet" href="../assents/style.css">
<div class="form-container">
    <h1>Criar Novo Usuário</h1>
    <form method="POST" action="create.php">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <button type="submit">Criar Usuário</button>
    </form>
    <a href="../index.php" class="back-button">Voltar</a>
</div>

