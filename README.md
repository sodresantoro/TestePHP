# Teste PHP

## O que deve ser feito

O teste consiste em fazer uma aplicação onde o usuário possa criar categorias e produtos.

- 1º - CRUD de categoria "categories" -> (id, name, created, updated);
- 2º - CRUD de produto vinculando uma categoria "products" -> (id, category_id, name, created, updated);

OBS:
- Deve ser feito em php puro 'sem framework';
- O banco de dados deve ser mysql;
- O projeto deve conter uma pasta chamada "mysql" e lá colocar o "create table" das tabelas usadas;
- Iremos avaliar o Frontend e Backend;
- Altere o README com as instruções para executar seu projeto;

## Forma de envio

- Fazer fork do projeto;
- Criar um branch com o seguinte nome "teste_php_NOME_SOBRENOME";
- Fazer pull request para o branch "teste_php" do projeto de origem;

## Diferenciais
- Seguir as PSR's;
- Utilizar composer;
- Teste unitário;
======================================================================
1º Criar o banco (teste_sodresantoro) no Mysql "usuário= root, sem senha";
2º Dentro da Pasta MySQL possui um script para criar as tabelas, ou pode ser criada pela propria aplicação, na tela inicial;
3º Todo Projeto esta na mesmo diretório, incluindo CSS e IMG(imagem);