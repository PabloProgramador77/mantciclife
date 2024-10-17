@extends('home')
@section('contenido')
    <div class="container-fluid overflow-auto">
        <div class="container-fluid row rounded mb-2">
            <div class="col-lg-5">
                <h4 class="fw-semibold mt-3"><i class="fas fa-users"></i> Usuarios</h4>
                <small class="fw-semibold p-1 m-0 text-secondary">Elige el usuario a tratar o agrega uno nuevo con el <b class="text-primary">botón <i class="fas fa-user-plus"></i></b></small>
            </div>
            <div class="col-lg-5 p-1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-chevron p-3 bg-body-tertiary">
                        <li class="breadcrumb-item">
                            <a class="link-body-emphasis" href="/home">
                                Inicio
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            <i class="fas fa-angle-right"></i>
                            Usuarios
                            <i class="fas fa-users"></i>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-primary mt-3 shadow" data-toggle="modal" data-target="#nuevoUsuario"><i class="fas fa-user-plus" ></i> Agregar usuario</button>
            </div>
        </div>
        <div class="container-fluid row rounded bg-white mt-1 p-3">
            <div class="col-lg-12 col-md-6 col-sm-6">
                @php
                    $heads = ['#', 'Usuario', 'Email', 'Role', 'Acciones'];
                @endphp
                <x-adminlte-datatable id="contenedorUsers" theme="light" head-theme="dark" :heads="$heads" compressed striped hoverable beautify>
                    @if( count( $users) > 0 )
                        @foreach( $users as $user )
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td><span class="p-1 text-center rounded bg-info">Developer</span></td>
                                <td>
                                    <button class="btn shadow border border-info" data-value="{{ $user->id }}, {{ $user->name }}, {{ $user->email }}" data-toggle="modal" data-target="#editarUsuario" title="Editar usuario"><i class="fas fa-user-edit"></i></button>
                                    <button class="btn shadow border border-primary" data-value="{{ $user->id }}, {{ $user->name }}, {{ $user->email }}" data-toggle="modal" title="Permisos de usuario"><i class="fas fa-user-cog"></i></button>
                                    <button class="btn shadow border border-danger" data-value="{{ $user->id }}, {{ $user->name }}"><i class="fas fa-user-minus" title="Eliminar usuario"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-info fw-bold text-center">No hay usuarios registrados <i class="fas fa-exclamation-circle"></i></td>
                        </tr>
                    @endif
                </x-adminlte-datatable>
            </div>
        </div>
    </div>

    @include('usuarios.nuevo')
    @include('usuarios.editar')
@stop