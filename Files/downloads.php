<?php

// $conteudo = file_get_contents('file.txt');

// if ($conteudo) {
//     echo $conteudo;
// } else {
//     echo "Erro ao abrir o arquivo";
// }

$url = 'https://www.php.net/support';
$conteudo = file_get_contents($url);
if ($conteudo) {
    echo $conteudo;
    file_put_contents("help.html", $conteudo, FILE_APPEND);
} else {
    echo "Erro ao abrir o arquivo";
}
