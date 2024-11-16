@extends('home')
@section('contenido')
    <div class="container-fluid overflow-auto">
        <div class="container-fluid row rounded mb-2">
            <div class="col-lg-5">
                <h4 class="fw-semibold mt-3"><i class="fab fa-mdb"></i> Materiales</h4>
                <small class="fw-semibold p-1 m-0 text-secondary">Elige el material a tratar o agrega uno nuevo con el <b class="text-primary">botón <i class="fas fa-plus"></i></b></small>
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
                            Materiales
                            <i class="fab fa-mdb"></i>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-primary mt-3 shadow" data-toggle="modal" data-target="#nuevoMaterial"><i class="fas fa-plus" ></i> Agregar material</button>
            </div>
        </div>
        <div class="container-fluid row rounded bg-white mt-1 p-3">
            <div class="col-lg-12 col-md-6 col-sm-6">
                @php
                    $heads = ['#', 'Material', 'Precio', 'Acciones'];
                @endphp
                <x-adminlte-datatable id="contenedorMateriales" theme="light" head-theme="dark" :heads="$heads" compressed striped hoverable beautify>
                    @if( count( $materiales) > 0 )
                        @foreach( $materiales as $material )
                            <tr>
                                <td>{{ $material->id }}</td>
                                <td>{{ $material->nombre }}</td>
                                <td>$ {{ $material->precio }}</td>
                                <td>
                                    <button class="btn shadow border border-info editar" data-value="{{ $material->id }}, {{ $material->nombre }}, {{ $material->precio }}, {{ $material->descripcion }}" data-toggle="modal" data-target="#editarMaterial" title="Editar material"><i class="fas fa-edit"></i></button>
                                    <button class="btn shadow border border-danger borrar" data-value="{{ $material->id }}, {{ $material->nombre }}"><i class="fas fa-trash" title="Eliminar material"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-info fw-bold text-center">No hay materiales registrados <i class="fas fa-exclamation-circle"></i></td>
                        </tr>
                    @endif
                </x-adminlte-datatable>
            </div>
        </div>
    </div>

    @include('materiales.nuevo')
    @include('materiales.editar')

    <script src="{{ asset('/jquery-3.7.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/sweetAlert.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/materiales/create.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/materiales/read.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/materiales/update.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/materiales/delete.js') }}" type="text/javascript"></script>
@stop