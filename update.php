<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM clientes WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];
    $genero = $_POST['genero'];

    $sql = "UPDATE clientes SET nome='$nome', telefone='$telefone', endereco='$endereco', email='$email', data_nascimento='$data_nascimento', genero='$genero' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Cliente atualizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
</head>
<body>
    <h2>Editar Cliente</h2>
    <form method="post" action="">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" value="<?= $row['nome'] ?>" required><br><br>
        
        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone" value="<?= $row['telefone'] ?>"><br><br>
        
        <label for="endereco">Endereço:</label><br>
        <input type="text" id="endereco" name="endereco" value="<?= $row['endereco'] ?>"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?= $row['email'] ?>" required><br><br>
        
        <label for="data_nascimento">Data de Nascimento:</label><br>
        <input type="date" id="data_nascimento" name="data_nascimento" value="<?= $row['data_nascimento'] ?>"><br><br>
        
        <label for="genero">Gênero:</label><br>
        <select id="genero" name="genero">
            <option value="Masculino" <?= $row['genero'] == 'Masculino' ? 'selected' : '' ?>>Masculino</option>
            <option value="Feminino" <?= $row['genero'] == 'Feminino' ? 'selected' : '' ?>>Feminino</option>
            <option value="Outro" <?= $row['genero'] == 'Outro' ? 'selected' : '' ?>>Outro</option>
        </select><br><br>
        
        <input type="submit" value="Atualizar">
    </form>
    <a href="clientes.php">Voltar</a>
</body>
</html>
