<h1>Criar Loja</h1>
<form action="/admin/stores/store" method="post">

    <div>
        <label>Nome Loja</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Descrição</label>
        <input type="text" name="description">
    </div>
    <div>
        <label>Telefone</label>
        <input type="text" name="phone">
    </div>
    <div>
        <label>Celular</label>
        <input type="text" name="mobile_phone">
    </div>
    <div>
        <label>Slug</label>
        <input type="text" name="slug">
    </div>
    <div>
        <label>Usuario</label>
        <select name="user">
            @foreach($users as $user)
                
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">Criar Loja</button>
    </div>

</form>