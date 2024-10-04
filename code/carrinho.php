<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body{
    padding: 0;
    margin: 0;
    align-content: center;
    background-color: whitesmoke;
}

.nav-bar{
    background-color: white;
    display: flex;
    height: 15pc;
    width: 100%;
    align-items: center;
    overflow: hidden;
    transition: top 0.3s;
}

.nav-bar h1{
    color: black;
    margin-top: 15%;
    font-size: 50px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;
    margin-left: 10pc;
    padding: 0px;
    flex-direction: column;
}


.nav-bar a{
    text-decoration: none;
}

.nav-item{
    margin-top: 10px;
    margin-left: 5%;
}

.nav-bar li{
    display: flex;
    font-style: none;
    list-style: none;
    margin-left: 4pc;
    font-size: 25px;
    font-family: Arial, Helvetica, sans-serif;
    float: left;
}

.nav-bar li a{
    text-decoration: none;
    color: rgb(95, 95, 95);
    transition: all ease 0.3s;
}

.nav-bar li a:hover{
    color: rgb(209, 190, 83);
}

.icon{
    margin-top: 10px;
    margin-left: 10pc;
}

.carrinho{
    display: flex;
    cursor: pointer;
    margin: 0;
    padding: 0;
    margin-left: -20%;
    align-content: center;
    height: 55px;
    width: auto;
    transition: all ease 0.4s;
}

.carrinho:hover{
    transform: scale(1.1);
}


.bar2{
    display: flex;
    background-color: rgb(172, 155, 58);
    height: 3pc;
}

.bar2 h1{
    margin: 10px;
    margin-left: 40%;
    font-size: 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: white;
}

.footer{
    display: flex;
    background-color: rgb(221, 221, 221);
    margin-top: 12%;
    height: 20pc;
}

.footer li{
    display: flex;
    padding: 10pc;
    margin-left: 95%;
    font-style: none;
    font-size: 30px;
    list-style: none;

}

.footer2{
    display: flex;
    height: 5pc;
    background-color: white;
    box-shadow: 0px -2px 20px 2px rgb(186, 186, 186);
}

.footer2 li{
    display: flex;
    float: left;
    margin: 17px;
    cursor: pointer;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    transition: all ease 0.3s;
}

.footer2 a{
    color: black;
}

.footer2 li:hover{
    color: rgb(209, 190, 83)
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