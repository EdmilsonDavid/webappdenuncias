<div class="modal fade" id="modalFastEvent" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #1c7430">
                <h5 class="modal-title" id="titleModal" style="color: white"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div style="background: #F3F5FA; margin-bottom: 8px">
                    <div class="print-error-msg alert-danger">
                        <ul></ul>
                    </div>
                </div>

                <form id="formFastEvent">

                <div class="form-group row">
                    <label for="title" class="col-sm-4 col-form-label">Titulo</label>
                    <div class="col-sm-8">
                        <input type="text" name="titulo" class="form-control" id="titulo">
                        <input type="text" name="id" id="id" hidden>
                    </div>
                </div>

                <div class="form-group row">
                     <label for="start" class="col-sm-4 col-form-label ">Hora Incial</label>
                      <div class="col-sm-8">
                         <input type="text" name="start" class="form-control time" id="start">
                      </div>
                </div>


                <div class="form-group row">
                 <label for="end" class="col-sm-4 col-form-label">Hora Final</label>
                 <div class="col-sm-8">
                      <input type="text" name="end" class="form-control  time" id="end">
                  </div>
                </div>


                <div class="form-group row">
                  <label for="cor" class="col-sm-4 col-form-label">Cor</label>
                    <div class="col-sm-8">
                        <input type="color" name="color" class="form-control" id="color">
                    </div>
                </div>

                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger deleteFastEvent">Remover</button>
                <button type="button" class="btn btn-primary saveFastEvent">Salvar</button>
            </div>

        </div>
    </div>
</div>
