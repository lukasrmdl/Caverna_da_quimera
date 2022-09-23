<?php
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
require("controllers/funcoes_db.php");
require_once("includes/header.php");
?>
<body id="games_body">
<?php

echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";

$conexao = fazconexao();


$sql = "SELECT * FROM noticias WHERE nomecategoria = 'Games' ORDER BY idnoticia DESC;";


$resultados = ConsultaSelectAll($sql);

echo "<h1 class='espaco-titulo'> Home <img id='img_seta' src='./midia/flecha.svg'></img> Games </h1>";


foreach($resultados as $linha) {
    ?>
    
    <hr class="featurette-divider">
    
    <div class="row noticia-post d-flex">
      <div class="col-md-77 noticia-post-img">
        <?php echo '<img id="img_acesso_full" class=" mx-auto-2" width="100%" height="auto" src="./imagens_noticias/'.$linha['nome_capa'].'" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" /></img>';?>
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