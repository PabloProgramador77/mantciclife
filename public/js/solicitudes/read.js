jQuery.noConflict();
jQuery(document).ready(function(){

    $("#actualizar").attr('disabled', true);

    $(".editar").on('click', function(e){

        e.preventDefault();

        var id = $(this).attr('data-value');

        $("#nombreEditar").val('');
        $("#clienteEditar").val('');
        $("#emailEditar").val('');
        $("#domicilioEditar").val('');
        $("#telefonoEditar").val('');
        $("#ciudadEditar").val('');
        $("#codigoEditar").val('');
        $("#rutEditar").val('');
        $("#necesidadEditar").val('');
        $("#relatoEditar").val('');
        $("#analisisEditar").val('');
        $("#idSolicitud").val('');

        console.log( id );

        if( id === null || id === '' ){

            $("#actualizar").attr('disabled', true);

            Swal.fire({

                icon: 'error',
                title: 'Error de lectura',
                allowOutsideClick: false,
                showConfirmButton: true,

            });

            $("#actualizar").attr('disabled', true);

        }else{

            const csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({

                type : 'POST',
                url : '/solicitud/buscar',
                data: {

                    'id' : id,
                    '_token' : csrfToken,

                },
                dataType: 'json',
                encode: true,

            }).done( function( respuesta ){

                if( respuesta.exito ){

                    $("#idSolicitud").val( respuesta.id );
                    $("#nombreEditar").val( respuesta.name );
                    $("#clienteEditar").val( respuesta.cliente );
                    $("#emailEditar").val( respuesta.email );
                    $("#domicilioEditar").val( respuesta.domicilio);
                    $("#telefonoEditar").val( respuesta.telefono );
                    $("#ciudadEditar").val( respuesta.ciudad );
                    $("#codigoEditar").val( respuesta.plan );
                    $("#rutEditar").val( respuesta.rut );
                    $("#necesidadEditar").val( respuesta.necesidad );
                    $("#relatoEditar").val( respuesta.relato );
                    $("#analisisEditar").val( respuesta.analisis );

                    $("#fallaEditar").prepend('<option value="'+respuesta.falla+'">'+respuesta.falla+'</option>');
                    $("#fallaEditar").val(respuesta.falla);
                    $("#fallaEditar option[value='"+respuesta.falla+"']:not(:first)").remove();

                    $("#prioridadEditar").prepend('<option value="'+respuesta.prioridad+'">'+respuesta.prioridad+'</option>');
                    $("#prioridadEditar").val(respuesta.prioridad);
                    $("#prioridadEditar option[value='"+respuesta.prioridad+"']:not(:first)").remove();

                    $("#intervencionEditar").prepend('<option value="'+respuesta.intervencion+'">'+respuesta.intervencion+'</option>');
                    $("#intervencionEditar").val(respuesta.intervencion);
                    $("#intervencionEditar option[value='"+respuesta.intervencion+"']:not(:first)").remove();

                    $("#tipoEditar").prepend('<option value="'+respuesta.tipo+'">'+respuesta.tipo+'</option>');
                    $("#tipoEditar").val(respuesta.tipo);
                    $("#tipoEditar option[value='"+respuesta.tipo+"']:not(:first)").remove();

                    $("#derivacionEditar").prepend('<option value="'+respuesta.derivacion+'">'+respuesta.derivacion+'</option>');
                    $("#derivacionEditar").val(respuesta.derivacion);
                    $("#derivacionEditar option[value='"+respuesta.derivacion+"']:not(:first)").remove();

                    $("#actualizar").attr('disabled', false);

                }else{

                    Swal.fire({

                        title: respuesta.mensaje,
                        icon: 'error',
                        timer: 3000,
                        timerProgressBar: true,
                        allowOutsideClick: false,
                        showConfirmButton: false,

                    });

                    $("#actualizar").attr('disabled', true);

                }

            });

        }

    });

});