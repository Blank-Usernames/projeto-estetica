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

# echo "<h2>{$email}</h2>";

# 1. Conectando ao Banco de Dados via PDO()
$conexao = new PDO( "mysql:host=db;dbname=estetica_t99;port=3306","root","root" );

# 2. Instrução SQL
$sql_create_table = "CREATE TABLE IF NOT EXISTS estetica_t99.news ( 
    id_news INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(254) NOT NULL UNIQUE,
    validado INT(1) NOT NULL DEFAULT 0,
    opt_out ENUM('sim','não') NOT NULL DEFAULT 'sim',
    data_criacao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
)";

$sql_insert_email = "INSERT INTO estetica_t99.news (email)
VALUES (?)";

# 3. Executar o comando através da conexão
$executar = $conexao -> prepare($sql_insert_email);
$executar->execute([$email]);
?>