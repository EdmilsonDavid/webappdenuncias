<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sistemas de Gestao de Denuncias de Assedios - SGDA UEM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('logoTipoUem.png')}}">

    <!-- Google Fonts
		============================================ -->

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

    <!-- mCustomScrollbar CSS

		============================================ -->
    <!-- style CSS
      ============================================ -->
    <link rel="stylesheet" href="{{asset('css/alerts.css')}}">


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
    <!-- cropper CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('css/cropper/cropper.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>

	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro" style="border:solid 2px #0B792F">
        <nav id="sidebar" class="" style="border:solid 2px #0B792F">
            <div class="sidebar-header">

            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a lass="mini-sub-pro" href="index.html">
                                <img src="{{asset('logoTipoUem.png')}}" alt="UEM"  >
                                <hr style="border:solid 2px #0B792F">

								</a>
                        </li>

                        <li class="active">
                            <a title="Landing Page" href="{{route('home')}}" aria-expanded="false"><span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Pagina Inicial</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Mensagens</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="{{route('mensagens.chatindex')}}"><span class="mini-sub-pro">Chat</span></a></li>
                                <li><a title="All Students" href="all-students.html"><span class="mini-sub-pro">Lidas</span></a></li>
                                <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Nao Lidas</span></a></li>
                                <li><a title="Edit Students" href="edit-student.html"><span class="mini-sub-pro">Enviadas</span></a></li>
                                <li><a title="Students Profile" href="student-profile.html"><span class="mini-sub-pro">Apagadas</span></a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-event icon-wrap"></span> <span class="mini-click-non">Agenda</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="all-students.html"><span class="mini-sub-pro">Todos trabalahdores</span></a></li>
                                <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Adicionar novo trabalhador</span></a></li>
                                <li><a title="Edit Students" href="edit-student.html"><span class="mini-sub-pro">Alterar dados do trabalhador</span></a></li>
                                <li><a title="Students Profile" href="student-profile.html"><span class="mini-sub-pro">Pelfil do trabalhador</span></a></li>
                            </ul>
                        </li>



                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">D. Presencias</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="all-students.html"><span class="mini-sub-pro">Nova</span></a></li>
                                <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Acrecento</span></a></li>

                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="fa fa-users icon-wrap"></span> <span class="mini-click-non">Utilizadores</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="{{route('usuario.index')}}"><span class="mini-sub-pro">Novo</span></a></li>
                                <li><a title="Add Students" href="{{route('usuario.indextabela')}}"><span class="mini-sub-pro"> Existentes</span></a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="glyphicon glyphicon-user  icon-wrap"></span> <span class="mini-click-non">Minha Conta</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="all-students.html"><span class="mini-sub-pro">Todos trabalahdores</span></a></li>
                                <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Adicionar novo trabalhador</span></a></li>
                                <li><a title="Edit Students" href="edit-student.html"><span class="mini-sub-pro">Alterar dados do trabalhador</span></a></li>
                                <li><a title="Students Profile" href="student-profile.html"><span class="mini-sub-pro">Pelfil do trabalhador</span></a></li>
                            </ul>
                        </li>




                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-settings icon-wrap"></span> <span class="mini-click-non">Configuracoes</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="all-students.html"><span class="mini-sub-pro">Faculdades</span></a></li>
                                <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Cursos</span></a></li>
                                <li><a title="Edit Students" href="edit-student.html"><span class="mini-sub-pro">Alterar Rodape</span></a></li>

                            </ul>
                        </li>





                    </ul>

                </nav>

            </div>
           <li class="active">
                <a lass="mini-sub-pro" href="index.html">

                    <hr style="border:dotted 1px #0B792F">
                    <center><img src="{{asset('cecagelogo.png')}}"  width="100px" alt="LOogo Da CeCAGe"></center>
                </a>
            </li>
        </nav>

    </div>
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
                            <div class="breadcome-list" id="capturarimagem">
                                <div class="row">

                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard V.1</span>
                                            </li>
                                        </ul>

                                        <div class="alert alert-danger alert-mg-b print-error-msg" style="display:none">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong></strong> .
                                            <ul></ul>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="single-pro-review-area mt-t-30 mg-b-15" >
            <div class="container-fluid" >
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                        <div class="product-payment-inner-st" >
                            <ul id="myTabedu1" class="tab-review-design" >
                                <li class="active"><a href="#description" >Meus dados</a></li>
                                <li><a href="#reviews">Alterar Password</a></li>
                                <li><a href="#INFORMATION">Alterar Perfil</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit" >
                                <div class="product-tab-list tab-pane fade active in" id="description" >
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">

                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                Foto de Perfil
                                                                <hr>
                                                                <img src="perfil.png" alt="" />


                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">


                                                            </div>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
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
                                    <div class="alert alert-danger alert-mg-b alert-success-style4 alert-st-bg3 alert-st-bg14">
                                        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                        </button>
                                        <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-clr3 admin-check-pro-clr14" aria-hidden="true"></i>
                                        <p><strong>Atenção!</strong>
                                            Antes de alterar a password é importante verificar se há uma camara a te filmar ou
                                            alguém a te ver, caso positivo é necessário que tome muita cautela
                                            ao colocar de modo que ninguém grave ou veja, porque pode ti comprometer na segurança
                                            dos dados no sistema.
                                            .</p>
                                    </div>
                                    <div class="password-meter-area mg-b-15">
                                    <!-- Static Table Start -->
                                    <div class="data-table-area mg-b-15">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div id="pwd-container4">

                                                    <div class="form-group">
                                                        <label for="password4">Password</label>
                                                        <input type="password" class="form-control example4" id="password4" placeholder="Password">
                                                    </div>
                                                    <div class="form-group mg-b-pass">
                                                        <span class="font-bold pwstrength_viewport_verdict4"></span>
                                                        <span class="pwstrength_viewport_progress4"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="breadcome-list">
                                                        <div class="row">

                                                            <ul class="breadcome-menu">

                                                                <li><button type="button" class="btn btn-custon-rounded-two btn-primary">Alterar</button>
                                                                </li>
                                                            </ul>

                                                            <div class="alert alert-danger alert-mg-b print-error-msg" style="display:none">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <strong></strong> .
                                                                <ul></ul>
                                                            </div>

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
                                    {{--inicio da row--}}
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="sparkline10-list shadow-reset">
                                                <div class="sparkline10-hd">
                                                    <div class="main-sparkline10-hd">
                                                        <h1>Images Cropper</h1>
                                                    </div>
                                                </div>
                                                <div class="sparkline10-graph">
                                                    <div class="basic-login-form-ad">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="dual-list-box-inner">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="image-crop">
                                                                                <img src="img/cropper/1.jpg" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="preview-img-pro-ad">
                                                                                <div class="img-croper-fl">
                                                                                    <div class="img-crop-img-rd">
                                                                                        <h4>Preview image</h4>

                                                                                            <div class="img-preview img-preview-custom" ></div>

                                                                                    </div>
                                                                                    <div class="common-pre-dz">
                                                                                        <h4 class="comon-method">Comon method</h4>
                                                                                        <p>
                                                                                            You can upload new image to crop.
                                                                                        </p>
                                                                                        <div class="btn-group images-cropper-pro">
                                                                                            <label title="Upload image file" for="inputImage" class="btn btn-primary img-cropper-cp">
                                                                                                <input type="file"  name="file" id="inputImage" class="hide">

                                                                                                Upload new image
                                                                                            </label>
                                                                                            <label  title="Donload image" id="download" class="btn btn-primary">Download</label>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <h4 class="other-method">Other method</h4>
                                                                                <p>
                                                                                    You may set cropper options with <code>$(image}).cropper(options)</code>
                                                                                </p>
                                                                                <div class="btn-group images-action-pro">
                                                                                    <button class="btn btn-white" id="zoomIn" type="button">Zoom In</button>
                                                                                    <button class="btn btn-white" id="zoomOut" type="button">Zoom Out</button>
                                                                                    <button class="btn btn-white" id="rotateLeft" type="button">Rotate Left</button>
                                                                                    <button class="btn btn-white" id="rotateRight" type="button">Rotate Right</button>
                                                                                  
                                                                                </div>


                                                                            </div>
                                                                            <button id="btnSaveSign">Gravar imagem</button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Fim da row--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


{{--========================================== modal para detalhes de informacao de user ================================--}}


{{--======================================================= Fim de modal de detalhes====================================--}}


        {{--================================================Modal para a edicao de dados========================================--}}




        {{--=====================================================fim de modal de edicao=======================================--}}

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
    <script src="{{asset('perfil/html2canvas.js')}}"></script>

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

    <!-- pwstrength JS
           ============================================ -->
    <script src="js/password-meter/pwstrength-bootstrap.min.js"></script>
    <script src="js/password-meter/zxcvbn.js"></script>
    <script src="js/password-meter/password-meter-active.js"></script>

    <script src="{{asset('js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{asset('js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('js/data-table/bootstrap-table-export.js')}}"></script>
    <script src="{{asset('js/cropper/cropper.min.js')}}"></script>
    <script src="{{asset('js/cropper/cropper-actice.js')}}"></script>



{{--============================Javascript codigo=====================--}}

</body>
<script>
    /*       $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });*/

    function salvarimagem() {


        /* window.scrollTo(0, 0);

         html2canvas(document.getElementById("capturarimagem")).then(function (canvas) {

             // Create an AJAX object
             var ajax = new XMLHttpRequest();



             // Setting method, server file name, and asynchronous
             ajax.open("POST", "testeimagem", true);

             // Setting headers for POST method
             ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

             // Sending image data to server
             ajax.send("image=" + canvas.toDataURL('image/png').replace(/^data:image\/(png|jpg);base64,/, ""));

             console.log( canvas.toDataURL('image/png').replace(/^data:image\/(png|jpg);base64,/, ""));

             // Receiving response from server
             // This function will be called multiple times
             ajax.onreadystatechange = function () {

                 // Check when the requested is completed
                 if (this.readyState == 4 && this.status == 200) {

                     // Displaying response from server
                     console.log(this.responseText);
                     console.log("salvo");
                 }
             };
         });*/
        console.log('ola');




    }






    $("#btnSaveSign").click(function(e){
        html2canvas(document.body).then(function (canvas) {
            window.scrollTo(0,0);
            var img_data = canvas.toDataURL("image/png");

            //ajax call to save image inside folder
            console.log(img_data);
            $.ajax({
                url: 'testeimagem',
                data: {'_token':$('input[name=_token]').val(), 'img_data':img_data },
                type: 'post',
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                },
                error:function () {
                    alert('erro');
                }
            });

        });
    });





</script>


</html>