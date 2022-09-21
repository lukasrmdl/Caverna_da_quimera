<?php
require("controllers/funcoes_db.php");
require_once("includes/header.php");
?>
<body id="filmes_body">
<?php

echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";

$conexao = fazconexao();


$sql = "SELECT * FROM noticias WHERE nomecategoria = 'Filmes'";


$resultados = ConsultaSelectAll($sql);

echo "<h1 class='espaco-titulo'> Home <img id='img_seta' src='./midia/flecha.svg'</img> Filmes </h1>";


foreach($resultados as $linha) {
?>
    
    <hr class="featurette-divider">
    
    <div class="row noticia-post d-flex">
      <div class="col-md-77 noticia-post-img">
        <?php echo '<img class="bd-placeholder-img bd-placeholder-img-lg  mx-auto" width="80%" height="100%" src="./imagens_noticias/'.$linha['nome_capa'].'" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" /></img>';?>
      </div>
      <div class="col-md-7 noticia-post-info">
        <input name="idnoticia" type ="hidden" value="<?php echo $linha['idnoticia']?>">
        <?php echo "<h2 name='titulo_noticia' class='noticia-post-titulo'>$linha[titulo]</h2>"?>
        <?php echo "<h3 class='noticia-post-subtitulo'>$linha[subtitulo]</h3>"?>
        <?php echo "<textarea disabled class='noticia-post-texto'>$linha[texto]</textarea><p><a class='btn2 btn-primary noticia-post-botao' href='http://localhost/caverna_da_quimera/Acesso_noticia.php?acessa_noticia=$linha[idnoticia]'>Ler mais</a></p>"?>
        <?php echo "<p class='noticia-post-autor'>Autor: $linha[nome] $linha[sobrenome], $linha[data]</p>" ?>
      </div>
    </div>
    <?php
            }
echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";

require_once("includes/footer.php");
?>