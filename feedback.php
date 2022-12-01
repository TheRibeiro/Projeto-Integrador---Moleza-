<?php

if (isset($_POST['submit'])) {

include_once('config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$nome_produto = $_POST['nome_produto'];
if (!empty($name) && !empty($email) && !empty($mensagem) && !empty($nome_produto)){
$result = mysqli_query($conn, "INSERT INTO dados2(name, email, mensagem, nome_produto) VALUES ('$name', '$email', '$mensagem', '$nome_produto')");
}
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - Moleza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <script src="script.js" async="async"></script>
</head>

<body>

    <header class="header">
        <div id="menu-btn" class="fas fa-bars icons"></div>
        <div></div>

        <nav class="navbar">
            <a href="index.html">Início</a>
            <a href="cardapio.html">Cardápio</a>
            <span class="space"></span>
            <a href="sobre.html">Sobre</a>
            <a href="feedback.php">Feedback</a>
        </nav>

        <a></a>

        <a href="index.html" class="logo"><img src="images/Moleza_sem_fundo.png" alt=""></a>

        <form action="" class="search-form">
            <a></a>
            <a></a>
        </form>
    </header>
    

    <section class="contact" id="contact">
        <div class="heading2">
            <h3 data-aos="fade" data-aos-delay="300"> deixe seu feedback aqui! </h3>
            <h4 data-aos="fade" data-aos-delay="500">Sua opinião é muito importante para nós!</h4>
        </div>

        <div class="row">
            <div class="form">
                <form method="post" action="feedback.php">
                    <input data-aos="fade" data-aos-delay="300" type="text" placeholder="Nome completo" name="name"
                        class="box">
                    <input data-aos="fade" data-aos-delay="300" type="email" placeholder="Email" name="email"
                        class="box">
                    <textarea data-aos="fade" data-aos-delay="300" type="text" placeholder="Mensagem" name="mensagem"
                        class="box" cols="30" rows="10"></textarea>
                    <textarea data-aos="fade" data-aos-delay="300" type="text" placeholder="Lanche favorito" name="nome_produto"
                        class="box" cols="30" rows="10"></textarea>
                    <input data-aos="fade" data-aos-delay="300" type="submit" name="submit" data-bs-toggle="modal"
                        data-bs-target="#conf" value="enviar mensagem" class="btn">
                </form>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="links">
            <a href="index.html" class="btn">início</a>
            <a href="cardapio.html" class="btn">cardápio</a>
            <a href="sobre.html" class="btn">sobre</a>
            <a href="feedback.php" class="btn">feedback</a>
            <br>
            <p class="copy">Imagens meramente ilustrativas e sem fins lucrativos.</p>
        </div>
    </section>

    <script src="js/script.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>

        AOS.init({ duration: 800 });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

    </bod ppy>

</html>