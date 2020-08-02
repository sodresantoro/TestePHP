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

$sql_products = "SELECT * FROM products
                    LEFT JOIN categories ON categories.id = products.category_id";
$query_result_products = mysql_query($sql_products);
$contador_products = mysql_num_rows($query_result_products);

echo"
<div id='categoriaspesquisa'>
<font size='4' face='arial' color='#fff'><center>Produtos Cadastrados: $contador_products</center></font></div>";

While ($row = mysql_fetch_array($query_result_products)){
    echo"
    <form action ='update.php' method='post' id='form1' name='form1' enctype='multipart/form-data' style='display: inline;'>
    
    <div id='categoriaspesquisa'>
        
      <font size='3' face='arial' color='#fff'>Nome:</font>    
      <input type ='text' name='nome' size='42'value='$row[2]' id='inputprodutos'>        
              
      <input type ='text' name='id' value='$row[0]' hidden>
          
      <input type ='text' name='tipo' size='17' value='produtos' hidden>
      <br>
      <br>
      <font size='3' face='arial' color='#fff'>Categoria:</font>
      <select name='select' id='selectprodutos'>
        <option value='$row[category_id]'>$row[nome]</option>
      ";

      $sql_Categories = "SELECT * FROM categories ORDER BY nome ASC";
      $query_result_Categories = mysql_query($sql_Categories);

      While ($row2 = mysql_fetch_array($query_result_Categories)){
        if($row['nome'] != $row2['nome']){
        echo"    <option value='$row2[id]'>$row2[nome]</option>
        ";
        } 

      }      

      echo"
        
      </select>
      <br>
      <br>
      <button id='submitalterarprodutos'>Alterar</button>
      
    </div>	
  
  </form>
  ";
}

echo"</font></div>";

?>

</body>
</html>