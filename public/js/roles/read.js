jQuery.noConflict();
jQuery(document).ready(function(){

    $("#actualizar").attr('disabled', true);

    //Botón de Edición
    $(".editar").on('click', function(e){

        e.preventDefault();

        $("#nombreEditar").val('');
        $("#idRol").val( 0 );

        var nombre = $(this).attr('data-value').split(',')[1];
        var id = $(this).attr('data-value').split(',')[0];

        if( id === null || id === '' ){

            $("#actualizar").attr('disabled', true);

            Swal.fire({

                icon: 'error',
                title: 'Error de lectura',
                allowOutsideClick: false,
                showConfirmButton: true,

            });

        }else{

            $("#nombreEditar").val( nombre );
            $("#idRol").val( id );

            $("#actualizar").attr('disabled', false);

        }

    });

    //Botón de Permisos
    $(".permisos").on('click', function(e){
        
        e.preventDefault();

        $("#rolPermisos").val('');
        $("#idRolPermisos").val( 0 );

        var nombre = $(this).attr('data-value').split(',')[1];
        var id = $(this).attr('data-value').split(',')[0];

        if( id === null || id === '' ){

            $("#actualizar").attr('disabled', true);

            Swal.fire({

                icon: 'error',
                title: 'Error de lectura',
                allowOutsideClick: false,
                showConfirmButton: true,

            });

        }else{

            $("#rolPermisos").val( nombre );
            $("#idRolPermisos").val( id );

            const csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({

                type: 'POST',
                url: '/rol/permissions',
                data:{

                    'id' : id,
                    '_token' : csrfToken,
    
                },
                dataType: 'json',
                encode: true,

            }).done( function( respuesta){

                if( respuesta.exito ){

                    $("input[name=permiso]").attr('checked', false);
                    
                    respuesta.permisos.forEach( function( permiso ){

                        $("input[name=permiso][id="+permiso.id+"]").attr('checked', true);
        
                    });
        
                    $("#actualizar").attr('disabled', false);

                }

            });

        }

    });

});