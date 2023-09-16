<?php
function questao01($horasPorDia, $precoHora, $diasTrabalhados) {
    $imposto = 0.03;
    
    $salarioBruto = $horasPorDia * $precoHora * $diasTrabalhados;
    $desconto = $salarioBruto * $imposto;
    $salarioLiquido = $salarioBruto - $desconto;

    return [
        'salario_bruto' => $salarioBruto,
        'desconto' => $desconto,
        'salario_liquido' => $salarioLiquido,
    ];
}

?>

