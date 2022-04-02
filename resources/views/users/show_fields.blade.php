<!-- Name Field -->
<div class="col-sm-3">
    {!! Form::label('name', 'Nome:') !!}
    <p>{{ $users->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-3">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $users->email }}</p>
</div>
<!-- Password Field
<div class="col-sm-3">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $users->password }}</p>
</div> -->
<!-- Users Field -->
<div class="col-sm-3">
    {!! Form::label('users', 'Perfil:') !!}
    @if($users->admin == 1)
    <p><span class="badge badge-success">Administrador</span></p>
    @elseif($users->supervisor ==1)
    <p><span class="badge badge-danger">Supervisor</span></p>
    @elseif($users->operator ==1)
    <p><span class="badge badge-danger">Oprador</span></p>
    @else
    <p><span class="badge badge-danger">Sem Perfill Atribuído</span></p>
    @endif
</div>