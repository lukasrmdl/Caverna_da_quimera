<footer>
<link rel="stylesheet" type="text/css" href="css/estilo_footer.css">
<link rel="stylesheet" type="text/css" href="css/padrao.css">


    <h1 class="grid-container-footer" id="footer_h1">
        <figure class="grid-item-footer">
            <img width="80px" src="midia/quimera_logo.png" />
        </figure>
        <span class="grid-item-footer" id="footer_titulo">Caverna da Quimera</span>
        <form class="grid-item-footer" id="form-footer-busca" method="POST" action="pesquisa.php">
            <input type="text" size= "26" name="busca_assunto" id="busca_assunto" placeholder="Procurar...">
            <input type="submit" value="Buscar"><br><br>
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
            <li class="dropdown_footer">
                <a class="nav suporte" href="index_suporte.php">Suporte</a>
                <ul class="conteudo_dropdown_footer">
                    <li><a class="nav redator" href="index_redator.php">Redator</a></li>
                </ul>
        </ul>

    </nav>
    <div id="footer_info">
        <p>© 2022 Caverna da Quimera - Cinema, Séries, Games, Livros e Quadrinhos</p>
        <a href="http://www.facebook.com">Facebook</a>
        <a href="http://www.instagram.com">Instagram</a>
        <a href="http://www.twitter.com">Twitter</a>
    </div>
</footer>