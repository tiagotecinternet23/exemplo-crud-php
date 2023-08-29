<?php
function formatarPreco( float $valor ):string {
    $valorFormatado = number_format($valor, 2, ",", ".");
    return "R$ " . $valorFormatado;

    // Poderia ser direto também (sem variável local):
    // return "R$ " .number_format($valor, 2, ",", ".");
}