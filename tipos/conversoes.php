<div class="titulo">Conversões</div>

<?php
error_reporting(~E_WARNING);
echo is_int(PHP_INT_MAX);

//int para float
echo '<p>Int para Float</p>'; 
var_dump(PHP_INT_MAX + 1);

echo '<br>';
var_dump(1 + 1.0);

echo '<br>';
var_dump((float) 3); //conversão explicita, converter um número inteiro para float não perde informações

//float para int
echo '<p>Float para Int</p>';
var_dump((int) 6.8); //perde informações ao ser convertido para inteiro

echo '<br>';
var_dump(intval(2.8,10));
var_dump(intval('010111000',2));
echo '<br>';
var_dump((int) round(2.8));

//OP com String
echo '<p>String</p>';
var_dump(3 + "2");
echo '<br>';
var_dump("3" . 2); //O ponto é a concatenação
echo '<br>', is_string("3" . 2);
echo '<br>', is_string("3" + 2);
echo '<br>';
var_dump(1 + "cinco"); //da erro
echo '<br>';
var_dump(1 + "5 cinco"); //da erro

echo '<br>';
var_dump(1 + "2.3");
echo '<br>';
var_dump(1 + "-2.3e3");
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");