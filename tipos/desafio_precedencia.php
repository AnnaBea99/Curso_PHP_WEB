<div class="titulo">Desafio Precedência</div>

<?php
error_reporting(~E_WARNING);

echo '<p>1. Qual o valor será impresso?</p>';
echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3), '<br>';
echo 'Vai dar Infinito, a divisão por zero tende a dar infinito', '<br>';

echo '<p>2. Qual a expressão imprime o valor 100?</p>', '<br>';
echo 'a) ', (1 + 2) * 20 - 15, '<br>';
echo 'b) ', 4 * 5 ** 2, ' correta', '<br>';
echo 'c) ', 2 ** 3 ** 4 / 1e25, '<br>';
echo 'd) ', 3 + (3 * 8) / 2 - 3, '<br>';