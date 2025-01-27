<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="/css/FooterEfect.css">
    <link rel="stylesheet" href="/css/Footer.css">
    <link rel="stylesheet" href="/css/menutest.css">
    <link rel="stylesheet" href="/css/carruselp.css">
    
    <link rel="stylesheet" href="/css/contenindex.css">
    <link rel="stylesheet" href="/css/local.css">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>LISMI CAKE’S</title>
</head>

<body class="holy-grail">
    <header>
        <?php
        include("menu_footer/menumain.html");
        ?>
    </header>

    <div class="holy-grail-body ">
        <section class="holy-grail-content">
            <div class="container">
                <?php
                include("contenido/CarruselPrincipal.html");
                include("contenido/contenidoindex.html");
                ?>
            </div>
        </section>




    </div>

    <footer>
        <?php
        include("menu_footer/footerefects.html");
        ?>
    </footer>
    <script src="/JS/Carrusel.js"></script>
    <script src="/JS/contenidoP.js"></script>
    <script src="/JS/contentindex.js"></script>
    <script src="/JS/logo.js"></script>
    <script src="/JS/animacionpag.js"></script>
</body>

</html>