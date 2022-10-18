@extends('adminlte::page')

@section('content')
    <h3>Editando Nacionalidade: {{ $nacionalidade->descricao }}</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ['nacionalidades.update', 'id' => $nacionalidade->id], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}
        {!! Form::select(
            'descricao',
            [
                'BRA - Brasileiro' => 'Brasileiro',
                'USA - Americano' => 'Americano',
                'DK - Dinamarquês' => 'Dinamarquês',
                'ALE - Alemão' => 'Alemão',
                'JAP - Japonês' => 'Japonês',
                'PT - Português' => 'Português',
                'SA - Árabe' => 'Árabe',
                'RUS - Russo' => 'Russo',
                'MEX - Mexicano' => 'Mexicano',
                'ESP - Espanhol' => 'Espanhol',
                'CAN - Canadense' => 'Canadense',
                'ARG - Argentino' => 'Argentino',
            ],
            $nacionalidade->nacionalidade,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar Nacionalidade', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('nacionalidades') }}"
            class="btn btn-default">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
