<x-adminlte-modal id="permisosRol" title="Permisos de Rol" size="lg" theme="primary" icon="fas fa-user-cog" v-centered static-backdrop scrollable>
    <div class="container-fluid row">
        <div class="col-lg-12 border-bottom p-1">
            <small class="text-danger"><i class="fas fa-info-circle"></i> Elige los permisos de usuario para el rol seleccionado.</small>
        </div>
        <div class="col-lg-12 p-1">
            <form class="form-group">
                <x-adminlte-input type="text" id="rolPermisos" name="roPermisos" readonly="true">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user-tag"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <div class="form-group row">
                    <span class="d-block col-lg-12 bg-light border">Permisos de usuario</span>
                    @foreach( $permisos as $permiso )
                        <div class="form-check form-switch col-lg-4 col-md-6 col-sm-12 mb-2">
                            <input type="checkbox" name="permiso" class="form-check-input" role="switch" id="{{ $permiso->id }}" data-value="{{ $permiso->name }}"/>
                            <label for="{{ $permiso->id }}" class="form-check-label">{{ $permiso->name }}</label>
                        </div>
                    @endforeach
                </div>
                <input type="hidden" name="idRolPermisos" id="idRolPermisos">
            </form>
        </div>
        <x-slot name="footerSlot">
            <button class="btn btn-primary shadow" id="guardar"><i class="fas fa-plus"></i> Agregar</button>
            <button class="btn btn-outline-danger shadow" data-dismiss="modal"><i class="fas fa-window-close"></i> Cancelar</button>
        </x-slot>
    </div>
</x-adminlte-modal>