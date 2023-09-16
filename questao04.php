<?php
$a = 1;
$b = 2;
$c = 3;

function questao04($a, $b, $c) {
    if ($a == 0 && $b == 0 && $c != 1) {
        echo "Solução Impossível";
    } elseif ($a == 0 && $b == 0 && $c == 1) {
        echo "Indeterminado!";
    } else {
        $x = (1 - $c) / ($a + $b);
        echo "O Valor de X é: " . $x;
    }
}

questao04($a, $b, $c);
?>
