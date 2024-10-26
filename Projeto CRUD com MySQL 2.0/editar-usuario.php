<h1>Editar Usuário</h1>

<!--O editar usuário é quase identico ao novo usuario a unica diferença será que o editar 
já estara preenchido com os dados que você desejou editar
-->
<?php
  $sql = "SELECT * FROM usuarios  WHERE id=".$_REQUEST["id"];

  $res =  $conn->query($sql);

  $row =  $res->fetch_object();

?>


<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    
    <input type="hidden" name="id" value="<?php print $row->id;?>">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php print $row->nome;?>">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" value="<?php print $row->email;?>">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de nascimento</label>
        <input type="date" name="data_nasc" class="form-control" value="<?php print $row->data_nasc;?>">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
</form>