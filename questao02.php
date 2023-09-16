<?php
function questao02($A, $B, $C, $D) {
    if ($B > $C && $D > $A && ($C + $D) > ($A + $B) && $C > 0 && $D > 0 && $A % 2 == 0) {
        return "Valores aceitos";
    } else {
        return "Valores não aceitos";
    }
}
?>
