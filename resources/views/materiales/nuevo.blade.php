<x-adminlte-modal id="nuevoMaterial" title="Nuevo Material" size="md" theme="primary" icon="fas fa-plus" v-centered static-backdrop scrollable>
    <div class="container-fluid row">
        <div class="col-lg-12 border-bottom p-1">
            <small class="text-danger"><i class="fas fa-info-circle"></i> Todos los campos con * son obligatorios</small>
        </div>
        <div class="col-lg-12 p-1">
            <form class="form-group">
                <x-adminlte-input type="text" id="nombre" name="nombre" placeholder="*Nombre de material">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fab fa-mdb"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input type="text" id="precio" name="precio" placeholder="*Precio de material">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input type="text" id="descripcion" name="descripcion" placeholder="Descripción breve de material">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-edit"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-select id="categoria" name="categoria" placeholder="Categoria">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-tag">*</i>
                        </div>
                    </x-slot>
                    <option value="0">Elige una categoría</option>
                    @foreach( $categorias as $categoria )
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </x-adminlte-select>
            </form>
        </div>
        <x-slot name="footerSlot">
            <button class="btn btn-primary shadow" id="registrar"><i class="fas fa-plus"></i> Agregar</button>
            <button class="btn btn-outline-danger shadow" data-dismiss="modal"><i class="fas fa-window-close"></i> Cancelar</button>
        </x-slot>
    </div>
</x-adminlte-modal>