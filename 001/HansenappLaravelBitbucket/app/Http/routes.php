<?php

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');


Route::get('recuperar-senha', 'Auth\PasswordController@getEmail');
Route::post('recuperar-senha', 'Auth\PasswordController@postEmail');

Route::get('resetar-senha/{token}', 'Auth\PasswordController@getReset');
Route::post('resetar-senha', 'Auth\PasswordController@postReset');



//ROTAS PARA A API
// Route::group(['middleware' => 'cors'], function(){
//     Route::get('/api/posts','Posts@index');
// });
//Route::get('/api/posts','Posts@index');

Route::group(['middleware' => 'cors'], function(){
	Route::post('oauth/access_token', function() {
		return Response::json(Authorizer::issueAccessToken());
	});
});

Route::group(['middleware' => 'cors'], function(){

	Route::group(['prefix'=>'api', 'middleware' => 'oauth'], function(){
		
		Route::group(['prefix' => 'pacientes'], function(){
			Route::get('/', 'Api\PacientesController@index');
			Route::get('{id}', 'Api\PacientesController@show');
			Route::post('', 'Api\PacientesController@store');
			Route::put('{id}', 'Api\PacientesController@update');
			Route::delete('{id}', 'Api\PacientesController@destroy');
		});
		
		// Route::group(['prefix' => 'posts'], function(){
		// 	Route::get('/','Posts@index');
		// });
	  Route::get('/posts','Posts@index');

	});
});



Route::group(['prefix'=>'panel','middleware' => 'auth'], function(){
	// para usar esse tipo de Route precisa adaptar a url dos links no mesmo padrao
	// Route::get('/usuarios/{id}/password','Painel\UsuarioController@gtpassword');
	// Route::post('/usuarios/{id}/password','Painel\UsuarioController@ptpassword');

	Route::controller('/usuarios','Painel\UsuarioController');
	Route::controller('/pacientes','Painel\PacienteController');
	Route::controller('/contatos','Painel\ContatoController');
	Route::controller('/ubs','Painel\UBSController');
	Route::controller('/','Painel\PainelController');

});


Route::controller('/','Site\SiteController');

