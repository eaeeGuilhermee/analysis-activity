<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
     /* cards.css */

    .card {
    /* Estilos para todos os cards */
        border: 20px solid #ccc;
        padding: 20px;
        margin: 10px;
        width: 15pc;
        background-color: #f9f9f9;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        cursor: pointer;
    }

    .card-header {
    /* Estilos para o cabeçalho do card */
        font-weight: bold;
        margin-bottom: 10px;
    }


    img {
    /* Estilos para a imagem */
        max-width: 200px;
        height: auto;
        padding: 5px;
        margin-left: 10px;
    }

    .background{
        display: flex;
        width: 87pc;
    }

    .certo{
        display: grid;
        grid-template-columns: auto auto auto auto;
        margin-inline: center;
        flex-wrap: wrap;
        margin: 15px;
    }

    
    </style>
    
    <title>TRUTH</title>
</head>

<body>
    <header>
        <div class="nav-bar">
            
                    <a href="index.php"><h1>TRUTH</h1></a>
                <div class="nav-item">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="contact.php">Contato</a></li>
                </div>

        <div class="icon">
        <a href="login.php">
                <div class="carrinho">
                    <img src="image/icon/compra.png" alt="icon">
                </div></a></div>
        </div>

            <div class="bar2">
                <h1>The TRUTH will set you free!</h1>
            </div>

    </header>

    

        <div class="hr1">
            <h1>Nova Coleção</h1>
            <hr>
            
            <section>
    <div class="background">
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
    </div>
        </div>
</section>
<!-- 
    <div class="hr2">
        <h1>REPOSIÇÃO</h1>
    <div class="reposição">
    <a href="tshirt1.php" target="_blank">
        <div class="reposição1">
            <img src="image/tshirt/tshirt1.png" alt="">
        </div></a>

        <a href="tshirt2.php" target="_blank">
        <div class="reposição1">
            <img src="image/tshirt/tshirt2.png" alt="">
        </div></a>

        <a href="tshirt3.php" target="_blank">
        <div class="reposição1">
            <img src="image/tshirt/tshirt3.png" alt="">
        </div></a>

        <a href="tshirt4.php" target="_blank">
        <div class="reposição1">
            <img src="image/tshirt/tshirt4.png" alt="">
        </div></a>
    </div>
        
        <br>


    <div class="hr3">
        <h1>TRUTH Kids</h1>
        <hr>
    </div>

    <div class="truth-kids">

        <div class="truth-kids1">
            <img src="''" alt="">
        </div>

        <div class="truth-kids1">
            <img src="''" alt="">
        </div>

        <div class="truth-kids1">
            <img src="''" alt="">
        </div>
    </div> -->
    

        <div class="footer">
            <footer>
                <li>&copy;Guilherme</li>
            </footer>
        </div>
    </div>

        <div class="footer2">
            <footer>
                <ul>
                    
                    <a href="https://www.instagram.com/guilhermeoliveira.ink/"><li>Instagram</li></a>
                    
                    <li>WhatsApp</li>
                    
                </ul>
            </footer>
        </div>

    </body>
</html>