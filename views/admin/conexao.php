<?php
$servername = "localhost"; //padrão - server local
$database = "baseteste"; //alterar conforme o nome do seu baco de dados
$username = "root"; //padrão - root
$password = ""; //senha de conexão do banco de dados
//Create Connection
$conexao = mysql_connect($servername, $username, $password, $database);
?> 
