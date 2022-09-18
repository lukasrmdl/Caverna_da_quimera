<?php
require("controllers/funcoes_db.php");
require_once("includes/header.php");
?>
<body id="games_body">

<?php

echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";

$conexao = fazconexao();


$sql = "SELECT * FROM noticias WHERE nomecategoria = 'Games'";


$resultados = ConsultaSelectAll($sql);

echo "<h1> Home >> Games </h1>";


foreach($resultados as $linha) {

?>
    <section>
        <form class="mostra_noticia" >

            <?php
                echo '<img src="./imagens_noticias/'.$linha['nome_capa'].'">';
            ?>
            <input name="idnoticia" type ="hidden" value="<?php echo $linha['idnoticia']?>">
            <p>Título:  <input readonly type="text" name="titulo_noticia" value="<?php echo $linha['titulo']?>"></p>
            <p>Subtítulo  : <input readonly placeholder="Trem bala com Brad Pitt" type="text" name="subtitulo_noticia" value="<?php echo $linha['subtitulo']?>"></p>
            <textarea disabled style="overflow:hidden; resize:none;" id="txtArea" name="texto_noticia" rows="4" cols="70"><?php echo $linha['texto']?></textarea>
            <p>Nome do autor : <input readonly placeholder="Eduardo" type="text" name="nome_autor" value="<?php echo $linha['nome']?>"></p>
            <p>Sobrenome do autor : <input readonly placeholder="Silva" type="text" name="sobrenome_autor" value="<?php echo $linha['sobrenome']?>"></p>
            <p>Email do autor : <input readonly placeholder="fulano@hotmail.com" type="email" name="email_autor" value="<?php echo $linha['email']?>"></p>

            <button onclick="window.location.href = 'http://localhost/caverna_da_quimera/Acesso_noticia.php?acessa_noticia=<?php echo $linha['idnoticia']?>'" form="mostra_noticia" type="submit" name="botao" value="Acessar" >Acessar</button>
        </form>
    </section>
</body>
<?php
}
echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";

require_once("includes/footer.php");
?>