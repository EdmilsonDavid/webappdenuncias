<script>
    function pegarIdDaVitima(id) {
        console.log(id);
        $("#msg_history").empty();
        $('.chatof'+id).click(function(){
            $(this).addClass('active_chat');
        });

        document.getElementById('idvitima').value = id;

        $.ajax({
            type:'post',
            url: 'buscarconversa',
            data:{
                '_token':$('input[name=_token]').val(),
                'id':id

            },
            success:function(data){
                document.getElementById('msg').value = '';
                for(var i=0;data.length>i;i++){
                    //Adicionando registros retornados na tabela
                    $('#msg_history').append('<div class="incoming_msg"><div class="incoming_msg_img"></div><div class="received_msg"> <div class="received_withd_msg"><p>'+data[i].msg+'</p><span class="time_date">'+data[i].msg+'</span></div> </div> </div> <div class="outgoing_msg"> <div class="sent_msg"> <p>' +data[i].msg+'</p><span class="time_date">'+data[i].msg+'</span></div></div>');
                }

            },
            error:function () {
                alert("Erro ao tentar buscar as mensagens de usuario selecionado,tente novamente ou contacte o adminstrador");

            }
        })

    }















    function mandarMensagem() {
        $.ajax({
            type:'post',
            url: 'salvarconversar',
            data:{
                '_token':$('input[name=_token]').val(),
                'idvitima':$('input[name=vitima]').val(),
                'mensagem':$('input[name=mensagem]').val()

            },
            success:function(data){

                pegarIdDaVitima(data.vitima_id);


            },
            error:function () {
                alert("Erro ao tentar registar, tente novamente");

            }
        })

    }



    function dois($data) {
        var id = $(this).attr('id');
        var  objJson = $(this).data('id');
        console.log('o id é: '+id);
        console.log('o id é: '+objJson);
        $("#vitimaselecionado").empty();
        $("#vitimaselecionado").append("<h1>"+$data.nome+"</h1>\n" +
            "                            <hr>\n" +
            "                            <label for=\"assunto\">Assunto</label>\n" +
            "                            <input type=\"text\" class=\"form-control\" id=\"assunto\">\n" +
            "                            <input type=\"number\" class=\"form-control\">\n" +
            "                            <label for=\"\">Descricao</label>\n" +
            "                            <textarea name=\"\" id=\"\" cols=\"30\" rows=\"10\" class=\"form-control\"></textarea>\n" +
            "                            <br><br>\n" +
            "                            <div style=\"float: right\">\n" +
            "                                <button type=\"button\" class=\"btn btn-custon-rounded-four btn-default\" onclick='fecharadicionarencontro()'>Cancelar</button>\n" +
            "                                <button type=\"button\" class=\"btn btn-custon-rounded-four btn-primary\">Gravar</button>\n" +
            "                            </div>");


    }


    function fecharadicionarencontro() {
        c    }

</script>
