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


    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/modals.css')}}">
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

    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>



</head>

<body>
    <!--[if lt IE 8]>

	<![endif]-->
    <!-- Start Left menu area  area de menu-->
@include('leftsidebar')
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
          @include('espacamento')


        {{--=============================================cabecalho=======================--}}
        @include('cabecalho')

        {{--===================================Fim de cabecalho===========================================--}}
            <!-- Mobile Menu start -->

            <!-- Mobile Menu end -->
       {{-- =====================================home/tela=================--}}
           @include('agenda.breadcome-menu')
  {{--      ==============================================================--}}


        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">

                    <div>
                    <div id='wrap'>

                        <div id='external-events'>
                            <h4>Draggable Events</h4>

                            <div id='external-events-list'>
                                @forelse($fastEvents as $fastEvent)
                                <div style="padding: 4px; border: 1px solid {{$fastEvent->color}}; background: {{$fastEvent->color}} " class='fc-event' data-event='{"id":"{{$fastEvent->id}}","title":"{{$fastEvent->title}}","color":"{{$fastEvent->color}}","start":"{{$fastEvent->start}}","end":"{{$fastEvent->end}}"}'>{{$fastEvent->title}}</div>
                                @empty
                                    <div class='fc-event' style="background: white; color: black">Nenhum evento registrado</div>
                                @endforelse
                            </div>

                            <p>
                                <input type='checkbox' id='drop-remove' />
                                <label for='drop-remove'>remove after drop</label>
                                <button class="btn btn-sm btn-success" id="newFastEvent">Criar novo evento</button>
                            </p>
                        </div>

                        <div id='calendar' data-route-load-events="{{route('routeLoadEvents')}}"
                                           data-route-event-update="{{route('routeEventUpdate')}}"
                                           data-route-event-store="{{route('routeEventStore')}}"
                                            data-route-event-delete="{{route('routeEventDelete')}}"

                                            data-route-fast-event-delete="{{route('routeFastEventDelete')}}"
                                            data-route-fast-event-update="{{route('routeFastEventUpdate')}}"
                                            data-route-fast-event-store="{{route('routeFastEventStore')}}"
                        ></div>


                        

                        <div style='clear:both'></div>

                    </div>
                    </div>




                </div>
            </div>
        </div>





     {{--==================================rodape==================================--}}
             @extends('rodape');
    @include('agenda.modalEvento');
    @include('agenda.modalFastEvento');

           {{--  =============================================Fim de rodape==============================--}}
    </div>


 {{--   ============================modal=====================--}}
    <div id="InformationproModalalert" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
                <div class="modal-body">
                    <span class="educate-icon educate-info modal-check-pro information-icon-pro"> </span>
                    <h2>Informação Importante!</h2>
                    <p>Somente edita ou remove quem registou o evento</p>
                </div>
                <div class="modal-footer info-md">
                    <a data-dismiss="modal" href="#">Cancel</a>
                    <a href="#">Process</a>
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

    <!-- plugins JS
		============================================ -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('js/main.js')}}"></script>
    <!-- tawk chat JS
		============================================ -->
    {{--<script src="{{asset('js/tawk-chat.js')}}"></script>--}}
    <script src='{{asset('/fullcalendar/moment.js')}}'></script>
    {{--calendario--}}
    <script src='{{asset('/fullcalendar/mask/jquery.mask.js')}}'></script>
    <link href='{{asset('/fullcalendar/packages/core/main.css')}}' rel='stylesheet' />
    <link href='{{asset('/fullcalendar/packages/daygrid/main.css')}}' rel='stylesheet' />
    <link href='{{asset('/fullcalendar/packages/timegrid/main.css')}}' rel='stylesheet' />
    <link href='{{asset('/fullcalendar/packages/list/main.css')}}' rel='stylesheet' />
    <script src='{{asset('/fullcalendar/packages/core/main.js')}}'></script>
    <script src='{{asset('/fullcalendar/packages/interaction/main.js')}}'></script>
    <script src='{{asset('/fullcalendar/packages/daygrid/main.js')}}'></script>
    <script src='{{asset('/fullcalendar/packages/timegrid/main.js')}}'></script>
    <script src='{{asset('/fullcalendar/packages/list/main.js')}}'></script>
    <script src='{{asset('/fullcalendar/packages/core/locales-all.js')}}'></script>
    <link href='{{asset('/fullcalendar/estilo.css')}}' rel='stylesheet' />
    <script src='{{asset('/fullcalendar/calendario/script.js')}}'></script>
    <script src='{{asset('/fullcalendar/calendario/calendario.js')}}'></script>


</body>

</html>