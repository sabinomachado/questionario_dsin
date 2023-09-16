<?php

$placa = "ABC1234";

function questao05($placa) {
    $regex = '/^[A-Z]{3}(?:\d{4}|\d[A-Z]\d{2})$/';

    if (preg_match($regex, $placa)) {
        $brasil = range(0, 9);
        $mercosul = range('A', 'J');
        $antepenultimo = substr($placa, -3, 1);
        $dois_ultimos = substr($placa, -2);
        $base = substr($placa, 0, 4);
        $padrao = in_array($antepenultimo, $brasil) ? "Brasil" : "Mercosul";
        echo $padrao;
        if($padrao == "Brasil"){
            $antepenultimo = str_replace($brasil, $mercosul, $antepenultimo);
        }else{
            $antepenultimo = str_replace($mercosul, $brasil, $antepenultimo);
        }

        $correspondente = substr($antepenultimo, -4);
        $nova_placa = $base . $correspondente . $dois_ultimos;

        return ["Padrão" => $padrao, "Correspondente" => $nova_placa];
    } else {
        return "Formato inválido";
    }
}

$resultado = questao05($placa);
if (is_array($resultado)) {
    echo "Padrão: " . $resultado["Padrão"] . "<br>";
    echo "Correspondente: " . $resultado["Correspondente"] . "<br>";
} else {
    echo $resultado;
}
?>
