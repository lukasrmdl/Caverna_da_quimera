<?php
require_once("includes/header.php");
require("controllers/funcoes_db.php");
$conexao = fazconexao();
$sql = "SELECT * FROM cidades WHERE estados_id = '".$_POST['id']."'";
$pegaCidade = ConsultaSelectAll($sql); 
    echo '<option selected disabled value="">Selecione a cidade</option>';
    foreach($pegaCidade as $cidades){
        echo '<option>'.$cidades['nome'].'</option>';
    }
?>