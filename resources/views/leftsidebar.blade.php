<div class="left-sidebar-pro" >
    <nav id="sidebar" class="" style="border:solid 2px #0A6F0A">
        <div class="sidebar-header">
            <img src="{{asset('logoTipoUem.png')}}" alt="UEM"  >
            <hr style="border:solid 2px #0B792F">

        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                   {{-- <li class="active">
                        <a lass="mini-sub-pro" >
                            <img src="{{asset('logoTipoUem.png')}}" alt="UEM"  >
                            <hr style="border:solid 2px #0B792F">

                        </a>
                    </li>--}}

                    <li class="active">
                        <a title="Pagina inicial" href="{{route('home')}}" aria-expanded="false"><span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Pagina Inicial</span></a>
                    </li>
                    <li>
                        <a class="has-arrow" href="Mensagens" aria-expanded="false"><span class="educate-icon educate-comment icon-wrap"></span> <span class="mini-click-non">Mensagens</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Chat" href="{{route('mensagens.chatindex')}}"><span class="mini-sub-pro">Chat</span></a></li>
                            <li><a title="Remover ou ocultar mensagens do chat" href="{{route('remover-mensagens-de-chat')}}"><span class="mini-sub-pro">Remover MSG Chat</span></a></li>


                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="Notificações" aria-expanded="false"><span class="educate-icon educate-bell icon-wrap"></span> <span class="mini-click-non">Notificações</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Postar uma noticia, informacao, reuninao, etc" href="{{route('post')}}"><span class="mini-sub-pro">Fórum</span></a></li>

                            <li>
                                <a class="" href="Notificações" aria-expanded="false"><span class="mini-click-non">Membros da UEM</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="Chat" href="{{route('estudante')}}"><span class="mini-sub-pro">Estudantes</span></a></li>
                                    <li><a title="Remover ou ocultar mensagens do chat" href="{{route('remover-mensagens-de-chat')}}"><span class="mini-sub-pro">Funcionarios</span></a></li>


                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="Agenda" aria-expanded="false"><span class="educate-icon educate-event icon-wrap"></span> <span class="mini-click-non">Agenda</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Registar e gerir comprimissos no calendario" href="{{route('agenda')}}"><span class="mini-sub-pro">Agenda</span></a></li>
                            <li><a title="Detalhes dos eventos" href="{{route('detalhesevento')}}"><span class="mini-sub-pro">Detalhes do Evento</span></a></li>
                        </ul>
                    </li>



                    <li>
                        <a class="has-arrow" href="Utilizadores de Aplicaçao" aria-expanded="false"><span class="fa fa-slack icon-wrap"></span> <span class="mini-click-non">Denúncias</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Remover|Editar utilizadores de aplicacao" href="{{route('denuncia-presencial')}}"><span class="mini-sub-pro">Presencias</span></a></li>

                            <li><a title="Remover|Editar utilizadores de aplicacao" href="{{route('denuncia-chat')}}"><span class="mini-sub-pro">Através do Chat</span></a></li>
                        </ul>
                    </li>



                    <li>
                        <a class="has-arrow" href="Utilizadores" aria-expanded="false"><span class="fa fa-users icon-wrap"></span> <span class="mini-click-non">Utilizadores</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Registar Novo Usuario" href="{{route('usuario.index')}}"><span class="mini-sub-pro">Novo</span></a></li>
                            <li><a title="Dados do usuarios|Enviar Email ou/e apagar varios usuarios" href="{{route('usuario.indextabela')}}"><span class="mini-sub-pro"> Existentes</span></a></li>
                        </ul>
                    </li>






                    <li>
                        <a class="has-arrow" href="Estatistica" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap"></span> <span class="mini-click-non">Estatistica</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Students" href="all-students.html"><span class="mini-sub-pro">Denuncias</span></a></li>
                            <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Cursos</span></a></li>
                            <li><a title="Edit Students" href="edit-student.html"><span class="mini-sub-pro">Alterar Rodape</span></a></li>

                        </ul>
                    </li>


                    <li>
                        <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="fa fa-mobile icon-wrap"></span> <span class="mini-click-non">Configuracoes</span></a>
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
            <a lass="mini-sub-pro" href="">

                <hr style="border:dotted 1px #0B792F">
                <center><img src="{{asset('cecagelogo.png')}}"  width="100px" alt="LOogo Da CeCAGe"></center>
            </a>
        </li>

    </nav>

</div>
