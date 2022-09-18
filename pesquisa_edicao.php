<?php
require("controllers/funcoes_db.php");
require_once("includes/header.php");
echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";
$query = "";
$nomeprod = $_POST['busca_noticia_editar'];

$conexao = fazconexao();

$sql = "SELECT * FROM noticias WHERE (1=1) ";


if ($_POST['busca_noticia_editar'] != "") {
    $sql .= " AND titulo LIKE '%{$_POST['busca_noticia_editar']}%' OR texto LIKE '%{$_POST['busca_noticia_editar']}%'" ;
}



$resultados = ConsultaSelectAll($sql);

echo "<h1> Resultados para a busca </h1>";

echo "<form method='POST' action='pesquisa_edicao.php'>";
        echo "<input type='text' size= '26' name='busca_noticia_editar' id='busca_noticia_editar' placeholder='Nova busca'>";
        echo "<input type='submit' value='Buscar'><br><br>";
echo "</form>";

foreach ($resultados as $linha) {

?>
    <section>
        <form action="controllers/controller_noticia.php" method="post">
            <p>ID: <?php echo $linha['idnoticia']; ?></p>
            <input type="hidden" name="idnoticia" value="<?php echo $linha['idnoticia'] ?>">
            <?php
                echo '<img src="./imagens_noticias/'.$linha['nome_capa'].'">';
            ?>
            <p>Nova capa: <input type="file" name="arquivo_capa"></p>
            <p>Categoria: <input readonly type="text" name="mostra_categoria" value="<?php echo $linha['nomecategoria'] ?>"></p>
                <p>Nome do autor : <input placeholder="Eduardo" type="text" name="nome_autor" value="<?php echo $linha['nome']?>"></p>
                <p>Sobrenome do autor : <input placeholder="Silva" type="text" name="sobrenome_autor" value="<?php echo $linha['sobrenome']?>"></p>
                <p>Email do autor : <input placeholder="fulano@hotmail.com" type="email" name="email_autor" value="<?php echo $linha['email']?>"></p>
                <p>Título:  <input type="text" name="titulo_noticia" value="<?php echo $linha['titulo']?>"></p>
                <p>Subtítulo  : <input placeholder="Trem bala com Brad Pitt" type="text" name="subtitulo_noticia" value="<?php echo $linha['subtitulo']?>"></p>
                <textarea id="txtArea" name="texto_noticia" rows="10" cols="70"><?php echo $linha['texto']?></textarea>

            <button type="submit" name="botao" value="Editar"> Editar </button>
            <button type="submit" name="botao" value="Excluir" onclick="return confirma_excluir()"> Deletar </button>
        </form>
    </section>
<?php
}
echo "<button><a href='form_cad_noticia.php'>Cadastrar novas notícias</a></button>";

require_once("includes/footer.php");
?>