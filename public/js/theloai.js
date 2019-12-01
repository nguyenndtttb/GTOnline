
$(document).ready(function(){

    $('#edit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('did')
        var ten = button.data('dten') 
        var tenkhongdau = button.data('dtenkhongdau') 
        var modal = $(this)
        modal.find('#id').val(id)
        modal.find('#ten').val(ten)
        modal.find('#tenkhongdau').val(tenkhongdau)
    })

    $('#delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('did')
        var modal = $(this)
        modal.find('#id').val(id)
    })
});