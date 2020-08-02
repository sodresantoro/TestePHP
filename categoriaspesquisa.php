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

$sql_Categories = "SELECT * FROM categories";
$query_result_Categories = mysql_query($sql_Categories);
$contador_Categories = mysql_num_rows($query_result_Categories);

echo"
<div id='categoriaspesquisa'>
<font size='4' face='arial' color='#fff'><center>Categorias Cadastradas: $contador_Categories</center></font></div>";

While ($row = mysql_fetch_array($query_result_Categories)){
    echo"
    <form action ='update.php' method='post' id='form1' name='form1' enctype='multipart/form-data' style='display: inline;'>
    
    <div id='categoriaspesquisa'>
        
      <font size='3' face='arial' color='#fff'>Nome:</font>    
      <input type ='text' name='nome' size='42'value='$row[nome]' style='border-radius:6px;text-align: center;color: #0000FF;'>        
              
      <input type ='text' name='id' value='$row[id]' hidden>
          
      <input type ='text' name='tipo' size='17' value='categoria' hidden>
      
      <button id='submitalterar'>Alterar</button>
      
    </div>	
  
  </form>
  ";
}

echo"</font></div>";

?>

</body>
</html>