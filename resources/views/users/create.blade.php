@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Adicionar usuário</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="card-footer">
                    <form action="/save" method="get">
                        <div class="row">
                            @include('users.fields')
                            
   
                        </div>
                    <button type="submit" class="btn btn-success" > salvar</button>
                    <a href="{{ route('users.index') }}" class="btn btn-danger">Cancelar</a>
                </form>
            </div>

               
            </div>
                       
        </div>
    </div>

  @endsection

  <link rel="stylesheet" href="style.css" media="screen and (max-width: 667px)" />

  
