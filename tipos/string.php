<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma string', '<br>';

var_dump("Eu também"); /*Ele considera 10 caracteres, pois ele considera o acento, isso acontece por divergencias do utf-8 com String lang */
echo '<br>';

// Concatenação, ou seja, ele junta as palavras. Tem que deixar o espaço em branco para dar o espaço
echo "Nós também" . ' somos', '<br>';
echo "Também aceito", " virgulas", '<br>';

echo "'Teste '". '"Teste " '. '\'Teste\' ' . "\"Teste\" " . "\\"; //várias formas de usar as aspas e o outro coisa

print("<br> Função Print");
print"<br> Função Print";

//Algumas funções

echo '<br>' . strtoupper('maximizado'); // Deixa toas as letras em maiúsculo
echo '<br>' . strtolower("MINIMIZADO"); //Deixa as letras em minúsculo
echo '<br>' . ucfirst('só a primeira letra'); //Deixa a primeira letra em maiúsculo
echo '<br>' . ucwords("todas as palavras"); // Deixa as primeiras letras de todas as palavras em maiúsculo
echo '<br>' . strlen("Quantas letras?"); //Mostra a quantidade de caracteres. PS. se tiver caracteres especiais ele também conta como um
echo '<br>' . mb_strlen("Eu também", "utf-8"); //Essa função não considera o caracter especial, considera encode mais modernos
echo '<br>' . substr('Só uma parte mesmo', 7,6); //mostra os caracteres solicitados 7 é aonde começa e seis o número de casas que vai andar
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso'); // ele vai procurar a palavra e subtituir ela pela outra