<head>
    <title>Caverna da Quimera</title>
    <link rel="shortcut icon" href="midia/quimera_logo.ico">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estilo_header.css">
    <link rel="stylesheet" type="text/css" href="css/padrao.css">
    <script src="js/jQuery/jquery_base.js"></script>
    <script src="js/script.js"></script>
    <script>
        $("#menu-btn").click(function(){
        $(".mobile-menu").toggle();
    });
    </script>
    <link rel='stylesheet' type='text/css' href='css/bootstrap/bootstrap.css'>
    <script src="js/bootstrap/bootstrap.min.js"></script>
</head>
<header id="header">
    <h1 class="grid-container-header" id="header_cabecario_h1">
        <figure class="grid-item-header">
            <a id="header_img" href="index.php"><img width="80px" src="midia/quimera_logo.png" /></a>
        </figure>
        <a id="header_title" href="index.php"><span class="grid-item-header" id="header_titulo">Caverna da Quimera</span></a>
        <form class="grid-item-header" id="form-header-busca" method="POST" action="pesquisa.php">
            <input id="search_header" type="text" size="26" name="busca_assunto" placeholder="Procurar...">
        </form>
    </h1>
    <nav id="header_nav">
        <div id="desktop-nav">
        <ul>
            <li><a class="nav home nav-list-up" href="index.php">Home</a></li>
            <li><a class="nav nav-list-up filmes" href="index_filmes.php">Filmes</a></li>
            <li><a class="nav nav-list-up series" href="index_series.php">Séries</a></li>
            <li><a class="nav nav-list-up games" href="index_games.php">Games</a></li>
            <li><a class="nav nav-list-up livros" href="index_livros.php">Livros</a></li>
            <li><a class="nav nav-list-up hqs" href="index_hqs.php">Quadrinhos</a></li>
            <li class="dropdown_header">
                <a class="nav suporte nav-list-up" href="index_suporte.php">Suporte</a>
                <ul class="conteudo_dropdown_header">
                    <li><a class="nav redator nav-list-up" href="index_redator.php">Redator</a></li>
                </ul>
            </li>
            <?php
            session_start();
            if ((isset($_SESSION['email'])) && (isset($_SESSION['logado']))) {
                echo "<li id='botao_sair'><a class='btn' href='sair.php'>Sair</a></li>";
            }
            ?>
        </ul>
        </div>
        <div id="mobile-nav-full">



    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu">
        <button>&#9776</button>
        <?php
            if ((isset($_SESSION['email'])) && (isset($_SESSION['logado']))) {
                echo "<button id='botao_sair'><a href='sair.php'>Sair</a></button>";
            }
        ?>
        <ul>
            <li><a href="index.php" class="nav-list">Home</a></li>
            <li><a href="index_filmes.php" class="nav-list">Filmes</a></li>
            <li><a href="index_series.php" class="nav-list">Séries</a></li>
            <li><a href="index_games.php" class="nav-list">Games</a></li>
            <li><a href="index_livros.php" class="nav-list">Livros</a></li>
            <li><a href="index_hqs.php" class="nav-list">Quadrinhos</a></li>
            <li><a href="index_suporte.php" class="nav-list">Suporte</a></li>
            <li><a href="index_redator.php" class="nav-list">Redator</a></li>
        </ul>
    </div>
    </div>

    </nav>
</header>