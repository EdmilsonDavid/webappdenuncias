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
    <link rel="stylesheet" href="{{asset('tabelaRemoverChat/data-table/bootstrap-table.css')}}">

    <link rel="stylesheet" href="{{asset('tabelaRemoverChat/tabelausuario.css')}}">
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
        <div class="header-advance-area" >
            @include('cabecalho')
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
                                            <li><span class="bread-blod">Remover Algumas Mensagens Trocadas</span>
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



        {{--=========================================inicio de body===================--}}
        <div class="mailbox-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-4 col-sm-4 col-xs-12 panel-body"  style="overflow-y: scroll; height: 500px; " >

                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pesquisar por nome..">

                        <table id="myTable">
                            <tr class="header">
                                <th style="width:60%;">Nome completo</th>
                                <th style="width:40%;">Mensagens</th>
                                <th style="width:40%;">Mais dados</th>
                            </tr>
                            <div>

                            @forelse($vitimas as $vitima)
                            <tr >
                                <td  onclick="pegarIdDaVitima({{$vitima->id}})">{{$vitima->nome}}</td>
                                <td onclick="pegarIdDaVitima({{$vitima->id}})"> <span class=""><i class="fa fa-envelope"></i>{{$vitima->quantidade}}</span></td>
                                <td><button data-toggle="modal" data-target="#exampleModalLong">Mais dados</button></td>
                            </tr>


                            @empty
                                <tr>
                                    <td>Nenhum dado</td>
                                    <td>registado</td>
                                </tr>
                            @endforelse

                            </div>

                        </table>

                    </div>
                    <div class="col-md-8 col-md-8 col-sm-8 col-xs-12">

                       <!-- Static Table Start -->
                           <div class="data-table-area mg-b-15" >
                               <div class="container-fluid">
                                   <div class="row">
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                           <div class="sparkline13-list" >
                                               <div class="sparkline13-hd" >
                                                   <div class="main-sparkline13-hd">
                                                       <h4>Tabela<span class="table-project-n"> de Dados</span> do Chat</h4>
                                                   </div>
                                                   <hr>
                                               </div>
                                               <div class="sparkline13-graph">
                                                   <div class="datatable-dashv1-list custom-datatable-overright">

                                                       <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                              data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                           <thead>
                                                           <tr>
                                                               <th data-field="id">Nome</th>
                                                               <th data-field="name" data-editable="true">Mensagem</th>
                                                               <th data-field="phone" data-editable="true">Data e Hora</th>
                                                               <th data-field="complete">Remover</th>

                                                           </tr>
                                                           </thead>
                                                           <tbody  id="colocardadosnatabela">

                                                      @if(isset($users))

                                                      @foreach($users as $user)
                                                      <tr>

                                                          <td><a href="#">{{$user->msg}}</a></td>
                                                          <td><a href="#">Quisque quis turpis ac quam sagittis scelerisque vel ut
                                                                  urna.</a></td>

                                                          <td class="mail-date">Sun, Mar 27</td>
                                                          <td><button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button></td>
                                                      </tr>

                                                       @endforeach
                                                       @endif


                                                           </tbody>
                                                       </table>
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
        </div>







       @include('rodape')



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
                                    <p id="nomedetalhe">Helio</p>
                                </div>


                                <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                    <label for="recipient-name" class="col-form-label">Email</label>
                                </div>
                                <div class="form-group col-lg-10 col-md-10 col-sm-10" style="background: #F3F5FA">
                                    <p id="emaildetalhe">helio@gmail.com</p>
                                </div>


                                <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                    <label for="recipient-name" class="col-form-label">Telefone</label>
                                </div>
                                <div class="form-group col-lg-10 col-md-10 col-sm-10" style="background: #F3F5FA">
                                    <p id="telefonedetalhe">856098475</p>
                                </div>


                                <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                    <label for="recipient-name" class="col-form-label">Cargo</label>
                                </div>
                                <div class="form-group col-lg-10 col-md-10 col-sm-10" style="background: #F3F5FA">
                                    <p id="moradadetalhe">Docente</p>
                                </div>





                                <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                    <label for="recipient-name" class="col-form-label">Faculdade</label>
                                </div>
                                <div class="form-group col-lg-10 col-md-10 col-sm-10" style="background: #F3F5FA">
                                    <p id="situacaodetalhe">Ciencias</p>
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
    <!-- main JS============================================ -->
    <script src="{{asset('js/main.js')}}"></script>

    {{--<script src="{{asset('js/tawk-chat.js')}}"></script>--}}




    <script src="{{asset('tabelaRemoverChat/tabelausuario.js')}}"></script>

    <script src="{{asset('tabelaRemoverChat/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('tabelaRemoverChat/data-table/tableExport.js')}}"></script>
    <script src="{{asset('tabelaRemoverChat/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('tabelaRemoverChat/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{asset('tabelaRemoverChat/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('tabelaRemoverChat/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('tabelaRemoverChat/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('tabelaRemoverChat/data-table/bootstrap-table-export.js')}}"></script>

    <script>

        // var idUser =

        function pegarIdDaVitima(id) {
            console.log(id);
            window.location="http://127.0.0.1:8000/remover-mensagens-de-chat/"+id;

            /*$.ajax({
                type:'post',
                url: 'removermensagensdechatbuscarchat',
                data:{
                    '_token':$('input[name=_token]').val(),
                    'id':id

                },
                success:function(data){

                    for(var i=0;data.length>i;i++)
                    {
                        // $('#colocardadosnatabela').innerHTML="";
                        //Adicionando registros retornados na tabela
                        $('#colocardadosnatabela').append('<tr>\n' +
                            '\n' +
                            '                                                               <td>Alan Matthews</td>\n' +
                            '                                                               <td>Quisque quis turpis ac quam sagittis scelerisque vel ut\n' +
                            '                                                                       urna</td>\n' +
                            '                                                               <td></td>\n' +
                            '                                                               <td class="mail-date">Sun, Mar 27</td>\n' +
                            '                                                               <td><button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button></td>\n' +
                            '                                                           </tr>')



                    }
                    document.getElementById('tdp').innerText="aaaaa";

Boots
                },
                error:function (data) {
                    console(data);
                    alert("Erro ao tentar buscar as mensagens de usuario selecionado,tente novamente ou contacto o adminstrador");

                }
            })*/

        }
    </script>

</body>

</html>