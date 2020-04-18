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
    <link rel="stylesheet" href="{{asset('css/modals.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- modernizr JS	============================================ -->
    <link rel="stylesheet" href="{{asset('radio/customswitch.css')}}">
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>

	<![endif]-->
    <!-- Start Left menu area -->
    @include('leftsidebar');
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        @include('espacamento')

        {{--=============================================cabecalho=======================--}}
        @include('cabecalho')

        {{--===================================Fim de cabecalho===========================================--}}
            <!-- Mobile Menu start -->

            <!-- Mobile Menu end -->
            @include('usuario.breadcome-menu')



        <div class="single-pro-review-area mt-t-30 mg-b-15" >
            <div class="container-fluid" >
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                        <div class="product-payment-inner-st" >
                            <ul id="myTabedu1" class="tab-review-design" >
                                <li class="active"><a href="#description" >Registo do utilizador</a></li>
                                <li><a href="#reviews">Pesquisar|Ediar|Remover utilizador</a></li>
                                <li><a href="#INFORMATION">Outras Informações</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit" >
                                <div class="product-tab-list tab-pane fade active in" id="description" >
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">

                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="col-lg-2">
                                                                    <label for="">Nome Completo</label>
                                                                </div>
                                                                 <div class="form-group col-lg-10">
                                                                        <input name="nome" type="text" class="form-control" placeholder="exemplo: Edmilson David Novela">
                                                                 </div>

                                                                <div class="col-lg-2">
                                                                    <label for="">Morada</label>
                                                                </div>

                                                                <div class="form-group col-lg-10">
                                                                    <input name="endereco" type="text" class="form-control" placeholder="exemplo: Maputo/Matola/Zona verde">
                                                                </div>

                                                                <div class="col-lg-2">
                                                                    <label for="">Número de Telefone</label>
                                                                </div>
                                                                <div class="form-group col-lg-10">
                                                                    <input name="telefone" type="number" class="form-control" placeholder="exemplo: 844070515">
                                                                </div>

                                                                <div class="col-lg-2">
                                                                    <label for="">Email</label>
                                                                </div>
                                                                <div class="form-group col-lg-10">
                                                                    <input name="email" id="finish" type="email" class="form-control" placeholder="exemplo:edmilsondavid2@gmail.com">
                                                                </div>

                                                                    <div class="col-lg-2">
                                                                        <div class="form-label">Activo?</div>
                                                                    </div>
                                                                    <div class="col-lg-2">


                                                                <div class="form-group">

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
                                                                </div>
                                                                    <div class="col-lg-8">
                                                                        <p>Utilizador (activo) será adicionado como gestor do sistema</p>
                                                                        <p>Utilizador (não activo) somente terá acesso a página principal do sistema</p>
                                                                    </div>
                                                                </div>

                                                        </div>
                                                        <br>
                                                        <br>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="">
                                                                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="salvare()">Registar</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <!-- Static Table Start -->
                                    <div class="data-table-area mg-b-15">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="sparkline13-list">
                                                        <div class="sparkline13-hd">
                                                            <div class="main-sparkline13-hd">
                                                                <h1>Tabela<span class="table-project-n"> de Dados</span> dos Usuarios</h1>
                                                            </div>
                                                        </div>
                                                        <div class="sparkline13-graph">
                                                            <div class="datatable-dashv1-list custom-datatable-overright">

                                                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                                       data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                                    <thead>
                                                                    <tr>

                                                                        <th data-field="name">Nome</th>
                                                                        <th data-field="email" data-editable="true">Email</th>
                                                                        <th data-field="phone" data-editable="true">Telefone</th>

                                                                        <th data-field="complete">Situação</th>

                                                                        <th data-field="action" >Detalhes</th>
                                                                        <th data-field="f" >Editar</th>
                                                                        <th data-field="">Remover</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @forelse($usuarios as $usuario)
                                                                    <tr>

                                                                        <td>{{$usuario->name}}</td>
                                                                        <td>{{$usuario->email}}</td>
                                                                        <td>{{$usuario->telefone}}</td>


                                                                        <td>@if($usuario->situacao==1)
                                                                        <div class="alert-success"><center>Activo</center></div>
                                                                            @else
                                                                                <div class="alert-danger"><center>Não activo</center></div>
                                                                           @endif
                                                                        </td>
                                                                        <td class="datatable-ct"><button data-toggle="modal" data-target="#exampleModalLong" style="border-radius: 10px; width: 90px;" class="btn-info buscarparamostrar" id="{{$usuario->id}}" data-id="{{$usuario}}"  ><i class="fa fa-info"></i></button></td>
                                                                        <td class="datatable-ct"><button  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="border-radius: 10px; width: 90px;" class="btn-success buscarParaEditar" id="{{$usuario->id}}"  data-id="{{$usuario}}"><i class="fa fa-edit"></i></button></td>
                                                                        <td class="datatable-ct"><button class="btn-danger buscarParaRemover" style=" border-radius: 10px"   id="{{$usuario->id}}" data-id="{{$usuario}}"><i class="fa fa-remove"></i></button>
                                                                        </td>
                                                                    </tr>
                                                                    @empty


                                                                    @endforelse

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Static Table End -->
                                </div>
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            {{------start-----}}
                                            <div class="admin-pro-accordion-wrap shadow-inner">
                                                <div class="alert-title">
                                                    <h2>Animate flash Accordion</h2>
                                                    <p>These are the Custom bootstrap Animate flash Accordion style 2</p>
                                                </div>
                                                <div class="panel-group edu-custon-design" id="accordion2">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading accordion-head">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
                                                                    Número total de utilizadores</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse4" class="panel-collapse panel-ic collapse in">
                                                            <div class="panel-body admin-panel-content animated flash">
                                                                <div class="income-dashone-total res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                                                                    <div class="income-dashone-pro">
                                                                        <div class="income-rate-total">
                                                                            <div class="price-edu-rate">
                                                                                <h1><span class="counter">{{$usuarios->count()}}</span> Utilizadores do sistema</h1>
                                                                            </div>
                                                                            <div class="price-graph">
                                                                                <span id="sparkline2"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="income-range visitor-cl">

                                                                            <span class="income-percentange bg-blue"><span class="counter">100</span>% <i class="fa fa-level-up"></i>
                                                                     </span>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading accordion-head">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse5">
                                                                    Número total de administradores</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse5" class="panel-collapse panel-ic collapse">
                                                            <div class="panel-body admin-panel-content animated flash">
                                                                <div class="income-dashone-total res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                                                                    <div class="income-dashone-pro">
                                                                        <div class="income-rate-total">
                                                                            <div class="price-edu-rate">
                                                                                <h1><span class="counter">{{$totalDeAdmin}}</span> Administrador(es) do sistema</h1>
                                                                            </div>
                                                                            <div class="price-graph">
                                                                                <span id="sparkline2"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="income-range visitor-cl">

                                                                            <span class="income-percentange bg-blue"><span class="counter">{{$totalDeAdmin/$usuarios->count()}}</span>% <i class="fa fa-level-up"></i>
                                    </span>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading accordion-head">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse6">
                                                                    Número total de utilizadores normais</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse6" class="panel-collapse panel-ic collapse">
                                                            <div class="panel-body admin-panel-content animated flash">
                                                                <div class="income-dashone-total res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                                                                    <div class="income-dashone-pro">
                                                                        <div class="income-rate-total">
                                                                            <div class="price-edu-rate">
                                                                                <h1><span class="counter">{{$totalDeUserNormal}}</span> Utilizadores normais</h1>
                                                                            </div>
                                                                            <div class="price-graph">
                                                                                <span id="sparkline2"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="income-range visitor-cl">

                                                                            <span class="income-percentange bg-blue"><span class="counter">{{$totalDeUserNormal/$usuarios->count()}}</span>% <i class="fa fa-level-up"></i>
                                    </span>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-----end----}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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


    <script src="{{asset('js/editable/jquery.mockjax.js')}}"></script>
    <script src="{{asset('js/editable/mock-active.js')}}"></script>
    <script src="{{asset('js/editable/select2.js')}}"></script>
    <script src="{{asset('js/editable/moment.min.js')}}"></script>
    <script src="{{asset('js/editable/bootstrap-datetimepicker.js')}}"></script>
    <script src="{{asset('js/editable/bootstrap-editable.js')}}"></script>
    <script src="{{asset('js/editable/xediable-active.js')}}"></script>



    <script src="{{asset('js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{asset('js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('js/data-table/bootstrap-table-export.js')}}"></script>




{{--============================Javascript codigo=====================--}}
    <script>
       function salvare() {




           var situacao = [];
           $('.get_radio').each(function() {
               if ($(this).is(":checked")) {
                   situacao.push($(this).val());
               }
           });

         var status=(situacao)[0];
         console.log(status);

//Metodo para inserir fornecedor via ajax
         $.ajax({
                type:'post',
                url: 'usuario/salvar',
                dataType: "json",
                data:{
                    '_token':$('input[name=_token]').val(),
                    'nome':$('input[name=nome]').val(),
                    'endereco':$('input[name=endereco]').val(),
                    'telefone':$('input[name=telefone]').val(),
                    'email':$  ('input[name=email]').val(),
                    'situacao':status,

         



                },
                success:function(data){
                    if($.isEmptyObject(data.error)){
                          console.log(data);
                          alert(data.success);
                    }else{

                        printErrorMsg(data.error);
                    }

                }
            });

        }
        function printErrorMsg (msg) {
            $total=msg.length;
            if($total==1){
                $campo="Campo não preenchido";
            }else{
                $campo="Campos não preenchidos ";
            }
            $(".print-error-msg").find("strong").html('');
            $(".print-error-msg").find(" strong").append($total+' '+$campo);
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }







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

</body>

</html>