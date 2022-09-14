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
        <form action="controllers/controller_noticia.php" method="post">

            <p>Título: <input readonly type="text" name="titulo_noticia" value="<?php echo $linha['titulo'] ?>"></p>
            <p>Categoria: <input readonly type="text" name="titulo_noticia" value="<?php echo $linha['nomecategoria'] ?>"></p>
            <p>Data: <input readonly type="date" name="data_noticia" value="<?php echo $linha['data'] ?>" ?></p>
            <label> Descrição: <textarea readonly id="txtArea" name="desc_noticia" rows="10" cols="70" ><?php echo $linha['descricao'] ?></textarea></label>

            <button type="submit" name="botao" value="Acessar"> Acessar </button>
        </form>
    </section>
</body>
<?php
}
echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";

require_once("includes/footer.php");
?>