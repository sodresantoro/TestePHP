<!DOCTYPE html PUBLIC "-/W3C/DTD XHTML 1.0 Transitional/EN" "https:/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https:/www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../css/styles.css">

<title>Criando tabelas no BD (teste_sodresantoro)</title>

</head>

<body>

<a href='/TestePHP' style='text-decoration:none;'>
<div id='voltar'>
    <font color='#fff'><center>Voltar</center></font>
</div>
</a>

<?php

/* substitua as variáveis abaixo pelas que se adequam ao seu caso */
$dbhost = 'localhost'; // endereco do servidor de banco de dados
$dbuser = 'root'; // login do banco de dados
$dbpass = ''; // senha
$dbname = 'teste_sodresantoro'; // nome do banco de dados a ser usado

$conecta = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);
$seleciona = mysql_select_db($dbname);

$sql_criatabela_categories = "CREATE TABLE categories (
                                            id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                                            nome VARCHAR(50) NOT NULL, 
                                            created VARCHAR(21) NOT NULL,
                                            updated VARCHAR(21) NOT NULL);";
$criatabela_categories = mysql_query( $sql_criatabela_categories, $conecta );

$sql_criatabela_products = "CREATE TABLE products (
                                            id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                            category_id int(11) NOT NULL,
                                            nome VARCHAR(50) NOT NULL, 
                                            created VARCHAR(21) NOT NULL,
                                            updated VARCHAR(21) NOT NULL);";
$criatabela_products = mysql_query( $sql_criatabela_products, $conecta );

// inicia a conexao ao servidor de banco de dados
if(! $conecta )
{
  die("<br>Nao foi possivel conectar: " . mysql_error());
}

echo "<center><div id='msgbd'>
<center><br><font size='20' color='#fff'>Conexao realizada!</font>";

// seleciona o banco de dados no qual a tabela vai ser criada
if (! $seleciona)
{
  die("<br><font size='3' color='#fff'>Nao foi possivel selecionar o banco de dados ($dbname) <br><br></font>");
}

echo "<br><font size='4' color='#fff'>selecionado o banco de dados ($dbname) <br></font>";

// finalmente, cria a tabela 
if(! $criatabela_categories )
{
  die("<br><font size='3' color='#fff'>Nao foi possivel criar a tabela: " . mysql_error());
}

if(! $criatabela_products )
{
  die("<br><font size='3' color='#fff'>Nao foi possivel criar a tabela: " . mysql_error());
}

echo "<br><font size='5' color='#fff'>As tabelas (categories e products) foram criadas!</font><br><br></center></div></center>";

// encerra a conexão
mysql_close($conecta);

?>

</body>

</html>

