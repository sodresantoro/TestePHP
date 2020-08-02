<!DOCTYPE html PUBLIC "-/W3C/DTD XHTML 1.0 Transitional/EN" "https:/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https:/www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>

<?php

$con1 = $link=mysql_connect("127.0.0.1", "root", "") or die("ERRO");
$base=mysql_select_db("teste_sodresantoro",$link)or die("Erro de Conexão com o Banco");

$sql_Categories = "SELECT * FROM categories ORDER BY nome ASC";
$query_result_Categories = mysql_query($sql_Categories);
$contador_Categories = mysql_num_rows($query_result_Categories);

echo"<font size='4' face='arial' color='#fff'>Categorias</font>
<select name='select' id='select'>";

While ($row = mysql_fetch_array($query_result_Categories)){
    echo"
    <option value='$row[id]'>$row[nome]</option>
  ";
}

if($contador_Categories == 0){
  echo"    <option value=''>Criar uma Categoria</option>
  ";
}
echo" </select>";

?>

</body>
</html>