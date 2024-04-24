<?php
try {
    //verificar persistencia nos valores
    // aceitar caracteres com acentos e cedilhas
    //levantar exceção ao criar sql com erros
    $options = array(

    PDO::ATTR_PERSISTENT => true,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8;',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
    $conexao = new 
    PDO("mysql:host=localhost;dbname=alexandree",
    "root","", $options);
    echo "Conexão realizada com sucesso";

} catch (PDOException $exc) {
    echo "Erro ao conectar ao banco ".$exc->getMessage();
}

 