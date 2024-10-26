<h1 class="list-user">Listar Usuários</h1> 
<?php
    //selecionando todos os resultados do banco de dados
    $sql = "SELECT * FROM usuarios";

    //estabelecendo a conexão query
    $res = $conn->query($sql); 

    //O qtd é a quantidade de resultados
    //O qtd vai pegar de um resultado o numero de linhas 
    $qtd = $res->num_rows;
    //Se a quantidade de linhas foi maior de 0 há resultados
    if($qtd>0){
        //Organizando os resultados em uma tabela
        print "<table class='center-table'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Ações</th>";
        print "</tr>";
        //A variável $row aqui abaixo é um array
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "<td>
                <button class='btn-editar' onclick=\"location.href='?page=editar&id=".$row->id."'\"> Editar</button>
                <button class='btn-excluir' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."'}else{false;}\"> Excluir</button>
            
            </td>"; 
            print "</tr>";
        }
        print "</table>";

    }else{
        print "<div class='alert'>";
        print "<p class=' alert-danger'>Não encontrou resultados!</p> ";
        print "</div>";
    }
?>