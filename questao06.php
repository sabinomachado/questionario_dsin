<?php

function numeroPerfeito($numero) {
    $soma = 0;
    for ($i = 1; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }
    return $soma == $numero;
}     

function multiplo($numero, $divisor) {
    return $numero % $divisor == 0;
}

function raizQuadradaInteira($numero) {
    $raiz = sqrt($numero);
    return floor($raiz) == $raiz;
}

function gerarSequencia($n) {
    for ($i = 1; $i <= $n; $i++) {
        echo "Número $i: ";
        $mensagens = [];

        if (numeroPerfeito($i)) {
            $mensagens[] = "Número Perfeito!";
        }
        if (multiplo($i, 3)) {
            $mensagens[] = "Múltiplo de 3!";
        }
        if (multiplo($i, 5)) {
            $mensagens[] = "Múltiplo de 5";
        }
        if (raizQuadradaInteira($i)) {
            $mensagens[] = "Raiz Inteira";
        }

        echo implode(", ", $mensagens);
        echo "<br>";
    }
}

$sequencia = 20;
gerarSequencia($sequencia);

?>
