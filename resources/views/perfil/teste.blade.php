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

    <link rel="stylesheet" href="{{asset('css/cropper/cropper.min.css')}}">
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
        @include('perfil.breadcome-menu')
    </div>
    <div class="analytics-sparkle-area">
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
                                                            <img src='{{asset(Auth::user()->perfil)}}' width="300px" height="300px" alt="" />


                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="row">
                                                                <div class="form-group-inner">
                                                                    <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                                                        <label for="recipient-name" class="col-form-label">Nome</label>
                                                                    </div>
                                                                    <div class="form-group col-lg-10 col-md-10 col-sm-10" style="background: #F3F5FA">
                                                                        <p>{{Auth::user()->name}}</p>
                                                                    </div>


                                                                    <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                                                        <label for="recipient-name" class="col-form-label">Email</label>
                                                                    </div>
                                                                    <div class="form-group col-lg-10 col-md-10 col-sm-10" style="background: #F3F5FA">
                                                                        <p>{{Auth::user()->email}}</p>
                                                                    </div>


                                                                    <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                                                        <label for="recipient-name" class="col-form-label">Telefone</label>
                                                                    </div>
                                                                    <div class="form-group col-lg-10 col-md-10 col-sm-10" style="background: #F3F5FA">
                                                                        <p>{{Auth::user()->telefone}}</p>
                                                                    </div>


                                                                    <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                                                        <label for="recipient-name" class="col-form-label">Morada</label>
                                                                    </div>
                                                                    <div class="form-group col-lg-10 col-md-10 col-sm-10" style="background: #F3F5FA">
                                                                        <p>{{Auth::user()->bairro}}</p>
                                                                    </div>





                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <hr>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div id="mudarInformacao">
                                    <div class="alert alert-warning alert-st-three" role="alert">
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
                                    </div>
                                    <div class="password-meter-area mg-b-15">
                                        <!-- Static Table Start -->
                                        <div class="data-table-area mg-b-15">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div id="pwd-container4">

                                                        <div class="form-group">
                                                            <label for="password4">Password</label>
                                                            <input type="password" name="password" class="form-control example4" id="password4" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mg-b-pass">
                                                            <span class="font-bold pwstrength_viewport_verdict4"></span>
                                                            <span class="pwstrength_viewport_progress4"></span>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <label for="">Repita a password</label>
                                                        <input type="password" class="form-control" name="repitirpassword"  placeholder="Password">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="breadcome-list">
                                                            <div class="row">

                                                                <ul class="breadcome-menu">

                                                                    <li><button type="button" onclick="alterarPassword()" class="btn btn-custon-rounded-two btn-primary">Alterar</button>
                                                                    </li>
                                                                </ul>


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
                                                        <h1>Cortar Imagem</h1>
                                                    </div>
                                                </div>
                                                <div class="sparkline10-graph">
                                                    <div class="basic-login-form-ad">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="dual-list-box-inner">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="image-crop" style="width: 260px; height: 250px">
                                                                                <img src="img/cropper/1.PNG" alt="" >
                                                                            </div>
                                                                            <button id="btnSaveSign" class="btn btn-primary">Gravar imagem</button>
                                                                        </div>
                                                                        <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="preview-img-pro-ad">
                                                                                <div class="img-croper-fl">
                                                                                    <div class="img-crop-img-rd">
                                                                                        <h4>Preview image</h4>

                                                                                        <div class="img-preview img-preview-custom" id="capturar"></div>

                                                                                    </div>
                                                                                    <div class="common-pre-dz">

                                                                                        <div class="btn-group images-cropper-pro">
                                                                                            <label title="Upload image file" for="inputImage" class="btn btn-primary img-cropper-cp">
                                                                                                <input type="file"  name="file" id="inputImage" class="hide">

                                                                                                Upload nova imagem
                                                                                            </label>


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


<!-- calendar JS
    ============================================ -->
<!-- pwstrength JS
       ============================================ -->
<script src="{{asset('js/password-meter/pwstrength-bootstrap.min.js')}}"></script>
<script src="{{asset('js/password-meter/zxcvbn.js')}}"></script>
<script src="{{asset('js/password-meter/password-meter-active.js')}}"></script>

<script src="{{asset('js/cropper/cropper.min.js')}}"></script>
<script src="{{asset('js/cropper/cropper-actice.js')}}"></script>

<!-- plugins JS
    ============================================ -->
<script src="{{asset('js/plugins.js')}}"></script>
<!-- main JS
    ============================================ -->
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('bootbox/bootbox.all.js')}}"></script>
<script src="{{asset('bootbox/bootbox.js')}}"></script>
<script src="{{asset('bootbox/bootbox.locales.js')}}"></script>
<!-- tawk chat JS
    ============================================ -->
{{--<script src="{{asset('js/tawk-chat.js')}}"></script>--}}


<script src="{{asset('perfil/html2canvas.js')}}"></script>
<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script !src="">



    $("#btnSaveSign").click(function(e){
        html2canvas(document.getElementById('capturar')).then(function (canvas) {
            window.scrollTo(0,0);
            var img_data = canvas.toDataURL("image/png");

            //ajax call to save image inside folder
            console.log(img_data);

            $.ajax({
                url: 'testeimagem',
                data: {'_token':$('input[name=_token]').val(), 'img_data':img_data },
                type: 'post',
                dataType: 'json',
                success: function (data) {
                    $(".print-sucesso-msg").find("strong").html('');
                    $(".print-sucesso-msg").find("ul").html('');
                    $(".print-sucesso-msg").css('display','block');

                    $(".print-sucesso-msg").find("ul").append('<li>'+data.success+'</li>');
                    bootbox.confirm({
                        title: "Perfil actualizado com sucesso!",
                        message: "Voce gostaria de actualizar a pagina para ver o seu perfil actualizado? ",
                        buttons: {
                            cancel: {
                                label: '<i class="fa fa-times"></i> Nao'
                            },
                            confirm: {
                                label: '<i class="fa fa-check"></i> Sim'
                            }
                        },
                        callback: function (result) {
                            console.log('This was logged in the callback: ' + result);
                            var actualizarPagina= result;
                            if(actualizarPagina==true){
                                window.location.reload();
                            }
                        }
                    });


                },
                error:function () {
                    alert("Erro durante a gracao de dados, tente novamente, caso o problema persista contacte o administrador");
                }
            });

        });
    });




    
    
    function alterarPassword() {
        console.log($('input[name=password]').val());

console.log($('.pwstrength_viewport_verdict4')[0].innerText);
        console.log($('input[name= repitirpassword]').val());

        if($('input[name=password]').val()!=$('input[name= repitirpassword]').val()){

            var password=1;

            bootbox.alert("Password errada, escreva novamente!");

        }
        if($('.pwstrength_viewport_verdict4')[0].innerText=='Mal'){
            if(password!=1){
            var password=1;
            bootbox.alert("password Fraca, escreva uma com boa combincacao de letras e numeros!");
            }
        }

        if((password!=1)&&($('input[name=password]').val()!='')){

            $.ajax({
                url: 'updatepassword',
                data: {'_token':$('input[name=_token]').val(), 'password':$('input[name=password]').val()},
                type: 'post',
                dataType: 'json',
                success: function (data) {
                    if($.isEmptyObject(data.error)){
                        $(".print-error-msg").css('display','none');

                        $(".print-sucesso-msg").find("strong").html('');
                        $(".print-sucesso-msg").find("ul").html('');
                        $(".print-sucesso-msg").css('display','block');

                        $(".print-sucesso-msg").find("ul").append('<li>'+data.success+'</li>');


                    }else{

                        printErrorMsg(data.error);
                    }
                },
                error:function () {
                    alert('Erro ao tentar modificar a password, caso o problema percista contacte o administrador');
                }
            });
        }


        
    }


    function printErrorMsg (msg) {
        $(".print-sucesso-msg").css('display','none');
        $(".print-error-msg").find("strong").html('');
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
    }



    var data = new Date();
    var ano   = data.getFullYear();
    document.getElementById('anoCorente').innerText=ano;



</script>
</body>

</html>