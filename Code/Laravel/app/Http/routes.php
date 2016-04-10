<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
	'auth'		=> 'Auth\AuthController',
	'password'	=> 'Auth\PasswordController',

]);

Route::group([ 'middleware' => 'auth'], function(){
	Route::get('/','HomeController@index');
	Route::get('/auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);
	Route::resource('usuario','UsuarioController');
	Route::resource('tipo-evento','TipoEventoController');
	Route::resource('evento','EventoController');
	Route::resource('vinculacion','VinculacionController');
	Route::resource('programa','ProgramaController');
	Route::resource('nivel-estudio','NivelEstudioController');
	Route::resource('profesores','ProfesorController');
	Route::resource('planes-estudio','PlanEstudioController');
	Route::resource('cursos','CursoController');
	Route::resource('grupos','GrupoController');
	Route::resource('tipo-proyecto','TipoProyectoController');
	Route::resource('proyectos-investigacion','ProyectoInvestigacionController');
	Route::resource('opcion-grado-investigacion','OpcionGradoInvestigacionController');
	Route::resource('adscripcion','AdscripcionController');
	Route::resource('sustentacion','SustentacionController');
	Route::resource('publicacion-investigacion','PublicacionInvestigacionController');
	Route::resource('asistencia','AsistenciaController');
	Route::resource('participacion','ParticipacionController');
	Route::resource('indicador','IndicadorController');
	Route::resource('opcion-grado-proyeccion', 'OpcionGradoProyeccionController');
	Route::resource('proyectos-proyeccion','ProyectoProyeccionController');
	Route::resource('externo','ExternoController');
	Route::resource('red-conocimiento','RedConocimientoController');
	Route::resource('educacion-continua','EducacionContinuaController');
	Route::resource('publica', 'PublicaController');
	Route::resource('publicacion-proyeccion', 'PublicacionProyeccionController');
	Route::resource('publicacion-investigacion', 'PublicacionInvestigacionController');
	Route::resource('adquisicion', 'AdquisicionController');
	Route::resource('grupo-proyeccion','GrupoProyeccionController');
	Route::resource('indicadores-investigacion','IndicadorInvestigacionController');
	Route::resource('encuentro-grupo','EncuentroGrupoController');
	Route::resource('joven-investigador','JovenInvestigadorController');

});

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
