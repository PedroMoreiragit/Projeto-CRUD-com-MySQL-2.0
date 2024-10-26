<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="formata.css">
</head>
<body>
    
<!--Barra de navegação da página-->
<nav class="menu">
<div>
    <ul>
      <li>
      <a class="logo  item-menu " >Cadastro</a>
      </li>
      <li class="item-menu item-1">
        <a  href="index.php">Home</a>
      </li>
      <li class="item-menu item-2">
        <!--Ultilizando a variavel que foi criada abaixo-->
        <a  href="?page=novo">Novo Usuário</a>
      </li>
      <li class="item-menu item-3">
        <!--Ultilizando a variavel que foi criada abaixo-->
        <a  href="?page=listar">Listar Usuário</a>
      </li>
    </ul>
  </div>
</nav>


<!--Usando o Switch para rendereizar paginas na aplicação com base  na variave  $_REQUEST 
o switch vai verificar o valor do REQUEST  e com base nele vai incluir diferentes  arquivos php
-->
    <div>
        <div>
            <div>
                <?php
                //Dando include do config.php
                include("config.php");
                    switch(@$_REQUEST["page"]){
                        case "novo":
                            include("novo-usuario.php");
                            break;
                        case "listar":
                            include("listar-usuario.php");
                            break;
                            case "salvar":
                                include("salvar-usuario.php");
                                break;
                            case "editar":
                                include("editar-usuario.php");
                                break;   
                            default:
                            print "<h1 class='text-welcome'>Bem Vindo!</h1>";
                    }
                ?>
            </div>
        </div>
    </div>

</body>
</html>