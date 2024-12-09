<?php
require '../connection.php';

$id = $_GET['id'];
$connection = new Connection();

// Recupera os dados do usuário
$user = $connection->query("SELECT * FROM users WHERE id = $id")->fetch(PDO::FETCH_OBJ);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $query = "UPDATE users SET name = '$name', email = '$email' WHERE id = $id";
    $connection->query($query);

    echo "Usuário atualizado com sucesso!";
  
    header("Location: ../index.php");
}
?>
<link rel="stylesheet" href="../assents/style.css">
<div class="form-container">
    <h1>Editar Usuário</h1>
    <form method="POST" action="edit.php?id=<?php echo $user->id; ?>">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="<?php echo $user->name; ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $user->email; ?>" required>

        <button type="submit">Salvar Alterações</button>
    </form>
    <a href="../index.php" class="back-button">Voltar</a>
</div>

