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
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('tabelaD/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>



    <style>
        input[type=range] {
            -webkit-appearance: none;
            margin: 20px 0;
            width: 100%;
        }
        input[type=range]:focus {
            outline: none;
        }
        input[type=range]::-webkit-slider-runnable-track {
            width: 100%;
            height: 4px;
            cursor: pointer;
            animate: 0.2s;
            background: #03a9f4;
            border-radius: 25px;
        }
        input[type=range]::-webkit-slider-thumb {
            height: 20px;
            width: 20px;
            border-radius: 50%;
            background: #fff;
            box-shadow: 0 0 4px 0 rgba(0,0,0, 1);
            cursor: pointer;
            -webkit-appearance: none;
            margin-top: -10px;
        }
        input[type=range]:focus::-webkit-slider-runnable-track {
            background: #03a9f4;
        }
        .range-wrap{

            position: relative;
        }
        .range-value{
            position: absolute;
            top: -1000%;
        }
        .range-value span{
            width: 30px;
            height: 24px;
            line-height: 24px;
            text-align: center;
            background: #03a9f4;
            color: #fff;
            font-size: 12px;
            display: block;
            position: absolute;
            left: 50%;
            transform: translate(-50%, 0);
            border-radius: 6px;
        }
        .range-value span:before{
            content: "";
            position: absolute;
            width: 0;
            height: 0;
            border-top: 10px solid #03a9f4;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            margin-top: -1px;
        }
    </style>



</head>

<body>

    @include('leftsidebar')
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area" >
            <div class="header-top-area" >
                <div class="container-fluid">
                    <div class="row" style="background-color: #0E993C !important;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper" >
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn" style="background-color: #0E993C !important;">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12" >
                                        <div class="header-top-menu tabl-d-n"  >

                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu" >
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Mensagens</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="{{asset('logoTipoUem.png')}}" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/4.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/3.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/2.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">Ver Todas Mensagens</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="perfil.png" alt="" />
															<span class="admin-name">{{ Auth::user()->name }} </span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>Minha Conta</a>
                                                        </li>

                                                        <li>

                                                            <a class="edu-icon edu-locked author-log-ic" href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                                {{ __('Sair') }}
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>


                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->

            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Denúncias Presencias</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="analytics-sparkle-area">
            <div class="container-fluid">







                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list mt-b-30">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Formulário</h1>
                                    <div class="panel-heading accordion-head">
                                        <h4 class="panel-title" style="float: right">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                Minimize e Maximize</a>
                                        </h4>
                                    </div>
                                    <br>
                                </div>
                            </div>


                            <div id="collapse1" class="panel-collapse panel-ic collapse in">
                             <div class="panel-body admin-panel-content animated bounce">
                            <div class="sparkline12-graph">
                                <div class="input-knob-dial-wrap">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Nome da Vitima</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                <input type="text" class="form-control" name="nome" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Numero da Vitima</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                <input type="text" class="form-control" name="telefone" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Email da Vitima</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                <input type="text" class="form-control" name="email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Nome do Acusado</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text" class="form-control" name="acusado" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Local</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                <input type="text" class="form-control" name="local" placeholder="Faculdade/Departamento onde o Acusado se encontra">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Tipo do Assédio</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <select name="tipodeassedio" id="" class="form-control">
                                                <option value="Moral">Moral</option>
                                                <option value="Sexual">Sexual</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Descrição</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                <textarea name="descricao" id="" class="form-control" rows="4"></textarea>

                                        </div>
                                    </div>
                                    <hr>
                                    <button class="btn btn-primary" onclick="salvar()">Gravar</button>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
                {{--====================================--}}






                <div class="row">



                    <div class="analytics-sparkle-line reso-mg-b-30 col-lg-12">
                        <div class="box col-md-12">
                            <div class="box-inner">

                                {{--------------------------------------------------}}
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Dados das Denuncias das Vitimas</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Nome da Vitima</th>
                                                <th>Telefone</th>
                                                <th>Tipo de Assedio</th>
                                                <th>Acusado(a)</th>
                                                <th>Situação da denúncia</th>
                                                <th>Detalhes</th>
                                                <th>Registar a Situação</th>
                                                <th>Editar</th>
                                                <th>Editar</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @isset($dpresencias)
                                            @foreach($dpresencias as $dpresencial)
                                            <tr>
                                                <td>{{$dpresencial->nome}}</td>
                                                <td>{{$dpresencial->telefone}}</td>
                                                <td>{{$dpresencial->tipodeassedio}}</td>
                                                <td> {{$dpresencial->denuciado}}</td>
                                                @if($dpresencial->estado==0)
                                                <td>Nao resolvido</td>
                                                @elseif($dpresencial->estado==100)
                                                    <td>Resolvido</td>
                                                 @else
                                                    <td>Em processo</td>
                                                 @endif

                                                <td> <button data-toggle="modal" data-target="#exampleModalLong" style="border-radius: 10px; width: 90px;"  class="btn-info buscarparamostrar" id="" data-id="" > <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                                        Detalhes</button></td>
                                                <td> <button data-toggle="modal" data-target="#exampleModalLong" style="border-radius: 10px; width: 90px;"  class="btn-warning buscarparamudarestado" id="{{$dpresencial->id}}" data-id="{{$dpresencial}}" > <i class="glyphicon glyphicon-stats icon-white"></i>
                                                        Situação</button></td>
                                                <td><button   data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="border-radius: 10px; width: 95px;" class="btn-success buscarParaEditar" id=""  data-id=""><i class="fa fa-edit"></i> Editar</button></td>
                                                <td>



                                                <button class="btn-danger buscarParaRemover" style="border-radius: 10px; width: 95px;" id="" data-id=""><i class="fa fa-trash"></i> Remover</button>
                                                </td>
                                            </tr>
                                             @endforeach
                                             @endisset
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Nome da Vitima</th>
                                                <th>Telefone</th>
                                                <th>Tipo de Assedio</th>
                                                <th>Acusado(a)</th>
                                                <th>Situação da denúncia</th>
                                                <th>Detalhes</th>
                                                <th>Registar a Situação</th>
                                                <th>Editar</th>
                                                <th>Editar</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                              {{--  ---------------------------------------------}}
                            </div>
                        </div>
                        <!--/span-->

                    </div><!--/row-->





                </div>
            </div>
        </div>





        <div class="footer-copyright-area" style="background-color: #0E993C !important;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">

                            <p>Copyright © 2019. Todos direitos reservados. desenvolvido pela <a href="https:google.com">CeCAGe</a></p>
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
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: white">Registar a Situação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="color: #000000" >
                    <div class="row">
                       <div class="col-lg-12">
                        <div class="form-group">

                            <div class="range-wrap">
                                <div class="range-value" id="rangeV"></div>
                                <input id="range" type="range" min="0" max="100"  name="situacao"  step="1">

                            </div>
                            <input type="text" name="idsituacao" id="idsituacao" hidden>
                        </div>
                       </div>
                    </div>
                    <div class="col-lg-12">
                        <button class="btn btn-primary" onclick="salvarestado()">Gravar</button>
                    </div>
                </div>

                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                </div>
            </div>
        </div>
    </div>
    {{--======================================================= Fim de modal de detalhes====================================--}}


    <!-- jquery
		============================================ -->
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->

    <!-- price-slider JS
		============================================ -->

    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->

    <!-- sticky JS
		============================================ -->
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <!-- counterup JS
		============================================ -->

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

    <!-- morrisjs JS
		============================================ -->

    <!-- calendar JS
		============================================ -->


    <!-- plugins JS
		============================================ -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('js/main.js')}}"></script>

    <!-- tawk chat JS
		============================================ -->
    {{--<script src="{{asset('js/tawk-chat.js')}}"></script>--}}


    <!-- DataTables -->
    <script src="{{asset('tabelaD/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('tabelaD/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>



    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>


    <script>
        function salvar() {
            $.ajax({
                type:'post',
                url: 'gravar-denuncia-presencial',
                dataType: "json",
                data:{
                    '_token':$('input[name=_token]').val(),
                    'nome':$('input[name=nome]').val(),
                    'telefone':$('input[name=telefone]').val(),
                    'email':$('input[name=email]').val(),
                    'denuciado':$('input[name=acusado]').val(),
                    'local':$('input[name=local]').val(),
                    'tipodeassedio':$('select[name=tipodeassedio]').val(),
                    'descricao':$('textarea[name=descricao]').val(),

                },
                success:function(data){
                    if($.isEmptyObject(data.error)){
                        console.log(data);
                        alert(data.success);
                    }else{

                        alert("Correu um erro, tente novamente")
                    }

                }
            });

        }


    </script>


    <script>
        const
            range = document.getElementById('range'),
            rangeV = document.getElementById('rangeV'),
            setValue = ()=>{
                const
                    newValue = Number( (range.value - range.min) * 100 / (range.max - range.min) ),
                    newPosition = 10 - (newValue * 0.2);
                rangeV.innerHTML = `<span>${range.value}</span>`;
                rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
            };
        document.addEventListener("DOMContentLoaded", setValue);
        range.addEventListener('input', setValue);
    </script>
    <script>


        $(document).ready(function(){
            $('.buscarparamudarestado').on('click',function(){
                var id = $(this).attr('id');
                var  objJson = $(this).data('id');
                console.log('o id é: '+id);
                //console.log(val(objJson[id].email));
                console.log('o index é: '+objJson);
                //$('#modalBuscar').html(id[$('.buscar').val()].nome);
                document.getElementById('range').value=objJson['estado'];
                document.getElementById('idsituacao').value=objJson['id'];

            })
        });




        function salvarestado() {
            $.ajax({
                type:'post',
                url: 'gravar-denuncia-presencial-situacao',
                dataType: "json",
                data:{
                    '_token':$('input[name=_token]').val(),
                    'situacao':$('input[name=situacao]').val(),
                    'id':$('input[name=idsituacao]').val(),
                },
                success:function(data){
                    if($.isEmptyObject(data.error)){
                        console.log(data);
                        alert(data.success);
                    }else{

                        alert("Correu um erro, tente novamente")
                    }

                }
            });

        }

    </script>



</body>

</html>