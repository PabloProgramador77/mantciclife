@extends('home')
@section('contenido')

    <section class="container-fluid p-2 bg-white">

        <div class="container-fluid row">

            <div class="col-lg-12 border-bottom">
                <h1 class="fs-2 fw-semibold text-primary text-center">Resumen de Organización</h1>
            </div>
            
            <div class="col-lg-12 p-2 m-1 row">
                <p class="p-1 bg-info fw-semibold col-lg-12">Información rápida de la organización</p>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-small-box title="" text="Clientes registrados" icon="fas fa-smile" theme="primary" class="shadow"></x-adminlte-small-box>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-small-box title="" text="Materiales registrados" icon="fas fa-box" theme="info" class="shadow"></x-adminlte-small-box>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-small-box title="" text="Insumos realizados" icon="fas fa-shopping-cart" theme="secondary" class="shadow"></x-adminlte-small-box>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-small-box title="" text="Máquinas registradas" icon="fas fa-dollar-sign" theme="teal" class="shadow"></x-adminlte-small-box>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-small-box title="" text="Repuestos registrados" icon="fas fa-dollar-sign" theme="light" class="shadow"></x-adminlte-small-box>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-small-box title="" text="Herramientas registradas" icon="fas fa-dollar-sign" theme="danger" class="shadow"></x-adminlte-small-box>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-small-box title="" text="Serv. Ext. registrados" icon="fas fa-dollar-sign" theme="warning" class="shadow"></x-adminlte-small-box>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-small-box title="" text="Solicitudes registradas" icon="fas fa-dollar-sign" theme="success" class="shadow"></x-adminlte-small-box>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-small-box title="" text="Pedidos registrados" icon="fas fa-dollar-sign" theme="dark" class="shadow"></x-adminlte-small-box>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-small-box title="" text="Usuarios registrados" icon="fas fa-dollar-sign" theme="white" class="shadow"></x-adminlte-small-box>
                </div>
            </div>

        </div>

    </section>

@stop