<h1 class="new-user">Novo Usuário</h1>

<!--Formulário para ciração de um novo usuário-->
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar"> 

    <div>
        <label>Nome</label>
        <input class="input-b" type="text" name="nome">
    </div>
    <div>
        <label>E-mail</label>
        <input class="input-b" type="email" name="email">
    </div>
    <div>
        <label>Senha</label>
        <input class="input-b" type="password" name="senha">
    </div>
    <div>
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc">
    </div>
    <div>
        <button class="btn-new-user" type="submit" >Enviar</button>
    </div>
</form>
