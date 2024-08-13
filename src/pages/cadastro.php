<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "marimaria";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> $connect_error){
    die("A conexão falhou, segue o erro" . $conn -> $connect_error);
}

$sql = "CREATE TABLE IF EXISTS users (
    id int(6) unsigned auto_increment PRIMARY KEY,
    login VARCHAR(30) not null,
    senha VARCHAR(30) not null,
    regis_date TIMESTAMP DEFAULT CURRET_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($_SERVER["REQUEST_METTHOD"] == "POST"){
    $login = $post ['login'];
    $senha = $post ['senha'];

    $sql = "INSERT INTO users (login, senha) VALUES ('$login', '$senha')";
    $conn->query($sql);

    echo "Cadastro realizado com sucesso! redirecionamento...login";
    echo "<!-- Redireciona para uma URL específica em html-->
    <meta http-equipv='refresh' content='5, url= http://localhost/projetoLOBO'>";

} else{
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["php_self"]); ?>" method="post">
            <label for="login">Login:</label>
            <input type="text" name="login"> <br>   
            <label for="senha">Senha:</label>
            <input type="password" name="senha"> <br>
            <input type="submit" value="cadastrar"/><br>
    </form>
    <?php
}