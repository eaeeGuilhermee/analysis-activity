<?php
// Inclui o arquivo de configuração
include_once('conexao.php');

// Verifica se o formulário foi enviado
if (isset($_POST['update'])) {
    // Sanitiza os dados do formulário para evitar injeção de SQL
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $endereco = mysqli_real_escape_string($conn, $_POST['endereco']);
    $tipo = mysqli_real_escape_string($conn, $_POST['tipo']);

    // Define a variável $email_atual
    $email_atual = $_POST['email_atual'];

    // Prepara a consulta SQL utilizando prepared statements
    $sqlUpdate = "UPDATE cadastro SET nome=?, email=?, senha=?, telefone=?, endereco=?, tipo=? WHERE email=?";
    $stmt = $conn->prepare($sqlUpdate);
    $stmt->bind_param("sssssss", $nome, $email, $senha, $telefone, $endereco, $tipo, $email_atual);

    // Debuga o problema
    var_dump($_POST);
    echo $sqlUpdate;

    // Executa a consulta
    if ($stmt->execute()) {
        echo "Dados atualizados com sucesso!";
        // Redireciona para a lista de clientes apenas se a atualização for realizada com sucesso
        header('Location: cliente.php');
        exit;
    } else {
        echo "Erro ao atualizar dados: " . $stmt->error;
    }

    // Fecha o statement
    $stmt->close();
}
?>