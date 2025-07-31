<?php
// PHP //

# Sintaxe
// Entrada de dados é feita pela tag <form> no HTML
// Comandos de saída

// echo '<h1> Seu texto aqui </h1>';
// print('<h1>print("Hello World!")</h1>');

# Supervariável $_POST
// "Dumpar" expõe o contéudo de um vetor (array)

// var_dump($_POST);

# Tipos de Variáveis
// string | "texto"
// number | 10 5.5 -6
// boolean | true false
// object |
// array |
// null | literalmente não tem nada aqui, nem 0, nem ""

$email = $_POST['email'];

echo "<h2>{$email}</h2>";

?>