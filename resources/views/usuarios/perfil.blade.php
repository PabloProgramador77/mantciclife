@extends('home')
@section('contenido')
    <div class="container-fluid overflow-auto">
        <div class="container-fluid row rounded mb-2">
            <div class="col-lg-5">
                <h4 class="fw-semibold mt-3"><i class="fas fa-user-circle"></i> Mi Perfil</h4>
                <small class="fw-semibold p-1 m-0 text-info"><i class="fas fa-info-circle"></i> Gestiona tus datos de usuario como consideres necesario.</small>
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
                            Mi Perfil
                            <i class="fas fa-user-circle"></i>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid row rounded bg-white mt-1 p-3">
            <div class="col-lg-4 col-md-6 col-sm-12 text-center p-4">
                <img src="{{ asset('img/logo-min.png') }}" alt="Logo" width="75%" height="auto" class="p-1 border border-secondary rounded-pill shadow">
                <p class="d-block text-center p-1 mt-2"><b>{{ auth()->user()->name }}</b></p>
                <p class="text-center p-1 m-1 rounded bg-teal"><b>{{ auth()->user()->getRoleNames()->first() }}</b></p>
                <small class="text-center text-secondary p-1"><i class="fas fa-envelope"></i> {{ auth()->user()->email }}</small>
                <small class="text-center text-secondary p-1"><i class="fas fa-user-cog"></i> {{ count( auth()->user()->permissions ) }} permisos de usuario</small>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12 p-5">
                <h5 class="d-block p-1 m-1 text-secondary border-bottom border-secondary"><b>Datos de Perfil</b></h5>
                <form novalidate>
                    <div class="form-group">
                        <x-adminlte-input name="role" id="role" value="{{ auth()->user()->getRoleNames()->first() }}" readonly="true">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user-tag"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <div class="form-group">
                        <x-adminlte-input name="nombre" id="nombre" placeholder="Nombre de usuario" required value="{{ auth()->user()->name }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user">*</i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <div class="form-group">
                        <x-adminlte-input name="email" id="email" placeholder="Email de usuario" required value="{{ auth()->user()->email }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope">*</i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <!--<div class="form-group">
                        <x-adminlte-input name="password" id="password" placeholder="Contraseña de usuario" required value="{{ auth()->user()->password }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-lock">*</i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>-->
                    <div class="form-group text-right">
                        <x-adminlte-button theme="success" icon="fas fa-save" label=" Guardar" id="guardar"></x-adminlte-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('/jquery-3.7.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/sweetAlert.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/usuarios/perfil.js') }}" type="text/javascript"></script>
@stop