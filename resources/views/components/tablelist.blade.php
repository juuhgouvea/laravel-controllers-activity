<table class="mt-5 table table-striped">
    <thead>
        <tr>
            @foreach($headers as $header)
                <th class="text-center" scope="col">{{ strtoupper($header) }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
               <td class="text-center">{{ $item['cidade'] }}</td>
                <td class="text-center d-flex align-items-center justify-content-center">
                    <a class="btn" href="{{ route('cidades.show', $item['id']) }}"><i class="fas fa-info-circle"></i></a>
                    <a class="btn" href="{{ route('cidades.edit', $item['id'])}}"><i class="fas fa-pen"></i></a>
                    <form action="{{ route('cidades.destroy', $item['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
