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
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('chat.css')}}">
</head>

<body>
    <!--[if lt IE 8]>

	<![endif]-->
    <!-- Start Left menu area -->
    @include('leftsidebar')
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="all-content-wrapper">
        @include('espacamento')


        {{--=============================================cabecalho=======================--}}
        @extends('cabecalho')

        {{--===================================Fim de cabecalho===========================================--}}
        <!-- Mobile Menu start -->

            <!-- Mobile Menu end -->
            {{-- =====================================home/tela=================--}}

            {{--      ==============================================================--}}

        </div>
        @include('chat.breadcome-menu')
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">

<div class="col-lg-3">
    <div class="edu-accordion-area mg-b-15">
        <div class="admin-pro-accordion-wrap shadow-inner responsive-mg-b-30">

            <div class="panel-group edu-custon-design" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading accordion-head" style="background: #0B792F">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                Adicionar para Encontro</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse panel-ic collapse in">
                        <div class="panel-body admin-panel-content animated bounce" id="vitimaselecionado">

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
{{--============================================================--}}

<div class="col-lg-9">

                        <div class="messaging">
                            <div class="inbox_msg">
                                <div class="inbox_people">
                                    <div class="headind_srch">
                                        <div class="recent_heading">
                                            <h4>Recentes </h4>
                                        </div>
                                        <div class="srch_bar">
                                            <div class="stylish-input-group"  >
                                                <form role="search" class="sr-input-func" >
                                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                                    <a href="#"><i class="fa fa-search"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inbox_chat" >
                                        {{--<div class="chat_list ">
                                            <div class="chat_people">
                                                <div class="chat_img"> Uaumsse </div>
                                                <div class="chat_ib">
                                                    <h5>Uamusse<span class="chat_date">Dec 25</span></h5>
                                                    <p>Test, which is a new approach to have all solutions
                                                        astrology under one roof.</p>
                                                </div>
                                            </div>
                                        </div>--}}
                                        @foreach($mensagensusers as $user)
                                        <div class="chat_list chatof"  ondblclick="dois({{json_encode($user)}})"  onclick="pegarIdDaVitima({{$user->id}})" id="{{$user->id}}"  style="cursor: pointer">
                                            <div class="chat_people">
                                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                <div class="chat_ib">
                                                    <h5>{{$user->nome}}<span class="chat_date">{{$user->quantidade}}</span></h5>
                                                    <p>Test, which is a new approach to have all solutions
                                                        astrology under one roof.</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        {{--<div class="chat_list">
                                            <div class="chat_people">
                                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                <div class="chat_ib">
                                                    <h5>Telinha <span class="chat_date">Dec 25</span></h5>
                                                    <p>Test, which is a new approach to have all solutions
                                                        astrology under one roof.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat_list">
                                            <div class="chat_people">
                                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                <div class="chat_ib">
                                                    <h5>Metilage <span class="chat_date">Dec 25</span></h5>
                                                    <p>Test, which is a new approach to have all solutions
                                                        astrology under one roof.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat_list">
                                            <div class="chat_people">
                                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                <div class="chat_ib">
                                                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                    <p>Test, which is a new approach to have all solutions
                                                        astrology under one roof.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat_list">
                                            <div class="chat_people">
                                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                <div class="chat_ib">
                                                    <h5>Antonio <span class="chat_date">Dec 25</span></h5>
                                                    <p>Test, which is a new approach to have all solutions
                                                        astrology under one roof.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat_list">
                                            <div class="chat_people">
                                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                                <div class="chat_ib">
                                                    <h5>Valter <span class="chat_date">Dec 25</span></h5>
                                                    <p>Test, which is a new approach to have all solutions
                                                        astrology under one roof.</p>
                                                </div>
                                            </div>
                                        </div>--}}
                                    </div>
                                </div>
                                <div class="mesgs" >
                                    <div class="msg_history" id="msg_history">
                              <h1>Inicie uma conversa</h1>

                                    </div>
                                    <input type="file">
                                    <div class="type_msg">

                                        <div class="input_msg_write">
                                            <input type="number" id="idvitima" name="vitima" hidden>
                                            <input type="text" name="mensagem" id="msg" class="write_msg" placeholder="Escreva mensagem aqui!" />
                                            <button class="msg_send_btn" type="button" onclick="mandarMensagem()"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                </div>

{{--                    =================================================--}}



                </div>
            </div>
        </div>





        {{--==================================rodape==================================--}}
        @extends('rodape');
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

@include('chat.scriptchat')
</body>




</html>