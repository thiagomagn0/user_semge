@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Atualizar usuário </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        {{-- @include('adminlte-templates::common.errors') --}}

        <div class="card">

            {!! Form::model($users, ['route' => ['users.update', $users->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('users.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
                <a href="{{ route('users.index') }}" class="btn btn-danger">Cancelar</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
