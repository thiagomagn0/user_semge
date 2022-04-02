<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">     
  <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome       </th>
                <th>Email</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Telefone</th>
                <th>Perfil</th>
                <th>CEP</th>
                <th>Rua</th>
                <th>Complemento</th>
                <th>Número</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>País</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $users)
    
            <tr>
            <td width="1000">{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->cpf }}</td>
            <td>{{ $users->birth_date }}</td>
            <td>{{ $users->phone }}</td>
            <td>{{ $users->admin }}</td>
            <td>CEP</td>
            <td>RUA</td>
            <td>COMPLEMENTO</td>
            <td>NUMERO</td>
            <td>CIDADE</td>
            <td>ESTADO</td>
            <td>PAIS</td>
            <td width="120">
                    {!! Form::open(['route' => ['users.destroy', $users->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$users->id]) }}" class='btn btn-primary btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('users.edit', [$users->id]) }}" class='btn btn-success btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
