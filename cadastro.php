<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background: gray;
        !important;
        color: #fff;
    }


    form {
        width: 350px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
        border: 1px solid black;
        background-color: #30425e;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    form input {
        padding: 5px;
        border-radius: 5px;
        outline: none;
        border: 1px solid black;
        width: 100%;
    }


    h1 {
        text-align: center;
        color: #000;
        font-size: 24px;
        margin-bottom: 20px;
        margin-top: 20px;
        padding-bottom: 10px;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
        text-transform: uppercase;
    }

    #btn {
        background-color: #4caf50;
        color: #fff;
        border: none;
        width: 90px;
        height: 30px;
        text-decoration: none;
        cursor: pointer;
        border-radius: 5px;
        margin-top: 10px;
        font-size: 16px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    p {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    a {
        text-decoration: none;
        color: black;
        margin-left: 10px;
        font-size: 16px;
    }

    .lista {
        border: 1px solid black;
        border-radius: 5px;
        background-color: #30425e;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    #btn2 {
        background-color: #00d3ff;
        color: #fff;
        border: none;
        width: 55px;
        height: 25px;
        text-decoration: none;
        cursor: pointer;
        border-radius: 3px;
        margin-top: 10px;
        font-size: 15px;
        transition: transform 1.1s ease-in-out;
    box-shadow: 0px -1px 20px 7px #0dcaf0;
    }

    #btn2:hover {
        background-color: #00b5ec;
        transform: scale(5);
    }

    .buton {
        display: flex;
        justify-content: center;
        margin-top: 80px;
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Portfólio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">GitHub</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Linkedin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTEUDO SITE -->
    <div class="conteudo">
        <h1>Meu Portfólio</h1>
        <p>Bem-vindo ao meu portfólio! Aqui você encontrará exemplos dos meus trabalhos e projetos.</p>
        <p>Olá!Meu nome é Matheus e este é o meu portfólio online. Sou apaixonado por programação, e aqui você
            encontrará uma seleção dos meus trabalhos mais recentes e projetos pessoais.</p>
        <div class="lista">
            <p>O que você encontrará aqui:</p>
            <ul>
                <li>Projetos: Explore uma variedade de projetos que demonstrem minha habilidade e criatividade em
                    desenvolvimento web.</li>
                <li>Experiência: Descubra minha jornada profissional e acadêmica, incluindo os desafios que enfrentei e
                    as
                    soluções criativas que desenvolvi</li>
                <li>Habilidades: Conheça minhas habilidades técnicas e soft skills que me permitem enfrentar novos
                    desafios
                    com
                    confiança e eficiência.</p>
                </li>
            </ul>
        </div>
    </div>


    <h1>Cadastre-se para receber todos os codigos</h1>
    <form action="processa.php" method="post" id="cadastroForm">
        <input type="text" id="name" name="nome" placeholder="Nome completo" required>
        <br><br>
        <input type="email" id="email" name="email" placeholder="E-mail" required>
        <input type="submit" id="btn" value="Cadastar">
    </form>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <div class="buton">
        <a href="listar.php"><button id="btn2">Lista</button></a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
<!-- TRUNCATE TABLE usuarios -->
