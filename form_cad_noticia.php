<?php     
        include("controllers/funcoes_db.php");
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        $conexao=fazconexao();
        $query = "select * from categorias order by nome";
        $resultados=ConsultaSelectAll($query);
?>
<?php
require_once("includes/header.php");
echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";

?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="funcoes_ajax.js"> </script>

<body>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="midia/quimera_logo.png" alt="" width="72" height="67">
      <h2>Cadastrar nova notícia</h2>
      <p class="lead">Preencha o formulário abaixo para concluir o cadastro.</p>
    </div>
    <div class="row featurette">
    <div class="col-md-7">
    <hr class="featurette-divider">

    <form action="controllers/controller_noticia.php" method="POST"  enctype="multipart/form-data">

            <div class="col-md-5 col-lg-12">
              <label for="categoria_noticia" class="form-label">Categoria</label>
              <select name="categoria_noticia" class="form-select" id="categoria_noticia" required>
              <?php
                echo "<option disabled selected>Escolha a categoria</option>";
                foreach($resultados as $linha){
                ?>
                <option value=<?=$linha['nome']?>><?=$linha['nome']?></option>
                <?php
                }
                ?>
              </select>
            </div>
        <div class="row g-3">

        <div class="col-sm-6">
              <label for="firstName" class="form-label">Nome do autor</label>
              <input name="nome_autor" type="text" class="form-control" id="firstName" placeholder="Eduardo" value="" required>

        </div>

        <div class="col-sm-6">
              <label for="lastName" class="form-label">Sobrenome do autor</label>
              <input name="sobrenome_autor" type="text" class="form-control" id="lastName" placeholder="Silva" value="" required>

        </div>

        </div>

        <div class="col-12">
              <label for="email" class="form-label">Email do autor</label>
              <input name="email_autor" type="email" class="form-control" id="email" placeholder="fulano@hotmail.com">
        </div>


        <div class="row g-3">

        <div class="col-sm-6">
              <label for="firstName" class="form-label">Título</label>
              <input name="titulo_noticia" type="text" class="form-control" id="firstName" placeholder="Trem bala com Brad Pitt" value="" required>

        </div>

        <div class="col-sm-6">
              <label for="lastName" class="form-label">Subtítulo</label>
              <input name="subtitulo_noticia" type="text" class="form-control" id="lastName" placeholder="É um sucesso" value="" required>

        </div>

        </div>

        <div style="margin-top:1em;" class="col-12 col-lg-12">
              <label for="txtArea" class="form-label"></label>
              <textarea placeholder="Descrição da notícia..."  style="border-radius:5px ;" name="texto_noticia" class="form-text" id="txtArea" rows="10" cols="70" required></textarea>
         </div>

        <div>
        <label for="file" class="form-label input">Capa da matéria</label>
        <input type="file" id="file" name="arquivo_capa">
        </div>

            <input id="button-cadastrar-noticia" class="w-100 btn btn-primary btn-md" type="submit" name="botao" value="Cadastrar">
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