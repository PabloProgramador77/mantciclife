@extends('home')
@section('contenido')
    <div class="container-fluid overflow-auto">
        <div class="container-fluid row rounded mb-2">
            <div class="col-lg-5">
                <h4 class="fw-semibold mt-3"><i class="fas fa-tags"></i> Categorias</h4>
                <small class="fw-semibold p-1 m-0 text-secondary">Elige el categoria a tratar o agrega una nueva con el <b class="text-primary">botón <i class="fas fa-plus"></i></b></small>
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
                            Categorias
                            <i class="fas fa-tags"></i>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-primary mt-3 shadow" data-toggle="modal" data-target="#nuevoCategoria"><i class="fas fa-plus" ></i> Agregar categoria</button>
            </div>
        </div>
        <div class="container-fluid row rounded bg-white mt-1 p-3">
            <div class="col-lg-12 col-md-6 col-sm-6">
                @php
                    $heads = ['#', 'Categoria', 'Descripción', 'Acciones'];
                @endphp
                <x-adminlte-datatable id="contenedorCategorias" theme="light" head-theme="dark" :heads="$heads" compressed striped hoverable beautify>
                    @if( count( $categorias) > 0 )
                        @foreach( $categorias as $categoria )
                            <tr>
                                <td>{{ $categoria->id }}</td>
                                <td>{{ $categoria->nombre }}</td>
                                <td>{{ ( $categoria->descripcion ? : 'Sin descripción' ) }}</td>
                                <td>
                                    <button class="btn shadow border border-info editar" data-value="{{ $categoria->id }}, {{ $categoria->nombre }}, {{ $categoria->descripcion }}" data-toggle="modal" data-target="#editarCategoria" title="Editar categoria"><i class="fas fa-edit"></i></button>
                                    <button class="btn shadow border border-danger borrar" data-value="{{ $categoria->id }}, {{ $categoria->nombre }}"><i class="fas fa-trash" title="Eliminar categoria"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-info fw-bold text-center">No hay categorias registradas <i class="fas fa-exclamation-circle"></i></td>
                        </tr>
                    @endif
                </x-adminlte-datatable>
            </div>
        </div>
    </div>

    @include('categorias.nuevo')
    @include('categorias.editar')

    <script src="{{ asset('/jquery-3.7.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/sweetAlert.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/categorias/create.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/categorias/read.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/categorias/update.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/categorias/delete.js') }}" type="text/javascript"></script>
@stop