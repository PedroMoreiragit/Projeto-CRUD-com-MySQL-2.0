<?php



    switch ($_REQUEST["acao"]) {
        // A case cadastrar sera executada quando o switch corresponder a string cadastrar 
        case 'cadastrar':
            //Abaixo está a captura dos dados após serem enviados do formulário 
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];


            /*Aqui está sendo incluido os dados que foram coletados acima
            no formulário e sendo inseridos no banco de dados 
            */
            
            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) 
            VALUES
            ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            //Fazendo a conexão com o banco de dados e voltando $res
            $res = $conn->query($sql);
                 /*O operador -> é crucial para o paradigma de Programação Orientada a Objetos (POO) em PHP.
             PHP suporta a POO desde a versão 4, mas o operador -> é uma parte fundamental da sintaxe que
              permite interagir com objetos e suas propriedades e métodos.
            A POO ajuda a organizar e modularizar o código, tornando-o mais reutilizável e fácil de manter.
            O operador -> facilita o uso de objetos e classes, permitindo encapsulamento, herança e polimorfismo. */

            //Digitando uma mensagem ao usuário para que ele saiba que tudo deu certo ou errado

            if($res == true){
                print"<script>alert('Cadastro Realizado com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
                print"<script>('Infelizmente não será possivel concluir esta ação');</script>";
                print"<script>location.href='?page=listar';</script>";
            }

            break;
        
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET
                nome='{$nome}',
                email='{$email}',
                senha='{$senha}',
                data_nasc='{$data_nasc}'
                WHERE
                id=".$_REQUEST["id"];
                

        $res = $conn->query($sql);

        if($res == TRUE){
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";

        }else{
            print "<script>alert('Não foi possivel Editar');</script>";
        print "<script>location.href='?page=listar';</script>";
        }
            break;    

        case 'excluir':

            $sql = "DELETE  FROM usuarios WHERE  id=".$_REQUEST["id"];


        $res = $conn->query($sql);

        if($res == TRUE){
            print "<script>alert('Excluído com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";

        }else{
            print "<script>alert('Não foi possivel Excluir');</script>";
        print "<script>location.href='?page=listar';</script>";
        }
        break;

            break;

    }