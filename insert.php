<?php

$tipo = $_POST["tipo"];
$nome = $_POST["nome"];
$data = date('d/m/Y - H:i:s');

if ($nome == ""){

    echo"<script>
        alert('Favor Digitar um Nome!');
        document.location.href='javascript:history.back()';
    </script>";
}

else{

    $con1 = $link=mysql_connect("127.0.0.1", "root", "") or die("ERRO");
    $base=mysql_select_db("teste_sodresantoro",$link)or die("Erro de Conexão com o Banco");

    //Inicio count dados cadastrados
    if ($tipo == "categoria"){

        $sql_Categories = "SELECT * FROM categories WHERE nome ='$nome' ";
        $query_result_Categories = mysql_query($sql_Categories);
        $contador_Categories = mysql_num_rows($query_result_Categories); 
    // Fim Count

        if ($contador_Categories >0){

            echo"<script>
                alert('Categoria Ja Cadastrada!');
                document.location.href='javascript:history.back()';
            </script>";
        }

        else{
            $sql_insert_categoria = "INSERT INTO categories (nome, created)  VALUES ('$nome', '$data') ";
            $query_result = mysql_query($sql_insert_categoria);

            echo"<script>
                alert('Categoria Cadastrada!');
                document.location.href='/TestePHP';
            </script>";
        }
    }

    if ($tipo == "produtos"){
        $select = $_POST["select"];

        if ($select == ""){

            echo"<script>
                alert('Favor Criar um Categoria!');
                document.location.href='javascript:history.back()';
            </script>";
        }
        
        else{

            $sql_insert_categoria = "INSERT INTO products (nome, created, category_id)  VALUES ('$nome', '$data', '$select') ";
            $query_result = mysql_query($sql_insert_categoria);

            echo"<script>
                    alert('Produto Cadastrada!');
                    document.location.href='/TestePHP';
                </script>";
        }
    }

}

?>