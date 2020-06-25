@extends('default', ['titulo' => $cidade['cidade'], 'iconClass' => 'fas fa-eye'])

@section('content')
    <a class="btn btn-outline-primary font-weight-bold" href="{{ route('cidades.index') }}"><i class="fas fa-arrow-left"></i> Voltar</a>
    <h1 class="text-center text-success">{{$cidade['cidade']}}</h1>
    <h3 class="text-center text-muted">Porte: {{ucwords($cidade['porte'])}}</h3>
@endsection
