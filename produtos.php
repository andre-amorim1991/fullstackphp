<?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $database = "fseletro";

    $conn = mysqli_connect($servername, $username, $password, $database);


    if (!$conn) {
        die("A conexão com BD falhou: " . mysqli_connect_error());
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
    <div class="categorias">
        <ul>
            <li onclick="exibir_todos()">Todos (12)</li>
            <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
            <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
            <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
            <li onclick="exibir_categoria('lavaroupas')">Lava roupas (2)</li>
            <li onclick="exibir_categoria('lavaloucas')">Lava louças(2)</li>
        </ul>
    </div>
    
        <?php
        
        $sql = "select * from produtos";
        $result = $conn->query($sql);
    
        if($result->num_rows > 0) {
                while($rows = $result->fetch_assoc()){

        ?>
        <div class="produtos" id="<?php echo $rows["categoria"];?>">
            <p class="geladeira"><img src="<?php echo $rows["imagem"];?>" alt="geladeira Consul prata" width="140px"
                height="140px" onclick="destaque(this)"></p>
            <p class="descricao"><?php echo $rows["descricao"];?></p>
            <p class="precoantigo">R$ <?php echo $rows["preco"];?></p>
            <p class="preconovo">R$ <?php echo $rows["preco_venda"];?></p>
            <hr>
            <br>
        </div>

        <?php
                }
        }else {
            echo "Nenhum produto cadastrado!";
        }
        
        ?>   
</body>
<footer class="rodape">
    <h3>Formas de pagamento</h3>
    <a><img src="img/pagamentos.png" width="500px"> </a>
    <p>&copy; Recode Pro 2020<br>
        desenvolvido por André Amorim</p>

</footer>

</html>