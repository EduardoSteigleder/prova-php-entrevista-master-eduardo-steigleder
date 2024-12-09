<?php

require 'connection.php';

$connection = new Connection();

$users = $connection->query("SELECT * FROM users");

echo "
<link rel='stylesheet' href='assents/style.css'>
    <div>
        <a href='views/create.php' style='text-decoration: none;'>
            <button>
                Criar Novo Usuário
            </button>
        </a>
    </div>";

echo "<table border='1'>

    <tr>
        <th>ID</th>    
        <th>Nome</th>    
        <th>Email</th>
        <th>Ação</th>    
    </tr>
";

foreach($users as $user) {

    echo sprintf("<tr>
                      <td>%s</td>
                      <td>%s</td>
                      <td>%s</td>
                      <td>
                           <a href='views/edit.php?id=%s'>Editar</a>
                           <a href='views/delete.php?id=%s'>Excluir</a>
                      </td>
                   </tr>",
        $user->id, $user->name, $user->email, $user->id, $user->id);

}

echo "</table>";