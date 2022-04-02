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
                <th>Bairro</th>
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
            @if($users->admin == 1)
                <td><span class="badge badge-success">Administrador</span></td>
                @elseif($users->supervisor ==1)
                <td><span class="badge badge-danger">Supervisor</span></td>
                @elseif($users->operator ==1)
                <td><span class="badge badge-danger">Oprador</span></td>
                @else
                <td><span class="badge badge-danger">Sem Perfill Atribuído</span></td>
                @endif

                
                
            <td>321</td>
            <td>Rua</td>
            <td>Complemento</td>
            <td>Bairro</td>
            <td>numero</td>
            <td>Salvador</td>
            <td>Estado</td>
            <td>País</td>
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
