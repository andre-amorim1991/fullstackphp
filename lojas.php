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
        <div class="menu">
       
             <!-- Menu -->
            <?php
                include_once('menu.html');
            ?>
        </div>
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
    <div class="lojas">
        <ul>
            <li>Rio de Janeiro</li>
            <li>Avenida Copa Cabana, 3456</li>
            <li>Terreo loja 20</li>
            <li>Copa cabana</li>
            <li>(21) 2132-6532</li>
        </ul>
    </div>
    <div class="lojas">
        <ul>
            <li>São Paulo</li>
            <li>Avenida Paulista, 3912</li>
            <li>Bela Vista</li>
            <li>(11) 3265-6532</li>
        </ul>
    </div>
    <div class="lojas">
        <ul>
            <li>Belo Horizonte</li>
            <li>Avenida João Pina, 520</li>
            <li>Assunção</li>
            <li>(31) 4232-3698</li>
        </ul>
    </div>

</body>
<footer class="rodape">
    <h3>Formas de pagamento</h3>
    <a><img src="img/pagamentos.png" style="width: 500px;"> </a>
    <p>&copy; Recode Pro 2020<br>
    desenvolvido por André Amorim</p>

</footer>

</html>