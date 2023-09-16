<?php
function questao08($n) {
    $matriz = array();
    $valor = 5;
    
    for ($linha = 0; $linha < $n; $linha++) {
        for ($coluna = 0; $coluna < $n; $coluna++) {
            $matriz[$linha][$coluna] = $valor;
            $valor += 5;
        }
    }

    return $matriz;
}

function imprimirQuestao08($matriz) {
    $n = count($matriz);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            echo $matriz[$i][$j] . " ";
        }
        echo "<br>";
    }
}

$N = 5;
$matriz_caracol = questao08($N);
imprimirQuestao08($matriz_caracol);
?>
