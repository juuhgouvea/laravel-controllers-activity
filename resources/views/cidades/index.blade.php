<title>Sistema Gestão de Municípos - Governo do Paraná</title>
<hr>
<h1>Sistema Gestão de Municípos - Governo do Paraná</h2>
<p>[ Menu Principal ]</p>
<hr>
<button><a href="{{ route('cidade.create')}}">Cadastrar Cidade</a></button>
<hr>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>CIDADE</th>
            <th>PORTE</th>
            <th>EDITAR</th>
            <th>REMOVER</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cidades as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['cidade'] }}</td>
                <td>{{ $item['porte'] }}</td>
                <td><button><a href="{{ route('cidade.edit', $item['id'])}}">Editar</a></button></td>
                <form action="{{ route('cidade.destroy', $item['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td>
                        <button type="submit">Remover</button>
                    </td>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>