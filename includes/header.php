<head>
    <title>Caverna da Quimera</title>
    <link rel="shortcut icon" href="midia/quimera_logo.ico">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estilo_header.css">
    <link rel="stylesheet" type="text/css" href="css/padrao.css">
    <script src="js/jQuery/jquery_base.js"></script>
    <script src="js/script.js"></script>
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
            <input id="search_header" type="text" size= "26" name="busca_assunto"  placeholder="Procurar...">
        </form> 
    </h1>
    <nav id="header_nav">

        <ul>
            <li><a class="nav home" href="index.php">Home</a></li>
            <li><a class="nav filmes" href="index_filmes.php">Filmes</a></li>
            <li><a class="nav series" href="index_series.php">Séries</a></li>
            <li><a class="nav games" href="index_games.php">Games</a></li>
            <li><a class="nav livros" href="index_livros.php">Livros</a></li>
            <li><a class="nav hqs" href="index_hqs.php">Quadrinhos</a></li>
            <li class="dropdown_header">
                <a class="nav suporte" href="index_suporte.php">Suporte</a>
                <ul class="conteudo_dropdown_header">
                    <li><a class="nav redator" href="index_redator.php">Redator</a></li>
                </ul>
            </li>
            <?php 
            session_start();
            if((isset($_SESSION['email'])) && (isset($_SESSION['logado']))){
                echo "<li id='botao_sair'><a class='btn' href='sair.php'>Sair</a></li>";
            }
            ?>

        </ul>

    </nav>
</header>





