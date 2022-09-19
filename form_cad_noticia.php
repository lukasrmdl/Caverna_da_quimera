<?php     
        include("controllers/funcoes_db.php");
        $conexao=fazconexao();
        $query = "select * from categorias order by nome";
        $resultados=ConsultaSelectAll($query);
?>
<?php
require_once("includes/header.php");
echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";

?>

<html>
<script src="funcoes_ajax.js"> </script>

<body>
    <h1> Cadastar nova Notícia </h1>
    <hr class="featurette-divider">
    <div class="row featurette">
    <div class="col-md-7">
    <form action="controllers/controller_noticia.php" method="POST"  enctype="multipart/form-data">
        <select name="categoria_noticia" id="categoria_noticia"> 
            <option>Escolha a categoria</option>
        <?php
            foreach($resultados as $linha){
        ?>
            <option value=<?=$linha['nome']?>><?=$linha['nome']?></option>
        <?php
            }
        ?>
        </select>
        <p>Nome do autor : <input placeholder="Eduardo" type="text" name="nome_autor"></p>
        <p>Sobrenome do autor : <input placeholder="Silva" type="text" name="sobrenome_autor"></p>
        <p>Email do autor : <input placeholder="fulano@hotmail.com" type="email" name="email_autor"></p>
        <p>Título : <input placeholder="Trem bala com Brad Pitt" type="text" name="titulo_noticia"></p>
        <p>Subtítulo  : <input placeholder="Trem bala com Brad Pitt" type="text" name="subtitulo_noticia"></p>
        <label> Texto: <textarea placeholder="Descrição..." id="txtArea" name="texto_noticia" rows="10" cols="70"></textarea></label>
        <p>Capa: <input type="file" name="arquivo_capa"></p>
        <p><input type="reset" name="botao" value="Limpar">
            <input type="submit" name="botao" value="Cadastrar">
        </p>
    </form>
    </div>
    </div>
    <?php
    echo "<div id='msg'>";

    if (isset($_SESSION['msg'])) {
        echo "<br><br>" . $_SESSION['msg'] . "<br><br>";
        unset($_SESSION['msg']);
    }
    ?>
</body>

</html>

<?php
require_once("includes/footer.php");
?>