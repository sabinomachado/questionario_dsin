<?php
$valor = 777;
$quantidades = questao03($valor);

function questao03($valor) {
    $notas = array(200, 100, 50, 20, 10, 5, 2, 1);
    $quantidades = array();

    foreach ($notas as $nota) {
        $quantidade = intval($valor / $nota);
        $quantidades[$nota] = $quantidade;
        $valor %= $nota;
    }

    return $quantidades;
}

echo "Para: $valor\n";
echo "Notas necessárias:\n";
foreach ($quantidades as $nota => $quantidade) {
    if ($quantidade > 0) {
        echo "$quantidade nota(s) de $nota\n";
    }
}
?>




