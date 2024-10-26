<?php
    //Definindo os nomes de cada um dos elementos 

    //Definindo o HOST onde localhost é o servidor local
    define('HOST', 'localhost');
    //Definindo o Usuario padrao do MySQL
    define('USER', 'root');
    //Definindo a senha, que é em branco
    define('PASS', '');
    //Definindo o nome da base de dados que é "cadastro"
    define('BASE', 'cadastro');


    //Criando a Conexão com o banco de dados
    $conn = new MySQLi(HOST,USER,PASS,BASE);



