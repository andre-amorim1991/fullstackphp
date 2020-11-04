<?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $database = "fseletro";

    $conn = mysqli_connect($servername, $username, $password, $database);


    if (!$conn) {
        die("A conexão com BD falhou: " . mysqli_connect_error());
    }

    if (isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];
       
       $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
       $result = $conn->query($sql);
    }
?>

<!DOCTYPE HTML>
<html lang=PT-BR>

<head>
    <meta charset="UTF-8">
    <title>Full Stack Eletro</title>
    <link rel="stylesheet" href="css/stilo.css">
    <script src="js/funcoes.js"></script>
</head>

<body>
    <header>
        <!-- Menu -->
        <?php
            include_once('menu.html');
        ?>
    </header>    
    <div class="principal">
        <main>
            <h2>Bem Vindo(a)</h2>
            <br>
            <p>A maior loja de eletrodoméstico on-line do Brasil.<br>
                <em>Aqui Programadores tem <b>descontos</b> especias para toda sua casa!</em></p><br>
            <hr>
            <br>
        </main>
    </div>
    <section class="contato">
        <tr>
            <td class="email">
                <img src="img/logo-email.png" alt="E-mail" width="40px">
                contato@fullstackeletro.com
            </td>
            <td class="whatsapp">
                <img src="img/whatsapp-logo.png" alt="contato" width="40px">
                (11) 98765-4321
            </td>
        </tr>
    </section>
    <form method="post" action="">
        <h4>Nome: </h4>
        <input type="text" style="width: 400px;" placeholder="Digite aqui seu noome">
        <br><br>
        <h4>Mensagem: </h4>
        <textarea style="width: 400px" value="Enviar" placeholder="Digite aqui sua mensagem"></textarea>
        <br>
        <br>

        <button type="submit" name="submit"style="width:150px">Enviar</button>
    </form>

    <?php

$sql = "select * from comentarios";
$result = $conn->query($sql);

if($result->num_rows > 0){
while($rows = $result->fetch_assoc()){
    echo"Data: ",$rows['data'], "</br>";
    echo"Nome: ",$rows['nome'], "</br>";
    echo"Mensagem: ",$rows['msg'], "</br>";
    echo"<hr>";
   }
} else {
    echo"Nenhum comentário ainda!";
 }
 ?>

</body>
<footer class="rodape">
    <h3>Formas de pagamento</h3>
    <a><img src="img/pagamentos.png" style="width: 500px;"> </a>
    <p>&copy; Recode Pro 2020<br>
    desenvolvido por André Amorim</p>

</footer>

</html>