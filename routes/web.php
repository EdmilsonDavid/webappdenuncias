<?php
use Carbon\Carbon;
use Illuminate\Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/log', function () {
    return view('login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function (){


/*Route::get('/', function () {
    $day=Carbon::today();
    return $day->dayName;
});*/


/*Links de usuarios*/
Route::get('/usuario','Usuario\userController@index')->name('usuario.index');
Route::post('usuario/salvar','Usuario\userController@store');
Route::get('/usuariotabela','Usuario\userController@indextabela')->name('usuario.indextabela')->middleware(['auth','auth.admin']);;
Route::post('remover','Usuario\userController@destroy');
Route::post('editarusuario','Usuario\userController@update');
Route::post('removerusuario','Usuario\userController@destroy');
Route::post('mudarsituacao','Usuario\SituacaoUserController@update');


Route::get('send-mail','MailSend@mailsend');


/*Links de chat*/
Route::post('buscarconversa','Chat\MensagemController@conversa');
Route::post('salvarconversar','Chat\MensagemController@store');
Route::get('chat','Chat\MensagemController@index')->name('mensagens.chatindex');

Route::get('remover-mensagens-de-chat','Chat\MensagemMudarDeStatusController@index')->name('remover-mensagens-de-chat');
Route::post('removermensagensdechatbuscarchat','Chat\MensagemMudarDeStatusController@mensagemDeUsuario');
Route::get('remover-mensagens-de-chat/{id}','Chat\MensagemMudarDeStatusController@mensagens');


/*Links para agenda*/
Route::get('agenda','Agenda\AgendaController@index')->name('agenda');
Route::get('ler-eventos','Agenda\AgendaController@lerEventos')->name('routeLoadEvents');
Route::put('actualizar-eventos','Agenda\AgendaController@update')->name('routeEventUpdate');
Route::post('salvar-eventos','Agenda\AgendaController@store')->name('routeEventStore');
Route::delete('deletar-eventos','Agenda\AgendaController@destroy')->name('routeEventDelete');

Route::delete('deletar-fast-eventos','Agenda\FastEventController@destroy')->name('routeFastEventDelete');
Route::put('actualizar-fast-eventos','Agenda\FastEventController@update')->name('routeFastEventUpdate');
Route::post('salvar-fast-eventos','Agenda\FastEventController@store')->name('routeFastEventStore');

Route::get('Eventos-detalhes','Agenda\EventoDetalhesController@index')->name('detalhesevento');

Route::get('notificacaoagenda','Agenda\NotificacaoAgendaController@notificacao');






Route::get('conta-de-usuario','Perfil\PerfilController@index')->name('conta-de-usuario');
Route::post('testeimagem','Perfil\PerfilController@store');
Route::post('updatepassword','Perfil\perfilPasswordController@update');



/*Links para post*/
Route::get('post','Post\PostController@index')->name('post');
Route::get('post/{id}','Post\PostController@show')->name('posts');
Route::post('comment','Post\CommentController@store')->name('comment.store');
Route::post('post-create','Post\PostController@store')->name('post.create');




/*links para pdf*/
Route::get('manual-de-usuario','Manualuser\ManualUserController@index')->name('manual-de-usuario');



/*links para usuarios de aplicativo /sistema*/
Route::get('usuarios-de-App-UEM','UsuariosDeApp\UsuariosAppController@index')->name('usuariosappuem');


Route::get('requisitar-usar-app', function (){
    return view("usuariosApp.tabelarequisicaousuariosappuem");
})->name('estudante');

});
/*Route::group(array('prefix'=>'api'),funcion(){
Route::get('/', function (){
    return response()->json(['message'=>'Ola mundo']);
})
});*/

Route::post('api/login','loginAPI\loginapicontroller@login');
Route::post('api/registar','loginAPI\loginapicontroller@registar');
Route::post('api/chat','loginAPI\loginapicontroller@chat');



Route::get('admin', function (){
    return 'You are admin';
})->middleware(['auth','auth.admin']);

/*Denucias presencial*/
Route::get('denuncia-presencial','Denuncia\DenunciaPresencialController@index')->name('denuncia-presencial');
Route::post('gravar-denuncia-presencial','Denuncia\DenunciaPresencialController@store');
Route::post('gravar-denuncia-presencial-situacao','Denuncia\DenunciaPresencialController@situacao');



/*Denuncias do chat*/
Route::get('denuncia-chat','Denuncia\DenunciaChatController@index')->name('denuncia-chat');
Route::post('gravar-denuncia-chat','Denuncia\DenunciaChatController@store');
Route::get('apagar',function(){
    return view('denuncia.dpresencias');
});


Route::get('apagar',function(){

    return view('denuncia.dpresencias');
});