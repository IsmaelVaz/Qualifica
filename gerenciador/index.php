<?php
require_once("conection.php");

?>
<!DOCTYPE html>
<html ng-app="app" lang="pt-br">
  <head>
        <meta charset="utf-8">
        <script src="_js/angular-min.js"></script>
        <script src="_js/ajax.js"></script>
        <script src="_js/dadosController.js"></script>
        <script	src="_js/app.js"></script>
        <link rel="stylesheet" type="text/css" href="_css/bootstrap.css">
        
      <title>Gerenciador</title>
      <style type="text/css">
        .jumbotron{
            width:auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            text-align: center;
        }
        .form-control{
            margin-bottom: 5px;
        }
        input[type="text"]{
            width: 300px;
        }
        input[name="txtcod"]{
            width: 50px;
        }
        textarea{
            width: 300px;
            resize: none;
            height: 70px;
        }
        .title{
            text-align: center;
            font-weight: bold;
        }
        a{
            text-decoration:none;
            color: #000;
        }
        button{
            margin-top: 5px;
        }
      </style>
  </head>
  <body ng-controller="dadosController">
      <div class="jumbotron">
        <div class="container">
            Pesquisar <input type="text" ng-model="search.num_inscricao" name="pesquisar"/>
        </div>
      </div>
      <div class="jumbotron" style="width:100%;">
        <table class="table">
            <tr class="title">
                <td>Código</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Celular</td>
                <td>E-mail</td>
                <td>Nome Resp</td>
                <td>Tel Resp </td>
                <td>Cel Resp</td>
                <td>Fez Curso?</td>
                <td>Nome inst</td>
                <td>Quanto investiu?</td>
                <td>Já concluiu?</td>
                <td>Nome da Escola</td>
                <td>Data Registro</td>
            </tr>
            <tr ng-repeat="conteudo in conteudos | filter:search">
                <td>{{ conteudo.num_inscricao }}</td>
                <td>{{ conteudo.nome | uppercase }}</td>
                <td>{{ conteudo.telefone }}</td>
                <td>{{ conteudo.celular }}</td>
                <td>{{ conteudo.email | uppercase }}</td>
                <td>{{ conteudo.nome_resp | uppercase }}</td>
                <td>{{ conteudo.telefone_resp }}</td>
                <td>{{ conteudo.celular_resp }}</td>
                <td>{{ conteudo.fez_curso | uppercase }}</td>
                <td>{{ conteudo.nome_inst | uppercase }}</td>
                <td>{{ conteudo.qt_investiu }}</td>
                <td>{{ conteudo.ja_concluiu | uppercase }}</td>
                <td>{{ conteudo.nome_escola | uppercase }}</td>
                <td>{{ conteudo.dt_criacao | uppercase }}</td>
            </tr>
            
        </table>
      </div>
  </body>
</html>