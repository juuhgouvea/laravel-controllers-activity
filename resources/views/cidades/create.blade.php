@extends('default', ['titulo' => 'Cadastrar', 'iconClass' => 'fas fa-plus-square'])

@section('content')
    <form action="{{ route('cidades.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-8">
                <button type="submit" class="btn btn-primary btn-lg w-100">Confirmar / Cadastrar</button>
            </div>
            <div class="col-sm-4">
                <a  href="{{ route('cidades.index') }}" class="btn btn-warning btn-lg w-100 font-weight-bold">Voltar</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-7">
                <div class="form-group">
                    <label class="font-weight-bold" for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="cidade">
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label class="font-weight-bold" for="porte">Porte</label>
                    <select type="text" class="form-control" id="porte" name="porte">
                        <option value="pequeno">Pequeno</option>
                        <option value="medio">Medio</option>
                        <option value="grande">Grande</option>
                    </select>
                </div>
            </div>
        </div>
    </form>
@endsection
