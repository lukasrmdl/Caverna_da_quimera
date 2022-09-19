<footer>
<link rel="stylesheet" type="text/css" href="css/estilo_footer.css">
<link rel="stylesheet" type="text/css" href="css/padrao.css">


    <h1 class="grid-container-footer" id="footer_h1">
        <figure class="grid-item-footer">
            <img width="80px" src="midia/quimera_logo.png" />
        </figure>
        <span class="grid-item-footer" id="footer_titulo">Caverna da Quimera</span>
        <form class="grid-item-footer" id="form-footer-busca" method="POST" action="pesquisa.php">
            <input type="text" size= "26" name="busca_assunto" id="search_footer"  placeholder="Procurar...">
        </form> 
    </h1>

    <nav id="footer_nav">

        <ul>
            <li><a class="nav home" href="index.php">Home</a></li>
            <li><a class="nav filmes" href="index_filmes.php">Filmes</a></li>
            <li><a class="nav series" href="index_series.php">Séries</a></li>
            <li><a class="nav games" href="index_games.php">Games</a></li>
            <li><a class="nav livros" href="index_livros.php">Livros</a></li>
            <li><a class="nav hqs" href="index_hqs.php">Quadrinhos</a></li>
            <li><a class="nav suporte" href="index_suporte.php">Suporte</a></li>
        </ul>

    </nav>
    <div class="grid-container-footer-info" id="footer_info">
        <p class="grid-item-footer-info">© 2022 Caverna da Quimera - Cinema, Séries, Games, Livros e Quadrinhos</p>
        <button id="facebook" class="grid-item-footer-info rede_social" type="button"> <img src="midia/facebook.png" width="32" height ="auto" /></button>
        <button id="Instagram" class="grid-item-footer-info rede_social" type="button"> <img src="midia/instagram.png" width="32" height ="auto" /></button>
        <button id="Twitter" class="grid-item-footer-info rede_social" type="button"> <img src="midia/twitter.png" width="32" height ="auto" /></button>
    </div>
</footer>