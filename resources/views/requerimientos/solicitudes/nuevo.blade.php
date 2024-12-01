<x-adminlte-modal id="nuevoSolicitud" title="Nueva Solicitud" size="xl" theme="primary" icon="fas fa-plus" v-centered static-backdrop scrollable>
    <div class="container-fluid row">
        <div class="col-lg-12 border-bottom p-1">
            <small class="text-danger"><i class="fas fa-info-circle"></i> Todos los campos con * son obligatorios</small>
        </div>
        <div class="col-lg-12 p-1">
            <form class="form-group row">
                <span class="p-1 bg-info rounded d-block col-lg-12 m-1"><small class="text-center fw-semibold d-block">Datos de Unidad de Servicio</small></span>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-input type="text" id="nombre" name="nombre" readonly="true" value="{{ auth()->user()->name }}">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-user-tie"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-input type="text" id="cliente" name="cliente" placeholder="*Nombre de cliente">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-user"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-input type="text" id="email" name="email" placeholder="*Email de cliente">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-input type="text" id="domicilio" name="domicilio" placeholder="*Domicilio de cliente">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-home"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-input type="text" id="telefono" name="telefono" placeholder="*Telefono de cliente">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-phone"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-input type="text" id="ciudad" name="ciudad" placeholder="*Ciudad de cliente">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-input type="text" id="codigo" name="codigo" placeholder="Codigo Plan">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-code"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-input type="text" id="rut" name="rut" placeholder="Rut">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
                <span class="p-1 bg-info rounded d-block col-lg-12 m-1"><small class="text-center fw-semibold d-block">Necesidad y Relato de Hechos</small></span>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <x-adminlte-input type="text" id="necesidad" name="necesidad" placeholder="*Necesidad">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-pencil-ruler"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <x-adminlte-textarea id="relato" name="relato" placeholder="*Breve relato de los hechos">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-pen"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-textarea>
                </div>
                <span class="p-1 bg-info rounded d-block col-lg-12 m-1"><small class="text-center fw-semibold d-block">Análisis de la Condición</small></span>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <x-adminlte-textarea id="analisis" name="analisis" placeholder="*Análisis de la condición">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fab fa-think-peaks"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-textarea>
                </div>
                <span class="p-1 bg-info rounded d-block col-lg-12 m-1"><small class="text-center fw-semibold d-block">Conclusión</small></span>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-select id="falla" name="falla">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                        </x-slot>
                        <option value="0">Elige un nivel de falla</option>
                        <option value="Bajo">Bajo</option>
                        <option value="Moderado">Moderado</option>
                        <option value="Alto">Alto</option>
                    </x-adminlte-select>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-select id="prioridad" name="prioridad">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fab fa-product-hunt"></i>
                            </div>
                        </x-slot>
                        <option value="0">Elige un nivel de prioridad</option>
                        <option value="Bajo">Bajo</option>
                        <option value="Moderado">Moderado</option>
                        <option value="Urgente">Urgente</option>
                    </x-adminlte-select>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-select id="intervencion" name="intervencion">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-percent"></i>
                            </div>
                        </x-slot>
                        <option value="0">Elige un nivel de intervención</option>
                        <option value="10">10%</option>
                        <option value="25">25%</option>
                        <option value="50">50%</option>
                        <option value="75">75%</option>
                        <option value="100">100%</option>
                    </x-adminlte-select>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-select id="tipo" name="tipo">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-tag"></i>
                            </div>
                        </x-slot>
                        <option value="0">Elige un tipo de solicitud</option>
                        <option value="Negocio">Negocio</option>
                        <option value="Servicio">Servicio</option>
                        <option value="Soporte">Soporte</option>
                        <option value="Operadora">Operadora</option>
                        <option value="Elemental">Elemental</option>
                    </x-adminlte-select>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <x-adminlte-select id="derivacion" name="derivacion">
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-list"></i>
                            </div>
                        </x-slot>
                        <option value="0">Elige un tipo de derivación</option>
                        <option value="Administracion">Administración</option>
                        <option value="Mantenimiento">Mantenimiento</option>
                        <option value="Reflexivo">Reflexivo</option>
                        <option value="Comercial">Comercial</option>
                        <option value="Judicial">Judicial</option>
                        <option value="Comunicacional">Comunicacional</option>
                        <option value="Clinico">Clinico</option>
                        <option value="Capacitacion">Capacitacion</option>
                        <option value="Desarrollo">Desarrollo</option>
                        <option value="Aprovisionamiento">Aprovisionamiento</option>
                        <option value="Financiero">Financiero</option>
                    </x-adminlte-select>
                </div>
            </form>
        </div>
        <x-slot name="footerSlot">
            <button class="btn btn-primary shadow" id="registrar"><i class="fas fa-plus"></i> Agregar</button>
            <button class="btn btn-outline-danger shadow" data-dismiss="modal"><i class="fas fa-window-close"></i> Cancelar</button>
        </x-slot>
    </div>
</x-adminlte-modal>