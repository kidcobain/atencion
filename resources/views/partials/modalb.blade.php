@if (session('exito'))
        <div class="alert alert-success col-sm-offset-2 col-sm-8 mensaje">
            {{ Session::get('exito') }}
        </div>
@endif

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirmar</h4>
            </div>
            
            <div class="modal-body">
                    <p>¿Está seguro que desea eliminar el registro?</p>
            </div>
                
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger btn-ok">Eliminar</a>
            </div>
        </div>
    </div>
</div>
<script src="/js/jquery-2.1.4.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                
        $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
            });
    });
</script>