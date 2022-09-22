<?php
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
require_once("includes/header.php");
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/padrao.css">
</head>
<body>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="midia/quimera_logo.png" alt="" width="72" height="67">
      <h2>Cadastro de novos Redatores</h2>
    </div>
    <form action="controllers/controller_redator.php" method="POST" enctype="multipart/form-data">


        <div class="col-md-7 col-lg-5">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Lukas">
            <div class="invalid-feedback">
            Por favor informe um nome válido.
            </div>
        </div>

        <div class="col-md-7 col-lg-5">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="teste@hotmail.com">
            <div class="invalid-feedback">
            Por favor informe um email válido.
            </div>
        </div>

        <div class="col-md-7 col-lg-5">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="senha" placeholder="**********">
            <div class="invalid-feedback">
            Por favor informe um email válido.
            </div>
        </div>

        <div class="col-md-77 col-lg-5">
        <label for="file" class="form-label input">Arquivo de imagem</label>
        <input type="file" id="file" name="arquivo">
        </div>

        <div style="margin-top:-3em;" class="col-md-777 col-lg-5">
        <p><input class="btn btn-secondary col-lg-3 " type="reset" name="botao" value="Limpar">
            <input class="btn btn-primary col-lg-3 " type="submit" name="botao" value="Cadastrar">
        </p>
        </div>





    </form>
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