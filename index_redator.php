<?php
require_once("includes/header.php");
echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";
?>

<html>

<body>
    <?php
    session_start();

    ?>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="midia/quimera_logo.png" alt="" width="72" height="67">
      <h2>Login</h2>
    </div>
    <form action="controllers/controller_redator.php" method="POST">

    <div class="col-md-7 col-lg-5">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="redator@quimera.com">
        <div class="invalid-feedback">
        Por favor informe um email válido.
        </div>
    </div>

    <div style="margin-top: 0.5em;" class="col-md-7 col-lg-5">
        <label for="senha" class="form-label">Senha</label>
        <input  type="password" name="senha" class="form-control" id="senha" placeholder="********">
        <div class="invalid-feedback">
        Por favor informe a sua senha.
        </div>
    </div>
    <div style="margin-top:1em;" class="col-md-77 col-lg-5">
        <input class="btn btn-primary col-lg-3 " type="submit" name="botao" value="Logar">
        <input class="btn btn-secondary col-lg-3 "  type="reset" name="botao" value="Limpar">
        <a id="link_novoregistro_login" href="form_cad_redator.php" class="botao_novo_cadastro_login btn btn-primary col-lg-5 ">Novo Redator</a>

    </div>

    </form >
    <div id='msg'>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
    </div>
</body>

</html>

<?php
require_once("includes/footer.php");
?>