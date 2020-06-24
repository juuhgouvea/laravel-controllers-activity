<title>Sistema Gestão de Municípos - Governo do Paraná</title>
<hr>
<h1>Sistema Gestão de Municípos - Governo do Paraná</h2>
<span>[ Cadastrar Nova Cidade ]</span>
<button><a href="{{ route('cidade.index')}}">Voltar</a></button>
<hr>
<form action = "{{ route('cidade.store')}}" method = "POST">
    @csrf
    <div>
        <label>Cidade: </label> <input type = 'text' name="cidade">
    </div>
    <div>
        <label>Porte: </label>
        <select name="porte">
            <option value="pequeno">Pequeno</option>
            <option value="medio">Medio</option>
            <option value="grande">Grande</option>
        </select>
    </div>
    <hr>
    <input type="submit" value="Cadastrar">
</form>