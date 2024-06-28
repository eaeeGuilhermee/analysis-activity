<?php
include_once("conexao.php");
$email=$_POST['email'];
$senha=$_POST['senha'];


$result="insert into login(email, senha) values('$email','$senha')";
$resultado=mysqli_query($conn, $result);
echo"<center><h1>Cadastro do produto efetuado com Sucesso!</h1></center>";
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style-login.css">
    

    <title>TRUTH</title>
</head>

<body>
        <div class="nav-bar">
                    <a href="index.html"><h1>TRUTH</h1></a>
                <div class="nav-item">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="contact.html">Contato</a></li>
                </div>

                <div class="carrinho">
                    <img src="image/icon/compra.png" alt="icon">
                </div>
        </div>

        <div class="bar2">
            <h1>Não possui uma conta? Clique <a href="contact.html">aqui!</a></h1>
        </div>


        <div class="cadastro">

            <form action="login.php" method="post">   

            <label for="email"></label><br>
            <input type="email" id="email" placeholder="e-mail" name="email" required><br>

            <label for="senha"></label><br>
            <input type="password" id="senha" placeholder="senha" name="senha" required><br>
                

        <div class="submit">
            <input type="submit" value="Entrar">
        </div>
            </form>
        </div>

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
