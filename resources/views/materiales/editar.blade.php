<x-adminlte-modal id="editarMaterial" title="Editar Material" size="md" theme="info" icon="fas fa-edit" v-centered static-backdrop scrollable>
    <div class="container-fluid row">
        <div class="col-lg-12 border-bottom p-1">
            <small class="text-danger"><i class="fas fa-info-circle"></i> Edita los datos como lo necesites. Todos los campos con * son obligatorios</small>
        </div>
        <div class="col-lg-12 p-1">
            <form class="form-group">
                <x-adminlte-input type="text" id="nombreEditar" name="nombreEditar" placeholder="*Nombre de material">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fab fa-mdb"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input type="text" id="precioEditar" name="precioEditar" placeholder="*Precio de material">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input type="text" id="descripcionEditar" name="descripcionEditar" placeholder="Descripción breve de material">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-edit"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-select id="categoriaEditar" name="categoriaEditar" placeholder="Categoria">
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
                <input type="hidden" name="idMaterial" id="idMaterial">
            </form>
        </div>
        <x-slot name="footerSlot">
            <button class="btn btn-primary shadow" id="actualizar"><i class="fas fa-clock"></i> Actualizar</button>
            <button class="btn btn-outline-danger shadow" data-dismiss="modal"><i class="fas fa-window-close"></i> Cancelar</button>
        </x-slot>
    </div>
</x-adminlte-modal>