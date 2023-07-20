$(function () {

    $('.addMenuTombol').on('click', function () {
        $('#newMenuModalLabel').html('Add New Menu');
        $('.modal-footer button[type=submit]').html('Add New Menu');
    });

    $('.showEditModal').on('click', function () {

        $('#newMenuModalLabel').html('Edit Menu');
        $('.modal-footer button[type=submit]').html('Edit Menu');
        $('.modal-body form').attr('action', 'http://localhost/wpu-login/menu/edit');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/wpu-login/menu/getedit',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#menu').val(data.menu);
                $('#id').val(data.id);
            }
        });

    });

});