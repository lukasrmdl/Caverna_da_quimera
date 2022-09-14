<head>
    <title>Caverna da Quimera</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estilo_header.css">
    <link rel="stylesheet" type="text/css" href="css/padrao.css">
</head>
<header>
    <h1 class="grid-container-header" id="header_cabecario_h1">
        <figure class="grid-item-header">
            <img width="80px" src="midia/quimera_logo.png" />
        </figure>
        <span class="grid-item-header" id="header_titulo">Caverna da Quimera</span>
        <form class="grid-item-header" id="form-header-busca" method="POST" action="pesquisa.php">
            <input type="text" size= "26" name="busca_assunto" id="busca_assunto" placeholder="Procurar...">
            <input type="submit" value="Buscar"><br><br>
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
        </ul>

    </nav>
</header>




