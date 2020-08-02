<?php

$tipo = $_POST["tipo"];
$nome = $_POST["nome"];
$id = $_POST["id"];
$data = date('d/m/Y - H:i:s');
    
if ($nome == ""){

    echo"<script>
        alert('Favor Digitar um Nome!');
        document.location.href='javascript:history.back()';
    </script>";
}

else{
    
    if ($tipo == "categoria"){

        $con1 = $link=mysql_connect("127.0.0.1", "root", "") or die("ERRO");
        $base=mysql_select_db("teste_sodresantoro",$link)or die("Erro de Conexão com o Banco");

        $sql_categoria=mysql_query("UPDATE categories SET nome='$nome', updated='$data' WHERE id='$id'");

        echo"<script>
                alert('Nome da Categoria Alterada!');
                document.location.href='/TestePHP';
            </script>";
    }

    if ($tipo == "produtos"){
        $select = $_POST["select"];

        $con1 = $link=mysql_connect("127.0.0.1", "root", "") or die("ERRO");
        $base=mysql_select_db("teste_sodresantoro",$link)or die("Erro de Conexão com o Banco");

        $sql_categoria=mysql_query("UPDATE products SET nome='$nome', category_id='$select', updated='$data' WHERE id='$id'");
        
        echo"<script>
                alert('Altera\u00e7\u00e3o Realizada!');
                document.location.href='/TestePHP';
            </script>";
    }

}

mysql_close($con1);

?>