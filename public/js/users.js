
$(document).ready(function(){

    $('#edit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('did')
        var name = button.data('dname') 
        var email = button.data('demail') 
        var modal = $(this)
        modal.find('#id').val(id)
        modal.find('#name').val(name)
        modal.find('#email').val(email)
    })

    $('#delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('did')
        var modal = $(this)
        modal.find('#id').val(id)
    })
});