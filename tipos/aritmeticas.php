<div class="titulo">Operações Aritméticas</div>

<?php
error_reporting(~E_WARNING);

echo 1 + 1, '<br>';

var_dump(1 + 1);
echo '<br>';

echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7,4), '<br>'; /*Ele tira as casas decimais */
echo round(7/4), '<br>'; /*Arredonda o valor da conta */
echo 7 % 4, '<br>'; /* % Mostra o resto */
echo 7 / 0, '<br>'; /*Valor infinito */
//echo intdiv(7,0); # erro! /* ele não continua a processar as coisas/mostrar os resultados */
echo 4**2, '<br>';

//Precedência de operadores

// () => ** (exponenciação) => / => * => + -

echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2, '<br>';