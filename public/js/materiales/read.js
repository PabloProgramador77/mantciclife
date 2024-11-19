jQuery.noConflict();
jQuery(document).ready(function(){

    $("#actualizar").attr('disabled', true);

    $(".editar").on('click', function(e){

        e.preventDefault();

        $("#nombreEditar").val('');
        $("#precioEditar").val('');
        $("#descripcionEditar").val('');
        $("#idMaterial").val('');

        var id = $(this).attr('data-value').split(',')[0];
        var nombre = $(this).attr('data-value').split(',')[1];
        var precio = $(this).attr('data-value').split(',')[2];
        var descripcion = $(this).attr('data-value').split(',')[3];
        var idCategoria = $(this).attr('data-value').split(',')[4];
        var categoria = $(this).attr('data-value').split(',')[5];

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

            $("#nombreEditar").val( nombre );
            $("#idMaterial").val( id );
            $("#precioEditar").val( precio );
            $("#descripcionEditar").val( descripcion );

            $("#categoriaEditar").prepend('<option value="'+idCategoria+'">'+categoria+'</option>');
            $("#categoriaEditar").val( idCategoria );
            $("#categoriaEditar option[value='"+idCategoria+"']:not(:first)").remove();

            $("#actualizar").attr('disabled', false);

        }

    });

});