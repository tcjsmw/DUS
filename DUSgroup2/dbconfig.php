<?php
try{
    define('DB_SERVER', 'myeusql.dur.ac.uk');
    define('DB_USERNAME','dqrs89');
    define('DB_PASSWORD','dqrs89ru34nner');
    define('DB_NAME','Xdqrs89_SE2_DUS');
    $dsn = "mysql:host=".DB_SERVER.";dbname=".DB_NAME;
    $pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("Unable to connect to database:".$e -> getMessage());
}
?>