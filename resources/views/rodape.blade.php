<link rel="stylesheet" href="css/notifications/Lobibox.min.css">
<link rel="stylesheet" href="css/notifications/notifications.css">

<div class="footer-copyright-area" style="background-color: #0A6F0A!important;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copy-right">
                    <button id="basicInfoCustomDelay" class="btn btn-info"></button>
                    <p>Copyright © 2020 - <a href="" id="anoCorente"></a>. Todos direitos reservados. desenvolvido pelo <a href="https:google.com">CeCAGe</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    var data = new Date();
    var ano   = data.getFullYear();
    document.getElementById('anoCorente').innerText=ano;


    window.onload=initPage();

    function initPage() {
        $.ajax({
            type:'get',
            url: 'notificacaoagenda',
            data:{
                '_token':$('input[name=_token]').val(),

            },
            success:function(data){
                console.log(data);
                if(data!=0){
                    /*alert(data);*/
                    console.log(data);
                    $('#basicInfoCustomDelay').trigger("click");
                    /*alert('removido com sucesso');*/
                    /*window.location.reload();*/
                }

            },

        });

    }



</script>
<!-- notification JS
     ============================================ -->
<script src="{{asset('js/notifications/Lobibox.js')}}"></script>
<script src="{{asset('js/notifications/notification-active.js')}}"></script>

