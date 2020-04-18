<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sistemas de Gestao de Denuncias de Assedios - SGDA UEM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('logoTipoUem.png')}}">

    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/educate-custon-icon.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/calendar/fullcalendar.print.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <link rel="stylesheet" href="{{asset('css/modals.css')}}">
    <!-- modernizr JS

		============================================ -->
    <link rel="stylesheet" href="{{asset('radio/customswitch.css')}}">
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>

	<![endif]-->
    <!-- Start Left menu area -->
@include('leftsidebar')
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        @include('espacamento')

        @include('cabecalho')

        @include('usuario.breadcome-menu')
        {{--===========================Inicio da tabela============================================--}}
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Tabela <span class="table-project-n">Data</span> Table</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb" name="selecionado" onchange="MultiplosSelecionados()">
                                            <option value="">Com os selecionados </option>
                                            <option value="remover">Remover</option>
                                            <option value="enviaremail">Enviar Email</option>
                                            <option value="mudarsituacao">Mudar a Situação</option>
                                        </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                           data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                        <tr>
                                            <th data-field="state" ></th>
                                            <th data-field="id">Nome</th>
                                            <th data-field="name" data-editable="true">Email</th>
                                            <th data-field="email" data-editable="true">Telefone</th>
                                            <th data-field="complete">Situação</th>
                                            <th data-field="action" >Detalhes</th>
                                            <th data-field="f" >Editar</th>
                                            <th data-field="">Remover</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($usuarios as $usuario)

                                        <tr>
                                            <td><input type="checkbox" class="get_value"  value="{{$usuario->id}}"></td>
                                            <td>{{$usuario->name}}</td>
                                            <td>{{$usuario->email}}</td>
                                            <td>{{$usuario->telefone}}</td>
                                            <td>@if($usuario->situacao==1)
                                                    <div class="alert-success"><center>Activo</center></div>
                                                @else
                                                    <div class="alert-danger"><center>Não activo</center></div>
                                                @endif
                                            </td>

                                            <td class="datatable-ct"><button data-toggle="modal" data-target="#exampleModalLong" style="border-radius: 10px; width: 90px;"  class="btn-info buscarparamostrar" id="{{$usuario->id}}" data-id="{{$usuario}}" > <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                                    Detalhes</button></td>

                                            <td class="datatable-ct"><button   data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="border-radius: 10px; width: 95px;" class="btn-success buscarParaEditar" id="{{$usuario->id}}"  data-id="{{$usuario}}"><i class="fa fa-edit"></i> Editar</button></td>
                                            <td class="datatable-ct"><button class="btn-danger buscarParaRemover" style="border-radius: 10px; width: 95px;" id="{{$usuario->id}}" data-id="{{$usuario}}"><i class="fa fa-trash"></i> Remover</button>
                                            </td>

                                        </tr>

                                         @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--==================================Fim da tabela=======================================--}}





        {{--=========================Modal para confirmar a remocacao de multiplos dados==================--}}

        <div id="modaldesejaremovertudo" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <div class="modal-body">
                        <span class="educate-icon educate-danger modal-check-pro information-icon-pro"></span>
                        <h2>Atenção!</h2>
                        <p>Os dados selecionados serão removidas permanentemente do sistema, tens certeza que prestou atenção durante a seleção de dados e pretendes remover?</p>
                    </div>
                    <div class="modal-footer danger-md">
                        <a data-dismiss="modal" href="#">Cancel</a>
                        <a href="" id="confirmarremocao">Confirmar</a>
                    </div>
                </div>
            </div>
        </div>




        {{--======================================Fim de modal de remocao multipla===========================--}}




        {{--================================================Modal para envio de email========================================--}}



        <div class="modal fade" id="modalparaemail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #1c7430">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: white">Enviar Email</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">

                                <div class="form-group-inner">
                                    <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                        <label for="recipient-name" class="col-form-label">Assunto</label>
                                    </div>
                                    <div class="form-group col-lg-10 col-md-10 col-sm-10">
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                </div>




                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Mensagem</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>

                            <input type="file" multiple="multiple">


                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
        {{--=====================================================fim de modal de email=======================================--}}










        {{--================================================Modal para mudar situacao========================================--}}



        <div class="modal fade" id="modalparamudarsituacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #1c7430">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: white">Mudar Situação</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>

                            <div class="form-group">
                                <div class="form-label">Activo?</div>
                                <div class="custom-switches-stacked">
                                    <label class="custom-switch">
                                        <input id="radio_sim" type="radio" name="option" value="1" class="custom-switch-input get_radio"  checked="true">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Sim</span>
                                    </label>
                                    <label class="custom-switch">
                                        <input id="radio_nao" type="radio" name="option" value="0" class="custom-switch-input get_radio">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Não</span>
                                    </label>
                                </div>
                            </div>


                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary" id="confirmarsituacao">Mudar</button>
                    </div>
                </div>
            </div>
        </div>
        {{--=====================================================fim de modal de mudar situacao=======================================--}}




        {{--========================================== modal para detalhes de informacao de user ================================--}}


    <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true"style=" color: #0B792F" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #1c7430">
                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white">Detalhes dos dados do usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="color: #000000" >
                        <div class="row">
                            <div class="form-group-inner">
                                <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                    <label for="recipient-name" class="col-form-label">Nome</label>
                                </div>
                                <div class="form-group col-lg-10 col-md-10 col-sm-10" style="background: #F3F5FA">
                                    <p id="nomedetalhe"></p>
                                </div>


                                <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                    <label for="recipient-name" class="col-form-label">Email</label>
                                </div>
                                <div class="form-group col-lg-10 col-md-10 col-sm-10" style="background: #F3F5FA">
                                    <p id="emaildetalhe"></p>
                                </div>


                                <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                    <label for="recipient-name" class="col-form-label">Telefone</label>
                                </div>
                                <div class="form-group col-lg-10 col-md-10 col-sm-10" style="background: #F3F5FA">
                                    <p id="telefonedetalhe"></p>
                                </div>


                                <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                    <label for="recipient-name" class="col-form-label">Morada</label>
                                </div>
                                <div class="form-group col-lg-10 col-md-10 col-sm-10" style="background: #F3F5FA">
                                    <p id="moradadetalhe"></p>
                                </div>




                                <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                    <label for="recipient-name" class="col-form-label">Situacao</label>
                                </div>
                                <div class="form-group col-lg-10 col-md-10 col-sm-10" style="background: #F3F5FA">
                                    <p id="situacaodetalhe"></p>
                                </div>

                                <div class="form-group col-lg-3 col-md-3 col-sm-3">
                                    <label for="recipient-name" class="col-form-label">Registado no dia</label>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-sm-9" style="background: #F3F5FA">
                                    <p id="criadodetalhe"></p>
                                </div>

                                <div class="form-group col-lg-3 col-md-3 col-sm-3">
                                    <label for="recipient-name" class="col-form-label">Actualizado no dia</label>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-sm-9" style="background: #F3F5FA">
                                    <p id="actualizadodetalhe"></p>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                    </div>
                </div>
            </div>
        </div>
        {{--======================================================= Fim de modal de detalhes====================================--}}




        {{--================================================Modal para a edicao de dados========================================--}}



        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #1c7430">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: white">Actualizar os Dados</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <input type="number" id="userId" name="atid" hidden>
                                <div class="form-group-inner">
                                    <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                        <label for="recipient-name" class="col-form-label">Nome</label>
                                    </div>
                                    <div class="form-group col-lg-10 col-md-10 col-sm-10">
                                        <input type="text" class="form-control" id="usernome" name="atnome">
                                    </div>
                                </div>


                                <div class="form-group-inner">
                                    <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                        <label for="recipient-name" class="col-form-label">Email</label>
                                    </div>
                                    <div class="form-group col-lg-10 col-md-10 col-sm-10">
                                        <input type="text" class="form-control" id="useremail" name="atemail">
                                    </div>
                                </div>



                                <div class="form-group-inner">
                                    <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                        <label for="recipient-name" class="col-form-label">Telefone</label>
                                    </div>
                                    <div class="form-group col-lg-10 col-md-10 col-sm-10">
                                        <input type="text" class="form-control" id="usertelefone" name="attelefone">
                                    </div>
                                </div>


                                <div class="form-group-inner">
                                    <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                        <label for="recipient-name" class="col-form-label">Morada</label>
                                    </div>
                                    <div class="form-group col-lg-10 col-md-10 col-sm-10">
                                        <input type="text" class="form-control" id="usermorada" name="atmorada">
                                    </div>
                                </div>





                                <div class="form-group-inner">
                                    <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                        <label for="recipient-name" class="col-form-label">Cargo</label>
                                    </div>
                                    <div class="form-group col-lg-10 col-md-10 col-sm-10">
                                        <input type="text" class="form-control" id="usercargo" name="atcargo">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Descrição</label>
                                <textarea class="form-control" id="userdescricao" name="atdescricao"></textarea>
                            </div>



                            <div class="form-group">
                                <div class="form-label">Activo?</div>
                                <div class="custom-switches-stacked">
                                    <label class="custom-switch">
                                        <input id="radio_sim" type="radio" name="option" value="1" class="custom-switch-input get_radio_at"  checked="true">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Sim</span>
                                    </label>
                                    <label class="custom-switch">
                                        <input id="radio_nao" type="radio" name="option" value="0" class="custom-switch-input get_radio_at">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Não</span>
                                    </label>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary" onclick="actualizar()">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
        {{--=====================================================fim de modal de edicao=======================================--}}




        {{--=========================Modal para confirmar a remocacao de  dados==================--}}

        <div id="modaldesejaremover" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <input type="number" id="userIddelete" name="removeid" hidden>
                    <div class="modal-body">
                        <span class="educate-icon educate-danger modal-check-pro information-icon-pro"></span>
                        <h2>Atenção!</h2>
                        <p>Tens certeza que desejas remover o</p>
                        <p id="usernomedelete"></p>
                    </div>
                    <div class="modal-footer danger-md">
                        <a data-dismiss="modal" href="#">Cancel</a>
                        <a href="" onclick="remover()">sim</a>
                    </div>
                </div>
            </div>
        </div>

        @include('rodape')
    </div>

    <!-- jquery
		============================================ -->
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{asset('js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{asset('js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{asset('js/morrisjs/raphael-min.js')}}"></script>
    <script src="{{asset('js/morrisjs/morris.js')}}"></script>
    <script src="{{asset('js/morrisjs/morris-active.js')}}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <script src="{{asset('js/sparkline/sparkline-active.js')}}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{asset('js/calendar/moment.min.js')}}"></script>
    <script src="{{asset('js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/calendar/fullcalendar-active.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('js/main.js')}}"></script>
    <!-- tawk chat JS
		============================================ -->
    {{--<script src="{{asset('js/tawk-chat.js')}}"></script>--}}

    <script src="{{asset('js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{asset('js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('js/data-table/bootstrap-table-export.js')}}"></script>


    <script src="{{asset('js/editable/jquery.mockjax.js')}}"></script>
    <script src="{{asset('js/editable/mock-active.js')}}"></script>
    <script src="{{asset('js/editable/select2.js')}}"></script>
    <script src="{{asset('js/editable/moment.min.js')}}"></script>
    <script src="{{asset('js/editable/bootstrap-datetimepicker.js')}}"></script>
    <script src="{{asset('js/editable/bootstrap-editable.js')}}"></script>
    <script src="{{asset('js/editable/xediable-active.js')}}"></script>
</body>


<script>
    function confirmarremocao() {
        return 1;
    }

    function MultiplosSelecionados(){

/*busca e guarda todos id na variavel usuarioid*/
        var usuarioid = [];
        $('.get_value').each(function() {
            if ($(this).is(":checked")) {
                usuarioid.push($(this).val());
            }
        });



/*verificar se foi selecionado select para a remocao*/
         if($('select[name=selecionado]').val()=="remover"){

             $('#modaldesejaremovertudo').modal('show');
             $('#confirmarremocao')[0].addEventListener('click', function () {
alert('funcionou');


                 $.ajax({
                     type:'post',
                     url: 'remover',
                     data:{
                         '_token':$('input[name=_token]').val(),
                         'id': usuarioid,

                     },
                     success:function(data){
                         if($.isEmptyObject(data.error)){
                             /*alert(data);*/
                             console.log(data);
                             alert('removido com sucesso');
                             /*window.location.reload();*/
                         }else{

                             alert('erro')
                         }

                     },

                 });

             },false);


    }


         if($('select[name=selecionado]').val()=="enviaremail"){
             $('#modalparaemail').modal('show');
         }





        if($('select[name=selecionado]').val()=="mudarsituacao"){
            $('#modalparamudarsituacao').modal('show');




            $('#confirmarsituacao')[0].addEventListener('click', function () {

                var situacao = [];
                $('.get_radio').each(function() {
                    if ($(this).is(":checked")) {
                        situacao.push($(this).val());
                    }
                });

                $.ajax({
                    type:'post',
                    url: 'mudarsituacao',
                    data:{
                        '_token':$('input[name=_token]').val(),
                        'id': usuarioid,
                        'situacao':situacao

                    },
                    success:function(data){
                        if($.isEmptyObject(data.error)){
                            /*alert(data);*/
                            console.log(data);
                            alert('Modificado com sucesso');
                            window.location.reload();
                        }else{

                            alert('erro')
                        }

                    },

                });

            },false);


        }



          }





    //Buscar para mostrar como detalhes========================================
    $(document).ready(function(){
        $('.buscarparamostrar').on('click',function(){
            var id = $(this).attr('id');
            var  objJson = $(this).data('id');
            console.log('o id é: '+id);
            //console.log(val(objJson[id].email));
            console.log('o index é: '+objJson);
            //$('#modalBuscar').html(id[$('.buscar').val()].nome);
            document.getElementById('nomedetalhe').innerHTML=objJson['name'];
            document.getElementById('emaildetalhe').innerHTML=objJson['email'];
            document.getElementById('telefonedetalhe').innerHTML=objJson['telefone'];
            document.getElementById('moradadetalhe').innerHTML=objJson['bairro'];
            if(objJson['situacao']==1){
                document.getElementById('situacaodetalhe').innerHTML="Activo";
            }else {
                document.getElementById('situacaodetalhe').innerHTML="Nao activo";}
            document.getElementById('criadodetalhe').innerHTML=objJson['created_at'];
            document.getElementById('actualizadodetalhe').innerHTML=objJson['updated_at'];
        })
    });




    //========================================== Buscar para editar=========================================
    $(document).ready(function(){
        $('.buscarParaEditar').on('click',function(){
            var id = $(this).attr('id');
            var  objJson = $(this).data('id');
            console.log('o id é: '+id);
            //console.log(val(objJson[id].email));
            console.log('o index é: '+objJson);
            //$('#modalBuscar').html(id[$('.buscar').val()].nome);
            document.getElementById('userId').value=objJson['id'];
            document.getElementById('usernome').value=objJson['name'];
            document.getElementById('useremail').value=objJson['email'];
            document.getElementById('usertelefone').value=objJson['telefone'];
            document.getElementById('usermorada').value=objJson['bairro'];
        })
    });





    function  actualizar() {


        var situacao = [];
        $('.get_radio_at').each(function() {
            if ($(this).is(":checked")) {
                situacao.push($(this).val());
            }
        });

        var status=(situacao)[0];

        $.ajax({
            type:'post',
            url: 'editarusuario',
            data:{
                '_token':$('input[name=_token]').val(),
                'id':$('input[name=atid]').val(),
                'nome':$('input[name=atnome]').val(),
                'email':$('input[name=atemail]').val(),
                'morada':$('input[name=atmorada]').val(),
                'telefone':$('input[name=attelefone]').val(),
                'situacao':status
            },
            success:function(data){

                alert("Dados actualizados com sucesso!");
                window.location.reload();

            },
            error:function () {
                alert("Os dados nao foram actualizados, ocorreum um erro durante o processamento de actualizacao dos mesmos");

            }
        });
    }



    $(document).ready(function(){
        $('.buscarParaRemover').on('click',function(){
            var id = $(this).attr('id');
            var  objJson = $(this).data('id');
            console.log('o id é: '+id);
            //console.log(val(objJson[id].email));
            console.log('o index é: '+objJson);
            document.getElementById('userIddelete').value=objJson['id'];
            document.getElementById('usernomedelete').innerHTML=objJson['name'];
            $('#modaldesejaremover').modal('show');

        })
    });





    function remover() {



        $.ajax({
            type:'post',
            url: 'removerusuario',
            data:{
                '_token':$('input[name=_token]').val(),
                'id':$('input[name=removeid]').val(),

            },
            success:function(data){

                alert("Dados Removido com sucesso!");
                window.location.reload();

            },
            error:function () {
                alert("Os dados nao foram removidos, ocorreum um erro durante o processamento de actualizacao dos mesmos");

            }
        });

    }


</script>

</html>