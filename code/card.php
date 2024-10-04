<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="imagemreser.css">
    <title>Document</title>
</head>
<body>
<body>
  <header>
    <h1>RESERVATÓRIOS</h1>
    <nav>
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="#projetos">Projetos</a></li>
        <li><a href="#eventos">Eventos</a></li>
        <li><a href="#noticias">Notícias</a></li>
        <li><a href="#contato">Contato</a></li>
      </ul>
    </nav>
  </header>
 

    <title>Formulário e Exibição de Mensagens</title>
    <style>
     /* cards.css */

.card {
  /* Estilos para todos os cards */
  border: 1px solid #ccc;
  padding: 20px;
  margin: 10px;
  background-color: #f9f9f9;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
 
  
}
.card {
  /* Estilos para todos os cards */
  border: 1px solid #ccc;
  padding: 20px;
  margin: 10px;
  background-color: #f9f9f9;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
 
  
}

.card-header {
  /* Estilos para o cabeçalho do card */
  font-weight: bold;
  margin-bottom: 10px;
}

section {
  /* Estilos para a seção de conteúdo */
  display: flex;
  flex-wrap: wrap;
}

img {
  /* Estilos para a imagem */
  max-width: 200px;
  height: auto;
  margin-right: 10px;
}
.certo{
  display: grid;
  grid-template-columns: auto auto auto auto;
  margin-inline: center;
  flex-wrap: wrap;
}
    </style>
</head>
<body>
<div class="certo">
<?php
include_once('conexao.php');


// Preparando a query SQL para selecionar os dados
$sql = "SELECT id, tipo, tamanho, descricao, preco, quantidade, imagem FROM produto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Saída dos dados de cada linha
    while($row = $result->fetch_assoc()) {
      
      echo "<div class='card'>";
      echo "<div class='card-header'> Categoria : " . $row["tipo"] . "</div>";
      echo "<div class='p'> Tamanho : " . $row["tamanho"]. "</div>";
      echo "<div class='p'> Descrição : " . $row["descricao"]. "</div>"; 
      echo "<div class='p'> Preço : " . $row["preco"]. "</div>";
      echo "<div class='p'> Quantidade : " . $row["quantidade"]. "</div>";
      echo "<div class='p'> <img src='" . $row["imagem"] . "' alt='Imagem'><br>" . "</div>";  
      echo "</div>";  
        
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>
</div>
</body>