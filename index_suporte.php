<?php
require_once("includes/header.php");
require("controllers/funcoes_db.php");
echo "<link rel='stylesheet' type='text/css' href='css/padrao.css'>";
$conexao = fazconexao();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">
    <script src="js/funcoes_ajax.js"></script>
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-dark">
    
<div class="container">
  <main>
  <?php
    session_start();

    ?>
    <?php
    echo "<div style='text-align:center; id='msg'>";

    if (isset($_SESSION['msg'])) {
        echo "<br><br>" . $_SESSION['msg'] . "<br><br>";
        unset($_SESSION['msg']);
    }
    ?>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="midia/quimera_logo.png" alt="" width="72" height="67">
      <h2>Entre em contato conosco! </h2>
      <p class="lead">Preencha o formulário abaixo para que a nossa equipe possa receber o seu Feedback.</p>
    </div>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Informações pessoais</h4>
        <form class="needs-validation" action="controllers/controller_suporte.php" method="POST" enctype="multipart/form-data novalidate">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Primeiro nome</label>
              <input name="nome_usuario" type="text" class="form-control" id="firstName" placeholder="Eduardo" value="" required>
              <div class="invalid-feedback">
                Um nome válido é necessário.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Ultimo nome</label>
              <input name="sobrenome_usuario" type="text" class="form-control" id="lastName" placeholder="Lima" value="" required>
              <div class="invalid-feedback">
              Um ultimo nome válido é necessário.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Nome de usuário</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Nome de usuário" required>
              <div class="invalid-feedback">
              Um nome de usuário válido é necessário.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Opcional)</span></label>
              <input name="email_usuario" type="email" class="form-control" id="email" placeholder="voce@exemplo.com">
              <div class="invalid-feedback">
                Por favor informe um email válido.
              </div>
            </div>

            <div class="col-12">
              <label for="endereco" class="form-label">Endereço</label>
              <input name="endereco_usuario" type="text" class="form-control" id="endereco" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Por favor informe o seu endereço.
              </div>
            </div>

            <div class="col-12">
              <label for="logradouro" class="form-label">Logradouro <span class="text-muted">(Opcional)</span></label>
              <input name="logradouro_usuario" type="text" class="form-control" id="logradouro" placeholder="Apartamento">
            </div>

            <div class="col-md-5">
              <label for="estado" class="form-label">Estado</label>
              <select name="estado_usuario" class="form-select" id="estados" required>
                <?php
                  echo '<option selected disabled>Selecione o estado</option>';
                  $sql = "SELECT * FROM estados ORDER BY nome ASC";
                  $resultados = ConsultaSelectAll($sql);
                    foreach($resultados as $estados){
                      echo '<option value="'.$estados['id'].'">'.$estados['nome'].'</option>';
                    }
                ?>

              </select>
              <div class="invalid-feedback">
                Por favor selecione um estado.
              </div>
            </div>

            <div class="col-md-4">
              <label for="cidade" class="form-label">Cidade</label>
              <select name="cidade_usuario" class="form-select" id="cidades" required>
                <option selected disabled value="">-</option>
              </select>
              <div class="invalid-feedback">
                Por favor selecione uma cidade.
              </div>
            </div>

            <div class="col-md-3">
              <label for="cep" class="form-label">Cep</label>
              <input name="cep_usuario" type="text" class="form-control" id="cep" placeholder="00000-000" required>
              <div class="invalid-feedback">
                codigo CEP é necessário.
              </div>
            </div>
          </div>

          <h4 class="mb-4 espaco-titulo-2">Informações pessoais</h4>

          <div class="col-12">
              <label for="erro_assunto" class="form-label">Escolha um Assunto</label>
              <select name="erro_assunto" class="form-select" id="erro_assunto" required>
                <option value="">-</option>
                <option value="lentidao">Estou enfrentando problemas com lag ou lentidão ao carregador os dados no site.</option>
                <option value="css">O design do site está sendo mostrado de maneira incorreta, dificultando minha navegação</option>
                <option value="funcionalidade">Uma função do site não está respondendo aos comandos ou funcionando da maneira correta.</option>
                <option value="outros">Outros.</option>

              </select>
              <div class="invalid-feedback">
                Por favor selecione um assunto.
              </div>
            </div>
          
            <div class="col-12 espaco-titulo-2">
              <label for="erro_desc" class="form-label">Descreva o erro</label>
              <textarea style="border-radius:5px ;" name="erro_descricao" class="form-text" id="erro_desc" required></textarea>
              <div class="invalid-feedback">
                Por favor descreva o erro.
              </div>
            </div>

          <hr class="my-4">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Salvar informação para a proxima vez</label>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" value="enviar" name="botao" type="submit">Enviar Solicitação</button>
        </form>
        </div>
      </div>
  </main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
<script>
$("#estados").on("change",function(){
  var idEstado = $("#estados").val();
  $.ajax({
    url:'pega_cidades.php',
    type: 'POST',
    data:{id:idEstado},
    beforeSendo: function(){
      $("#cidades").html("Carregando...");
    },
    success: function(data) {
      $("#cidades").html(data);
    }
  });
});
</script>
<?php
require_once("includes/footer.php");
?>