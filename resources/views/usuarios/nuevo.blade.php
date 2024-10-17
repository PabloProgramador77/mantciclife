<x-adminlte-modal id="nuevoUsuario" title="Nuevo Usuario" size="md" theme="primary" icon="fas fa-user-plus" v-centered static-backdrop scrollable>
    <div class="container-fluid row">
        <div class="col-lg-12 border-bottom p-1">
            <small class="text-danger"><i class="fas fa-info-circle"></i> Todos los campos son obligatorios</small>
        </div>
        <div class="col-lg-12 p-1">
            <form class="form-group">
                <x-adminlte-input type="text" id="nombre" name="nombre" placeholder="*Nombre de usuario">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input type="email" id="email" name="email" placeholder="*Email de usuario">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-select id="role" name="role" placeholder="*Rol de usuario">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user-tag"></i>
                        </div>
                    </x-slot>
                    <option value="0">*Rol de usuario</option>
                </x-adminlte-select>
            </form>
        </div>
        <x-slot name="footerSlot">
            <button class="btn btn-primary shadow"><i class="fas fa-user-plus"></i> Agregar</button>
            <button class="btn btn-outline-danger shadow"><i class="fas fa-window-close"></i> Cancelar</button>
        </x-slot>
    </div>
</x-adminlte-modal>