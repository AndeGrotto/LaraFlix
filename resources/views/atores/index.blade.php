@extends('adminlte::page')

@section('content')
<h1>Atores</h1>
<table class="table table-stripe table-bordered table-hover">
    <thead>
        <th>Nome</th>
        <th>Nacionalidade</th>
        <th>Data de Nascimento</th>
        <th>Início das Atividades</th>
    </thead>
    <tbody>
        @foreach($atores as $ator)
            <tr>
                <td>{{ $ator->nome }}</td>
                <td>{{ $ator->nacionalidade }}</td>
                <td>{{ $ator->dt_nascimento }}</td>
                <td>{{ $ator->inicio_atividades }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop