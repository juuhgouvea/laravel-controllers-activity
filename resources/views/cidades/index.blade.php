@extends('default')

@section('icon')
    <h3>
        <i class="fas fa-list"></i>
        Cidades
    </h3>
@endsection


@section('content')
        <div>
            <button class="btn btn-lg btn-primary w-100"><a class="text-white" href="{{ route('cidades.create')}}">Cadastrar nova cidade</a></button>
        </div>
        <table class="mt-5 table table-striped">
            <thead>
                <tr>
                    <th class="text-center" scope="col">CIDADE</th>
                    <th class="text-center" scope="col">EVENTO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cidades as $item)
                    <tr>
                       <td class="text-center">{{ $item['cidade'] }}</td>
                        <td class="text-center d-flex align-items-center justify-content-center">
                            <a class="btn" href="{{ route('cidades.show', $item['id']) }}"><i class="fas fa-info-circle"></i></a>
                            <a class="btn" href="{{ route('cidades.edit', $item['id'])}}"><i class="fas fa-pen"></i></a>
                            <form action="{{ route('cidades.destroy', $item['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn" type="submit"><i class="fas fa-trash"></i></a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
