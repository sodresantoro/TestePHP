<!DOCTYPE html PUBLIC "-/W3C/DTD XHTML 1.0 Transitional/EN" "https:/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https:/www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<title>Teste PHP - Eduardo Melo</title>

</head>

<body>

<div id='header'>
    <img src='img/logo.png' style='margin:10px;'>
</div>

<div id='criabd'>
    <a href='mysql' style='text-decoration:none;'>
    <font color='#fff' size='3'><center>Criar Tabelas (categories e products)</center></font>
    </a>
</div>
                                        <!--Inicio Categorias -->
<button type="button" class="categorias" id='button' data-element="#divcategorias">Categorias</button>

<div id="divcategorias" style="display: none;">
    <div id='contentcategoria'>

        <button type="button" class="categoriascria" id='button2' data-element="#divcategoriascria">Categorias > Criar</button>
            <div id="divcategoriascria" style="display: none;">
                
                <div id='contentcategoria2'>
                    <form method="POST" action="insert.php">
                
                    <center>
                    <br>                     
                    <input type ='text' name='nome' placeholder='Nome da Categoria' id='input' size='50'>
                    <input type ='text' name='tipo' value='categoria' hidden>
                    <br><br>
                    <input type='submit' value='Salvar' id='submit'>
                    <br><br>
                    </center>

                    </form>
                </div>
               
            </div>

        <button type="button" class="categoriaspesquisa" id='button2' data-element="#divcategoriaspesquisa" onclick="loadcategoriaspesquisa()">Categorias > Pesquisar</button>
            <div id="divcategoriaspesquisa" style="display: none;">
                <div id='contentcategoria2'>                
                
                <div id="resultadocategoria"></div>
                    
                </div>
            </div>           

        <script>
        function loadcategoriaspesquisa() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("resultadocategoria").innerHTML =
            this.responseText;
            }
        };
        xhttp.open("GET", "categoriaspesquisa.php", true);
        xhttp.send();
        }
        </script>

    </div>
   
</div>
                                        <!--fim Categorias -->

                                        <!--Inicio Produtos -->
<button type="button" class="produtos" id='button' data-element="#divprodutos">Produtos</button>

<div id="divprodutos" style="display: none;">
    <div id='contentcategoria'>

            <button type="button" class="categoriascria" id='button2' data-element="#divprodutoscria" onclick="loadprodutospesquisa_categorias()">Produtos > Criar</button>
                <div id="divprodutoscria" style="display: none;">
                    
                    <div id='contentcategoria2'>
                        <form method="POST" action="insert.php">
                    
                        <center>
                        <br>
                        
                        <div id="resultadoprodutos_categorias"></div>
                       
                        <br>                     
                        <input type ='text' name='nome' placeholder='Nome do Produto' id='input' size='50'>
                        <input type ='text' name='tipo' value='produtos' hidden>
                        <br><br>
                        <input type='submit' value='Salvar' id='submit'>
                        <br><br>
                        </center>
                        
                    </div>
                    
                    </form>
                
                </div>

            <button type="button" class="categoriaspesquisa" id='button2' data-element="#divprodutospesquisa" onclick="loadprodutospesquisa()">Produtos > Pesquisar</button>
                <div id="divprodutospesquisa" style="display: none;">
                    <div id='contentcategoria2'>                
                    
                    <div id="resultadoprodutos"></div>
                        
                    </div>
                </div>           

            <script>
            function loadprodutospesquisa() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("resultadoprodutos").innerHTML =
                this.responseText;
                }
            };
            xhttp.open("GET", "produtospesquisa.php", true);
            xhttp.send();
            }

            function loadprodutospesquisa_categorias() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("resultadoprodutos_categorias").innerHTML =
                this.responseText;
                }
            };
            xhttp.open("GET", "produtospesquisa_categorias.php", true);
            xhttp.send();
            }
            </script>

        </div>

                                            <!--fim Produtos -->

    <script type="text/javascript">
            $(function() {

            $(".categorias").click(function(e) {
                e.preventDefault();
                el = $(this).data('element');
                $(el).toggle();
            });
            
            $(".categoriascria").click(function(e) {
                e.preventDefault();
                el = $(this).data('element');
                $(el).toggle();
            });
            
            $(".categoriaspesquisa").click(function(e) {
                e.preventDefault();
                el = $(this).data('element');
                $(el).toggle();
            });
            
            $(".produtos").click(function(e) {
                e.preventDefault();
                el = $(this).data('element');
                $(el).toggle();
            });

            $(".produtoscria").click(function(e) {
                e.preventDefault();
                el = $(this).data('element');
                $(el).toggle();
            });
            
            $(".produtospesquisa").click(function(e) {
                e.preventDefault();
                el = $(this).data('element');
                $(el).toggle();
            });

            });
    </script>

</div>

</body>
</html>

