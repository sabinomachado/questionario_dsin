<?php

function imprimeCentralizado($texto) {
    $larguraTotal = 60; // Largura total da linha de "|"s
    $textoCentralizado = str_pad($texto, $larguraTotal, ' ', STR_PAD_BOTH);
   
    echo "||" ."$textoCentralizado" ."||\n<br>";
}

// Título e Subtítulo
$titulo = "DSIN"; 
$sub_titulo = "TECNOLOGIA DA INFORMAÇÃO";
$espaco_titulo = strlen($titulo)/2;
$espaco_subtitulo = strlen($sub_titulo)/2;
echo str_repeat("|", 60) . "\n<br>";

//faltou adicionar os espaços em branco e concatenar com o echo da linha 7 para ficar com || ESPÇAÇO EM BRANCO $VALOR ESPÇAÇO EM BRANCO ||
imprimeCentralizado($titulo);
//faltou adicionar os espaços em branco e concatenar com o echo da linha 7 para ficar com || ESPÇAÇO EM BRANCO $VALOR ESPÇAÇO EM BRANCO ||
imprimeCentralizado($sub_titulo);

echo str_repeat("|", 60) . "\n";

?>
