@extends('home')
@section('contenido')
    <div class="container-fluid overflow-auto">
        <div class="container-fluid row rounded mb-2">
            <div class="col-lg-5">
                <h4 class="fw-semibold mt-3"><i class="fas fa-file"></i> Solicitudes</h4>
                <small class="fw-semibold p-1 m-0 text-secondary">Elige la solicitud a tratar o agrega una nueva con el <b class="text-primary">botón <i class="fas fa-plus"></i></b></small>
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
                        <li class="breadcrumb-item">
                            <a class="link-body-emphasis" href="/requerimientos">
                                Requerimientos
                                <i class="fas fa-folder"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            <i class="fas fa-angle-right"></i>
                            Solicitudes
                            <i class="fas fa-file"></i>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-primary mt-3 shadow" data-toggle="modal" data-target="#nuevoSolicitud"><i class="fas fa-plus" ></i> Agregar solicitud</button>
            </div>
        </div>
        <div class="container-fluid row rounded bg-white mt-1 p-3">
            <div class="col-lg-12 col-md-6 col-sm-6">
                @php
                    $heads = ['#', 'Analista', 'Cliente', 'Necesidad', 'Acciones'];
                @endphp
                <x-adminlte-datatable id="contenedorSolicitudes" theme="light" head-theme="dark" :heads="$heads" compressed striped hoverable beautify>
                    @if( count( $solicitudes) > 0 )
                        @foreach( $solicitudes as $solicitud )
                            <tr>
                                <td>{{ $solicitud->id }}</td>
                                <td>{{ $solicitud->usuario->name }}</td>
                                <td>{{ $solicitud->cliente }}</td>
                                <td>{{ $solicitud->necesidad }}</td>
                                <td>
                                    <button class="btn shadow border border-info editar" title="Editar solicitud" data-value="{{ $solicitud->id }}" data-toggle="modal" data-target="#editarSolicitud"><i class="fas fa-edit"></i></button>
                                    <button class="btn shadow border border-danger borrar" data-value="{{ $solicitud->id }}, {{ $solicitud->cliente }}"><i class="fas fa-trash" title="Eliminar solicitud"></i></button>
                                    <button class="btn shadow border border-warning pdf" data-value="{{ $solicitud->id }}" title="Exportar solicitud"><i class="fas fa-file-export"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-info fw-bold text-center">No hay solicitudes registrados <i class="fas fa-exclamation-circle"></i></td>
                        </tr>
                    @endif
                </x-adminlte-datatable>
            </div>
        </div>
    </div>

    @include('requerimientos.solicitudes.nuevo')
    @include('requerimientos.solicitudes.editar')

    <script src="{{ asset('/jquery-3.7.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/sweetAlert.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/solicitudes/create.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/solicitudes/read.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/solicitudes/update.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/solicitudes/delete.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/solicitudes/exportar.js') }}" type="text/javascript"></script>
@stop