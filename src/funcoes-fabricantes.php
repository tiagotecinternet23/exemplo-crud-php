<?php
/* Importando o script de conexão
require_once garante que a importação
é feita somente uma vez. */
require_once "conecta.php";

// Usada em fabricantes/visualizar.php
function lerFabricantes( PDO $conexao ){
    $sql = "SELECT * FROM fabricantes ORDER BY nome";
    
    $conexao->prepare($sql);
}