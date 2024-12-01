jQuery.noConflict();
jQuery(document).ready(function(){

    $("#actualizar").on('click', function(e){

        e.preventDefault();

        console.log( $("#idSolicitud").val() );

        let procesamiento;
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        Swal.fire({

            title: 'Actualizando solicitud',
            html: 'Un momento por favor: <b></b>',
            timer: 9975,
            allowOutsideClick: false,
            didOpen: ()=>{

                Swal.showLoading();
                const b = Swal.getHtmlContainer().querySelector('b');
                procesamiento = setInterval(()=>{

                    b.textContent = Swal.getTimerLeft();

                }, 100);

                $.ajax({

                    type: 'POST',
                    url: '/solicitud/actualizar',
                    data:{

                        'id' : $("#idSolicitud").val(),
                        'cliente' : $("#clienteEditar").val(),
                        'email' : $("#emailEditar").val(),
                        'domicilio' : $("#domicilioEditar").val(),
                        'telefono' : $("#telefonoEditar").val(),
                        'ciudad' : $("#ciudadEditar").val(),
                        'plan' : $("#codigoEditar").val(),
                        'rut' : $("#rutEditar").val(),
                        'necesidad' : $("#necesidadEditar").val(),
                        'relato' : $("#relatoEditar").val(),
                        'analisis' : $("#analisisEditar").val(),
                        'falla' : $("#fallaEditar").val(),
                        'prioridad' : $("#prioridadEditar").val(),
                        'intervencion' : $("#intervencionEditar").val(),
                        'tipo' : $("#tipoEditar").val(),
                        'derivacion' : $("#derivacionEditar").val(),
                        '_token' : csrfToken,

                    },
                    dataType: 'json',
                    encode: true

                }).done(function(respuesta){

                    if( respuesta.exito ){

                        Swal.fire({

                            icon: 'success',
                            title: 'Solicitud actualizada',
                            allowOutsideClick: false,
                            showConfirmButton: true

                        }).then((resultado)=>{

                            if( resultado.isConfirmed ){

                                window.location.href = '/solicitudes';

                            }

                        });

                    }else{

                        Swal.fire({

                            icon: 'error',
                            title: respuesta.mensaje,
                            allowOutsideClick: false,
                            showConfirmButton: true

                        }).then((resultado)=>{

                            if( resultado.isConfirmed ){

                                window.location.href = '/solicitudes';

                            }

                        });

                    }

                });

            },
            willClose: ()=>{

                clearInterval(procesamiento);

            }

        }).then((resultado)=>{

            if( resultado.dismiss == Swal.DismissReason.timer ){

                Swal.fire({

                    icon: 'warning',
                    title: 'Hubo un inconveniente. Trata de nuevo.',
                    allowOutsideClick: false,
                    showConfirmButton: true

                }).then((resultado)=>{

                    if( resultado.isConfirmed ){

                        window.location.href = '/solicitudes';

                    }

                });

            }

        });

    });
    
});