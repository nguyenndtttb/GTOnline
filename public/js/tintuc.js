
$(document).ready(function(){

    $('#edit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('did')
        var tieude = button.data('dtieude') 
        var tdkd = button.data('dtdkd')
        var tomtat = button.data('dtomtat') 
        var noidung = button.data('dnoidung')   
        var modal = $(this)
        modal.find('#id').val(id)
        modal.find('#tieude').val(tieude)
        modal.find('#tieudekhongdau').val(tdkd)
        modal.find('#tomtat').val(tomtat)
        modal.find('#noidung').val(noidung)
    })

    $('#delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('did')
        var modal = $(this)
        modal.find('#id').val(id)
    })
});