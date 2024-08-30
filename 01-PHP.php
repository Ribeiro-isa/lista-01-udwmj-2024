<?php
// Função para verificar se um número é par ou ímpar
function verificarParOuImpar($numero) {
    if ($numero % 2 == 0) {
        return "O número $numero é par.";
    } else {
        return "O número $numero é ímpar.";
    }
}

// Testando a função
echo verificarParOuImpar(7); // Saída: O número 7 é ímpar.
echo "\n";
echo verificarParOuImpar(10); // Saída: O número 10 é par.
?>
