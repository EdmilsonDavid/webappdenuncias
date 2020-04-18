

{{--================================================Modal para a edicao de dados========================================--}}



<div class="modal fade" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #1c7430">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white">Postar informacao</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('post.create')}}" method="post">
            <div class="modal-body">

                    @csrf
                    <div class="row">

                        <div class="form-group-inner">
                            <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                <label for="recipient-name" class="col-form-label">Titulo</label>
                            </div>
                            <div class="form-group col-lg-10 col-md-10 col-sm-10">
                                <input type="text" class="form-control" name="titulo" id="recipient-name">
                            </div>
                        </div>






                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Descrição</label>
                        <textarea class="form-control" name="conteudo" id="message-text"></textarea>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <input type="submit" class="btn btn-primary" value="Registar">
            </div>
            </form>
        </div>
    </div>
</div>
{{--=====================================================fim de modal de edicao=======================================--}}
