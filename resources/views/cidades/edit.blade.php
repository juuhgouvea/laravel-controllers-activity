{{-- @extends('default')

@section('icon')
    <h3>
        <i class="fas fa-plus-square"></i>
        Cadastrar
    </h3>
@endsection --}}

<title>Sistema Gestão de Municípos - Governo do Paraná</title>
<hr>
<h1>Sistema Gestão de Municípos - Governo do Paraná</h2>
<span>[ Alterar Dados da Cidade ]</span>
<button><a href="{{ route('cidades.index')}}">Voltar</a></button>
<hr>
<form action = "{{ route('cidades.update', $dados['id'])}}" method = "POST">
    @csrf
    @method('PUT')
    <div>
    <label>Cidade: </label> <input type = 'text' name="cidade" value="{{$dados['cidade']}}">
    </div>
    <div>
        <label>Porte: </label>
        <select name="porte">
            <option value="pequeno" selected={{strtoupper($dados['porte']) == 'PEQUENO'}}>Pequeno</option>
            <option value="medio" selected={{strtoupper($dados['porte']) == 'MEDIO'}}>Medio</option>
            <option value="grande" selected={{strtoupper($dados['porte']) == 'GRANDE'}}>Grande</option>
        </select>
    </div>
    <hr>
    <input type="submit" value="Cadastrar">
</form>
