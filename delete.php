<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Cliente deletado com sucesso!";
} else {
    echo "Erro ao deletar cliente: " . $conn->error;
}

$conn->close();
?>

<a href="clientes.php">Voltar</a>
