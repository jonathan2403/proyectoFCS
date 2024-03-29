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
Route::get('/consultar/municipios/{id_departamento}', 'ServiciosBaseController@consultarMunicipios');

Route::controllers([
	'auth'		=> 'Auth\AuthController',
	'password'	=> 'Auth\PasswordController',

]);

Route::group([ 'middleware' => 'auth'], function(){

	// Ruta raiz
	Route::get('/','HomeController@index');
	// Ruta cierre de sesion
	Route::get('/auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

	 	Route::resource('adscripcion','AdscripcionController');
		Route::resource('sustentacion','SustentacionController');
		Route::resource('asistencia','AsistenciaController');
		Route::resource('participacion','ParticipacionController');
		Route::resource('publica', 'PublicaController');
		Route::get('externo/{componente}', 'ExternoController@index');
		Route::get('externo/{componente}/create','ExternoController@create');
		Route::get('externo/edit/{id_externo}/{componente}', 'ExternoController@edit');
		Route::get('externo/ver/{id_externo}','ExternoController@show');
		Route::get('externo/eliminar/{id_externo}', 'ExternoController@destroy');
		Route::resource('externo/store', 'ExternoController@store');
		Route::resource('externo', 'ExternoController@update');
		Route::get('grupos/{tipo_grupo}/create','GrupoController@create');
		Route::get('grupos/ver/{id_grupo}','GrupoController@show');
		Route::get('grupos/{tipo_grupo}', 'GrupoController@index');
		Route::get('grupos/edit/{id_grupo}', 'GrupoController@edit');
		Route::resource('grupos/store', 'GrupoController@store');
		Route::resource('grupos', 'GrupoController@update');
		Route::get('grupos/eliminar/{id_grupo}', 'GrupoController@destroy');
		Route::resource('indicadores-investigacion','IndicadorInvestigacionController');
		Route::get('indicadores/proyeccion/index', 'IndicadorProyeccionController@index');
		Route::get('indicadores/proyeccion/show/{indicador}', 'IndicadorProyeccionController@show');

		// Rutas para Proyeccion Social
		Route::group(['middleware' => 'auth_proyeccion'], function(){
			Route::resource('educacion-continua','EducacionContinuaController');
			Route::get('educacion/continua/{id}', 'EducacionContinuaController@destroy');
			Route::resource('evento','EventoController');
			Route::get('evento/eliminar/{id}', 'EventoController@destroy');
			Route::resource('opcion-grado-proyeccion', 'OpcionGradoProyeccionController');
			Route::get('opcion-grado-proyeccion/eliminar/{id_opcion_grado}', 'OpcionGradoProyeccionController@destroy');
			Route::resource('proyectos-proyeccion','ProyectoProyeccionController');
			Route::get('proyectos/proyeccion/eliminar/{id_proyecto}', 'ProyectoProyeccionController@destroy');
			Route::resource('publicacion-proyeccion', 'PublicacionProyeccionController');
			Route::get('publicacion/proyeccion/eliminar/{id_publicacion}', 'PublicacionProyeccionController@destroy');
			Route::resource('tipo-evento','TipoEventoController');
			Route::post('/crear/tipo/evento', 'TipoEventoController@store');
			Route::get('/consultar/tipo/evento', 'TipoEventoController@consultar');
			Route::get('tipo-evento/actualizar/{id_evento}', 'TipoEventoController@update');
			Route::get('tipo-evento/eliminar/{id_tipo_evento}', 'TipoEventoController@destroy');
		});

		// Rutas para Investigacion
		Route::group(['middleware' => 'auth_investigacion'], function(){
			Route::resource('encuentro-grupo','EncuentroGrupoController');
			Route::get('encuentro/grupo/eliminar/{id_encuentro}', 'EncuentroGrupoController@destroy');
			Route::resource('joven-investigador','JovenInvestigadorController');
			Route::get('joven/investigador/eliminar/{id_joven_investigador}', 'JovenInvestigadorController@destroy');
			Route::resource('opcion-grado-investigacion','OpcionGradoInvestigacionController');
			Route::get('opcion-grado-investigacion/eliminar/{id_opcion_grado}', 'OpcionGradoInvestigacionController@destroy');
			Route::resource('proyectos-investigacion','ProyectoInvestigacionController');
			Route::get('proyecto/investigacion/eliminar/{id_proyecto}', 'ProyectoInvestigacionController@destroy');
			Route::resource('publicacion-investigacion', 'PublicacionInvestigacionController');
			Route::get('publicacion/investigacion/eliminar/{id_publicacion}', 'PublicacionInvestigacionController@destroy');
			Route::resource('red-conocimiento','RedConocimientoController');		
			Route::get('red/conocimiento/eliminar/{id_red}', 'RedConocimientoController@destroy');
			Route::post('proyectos-investigacion/adquisicion/crear', 'AdquisicionController@store');
			Route::post('proyectos-investigacion/adquisicion/editar', 'AdquisicionController@update');
			Route::get('proyectos-investigacion/adquisicion/eliminar/{id_adquisicion}', 'AdquisicionController@destroy');
			Route::get('proyectos-investigacion/adquisicion/editar/{id_adquisicion}', 'AdquisicionController@edit');
	});

});

// ruta para el autocompletado estudiante
Route::get('/buscarEstudiante/{palabra}','buscarPersonaController@buscarEstudiante');

// ruta autocompletado profesor
Route::get('/buscarProfesor/{palabra}','buscarPersonaController@buscarProfesor');

// ruta para el autocompletado externos
Route::get('/buscarExternoPersona/{palabra}', 'buscarPersonaController@buscarPersonaExterno');
Route::get('/buscarExternoEntidad/{palabra}', 'buscarPersonaController@buscarEntidadExterno');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// exportar Encuentro de Grupos Index a [Excel, PDF]
Route::get('/encuentros/{tipo_archivo}', 'EncuentroGrupoController@reporte');

// exportar Grupos [Excel, PDF]
Route::get('/grupos/{tipo_archivo}/{tipo_grupo}', 'GrupoController@reporte');

// exportar Externos [Excel, PDF]
Route::get('/externos/{page}/{id_externo}/{tipo_archivo}', 'ExternoController@reporte');

// exportar opciones de grado [Excel, PDF]
Route::get('/opcion/grado/{tipo}/{tipo_archivo}', 'OpcionGradoInvestigacionController@reporte');

// exportar proyectos [Excel, PDF]
Route::get('/proyectos/{tipo}/{tipo_archivo}', 'ProyectoInvestigacionController@reporte');

// exportar publicaciones [Excel, PDF]
Route::get('/publicaciones/{tipo}/{tipo_archivo}', 'PublicacionInvestigacionController@reporte');

// exportar red conocimiento [Excel, PDF]
Route::get('/red/conocimiento/{tipo_archivo}', 'RedConocimientoController@reporte');

// exportar educación continua [Excel, PDF]
Route::get('/educacion/continua/{tipo_archivo}', 'EducacionContinuaController@reporte');

// exportar eventos [Excel, PDF]
Route::get('/eventos/{tipo_archivo}', 'EventoController@reporte');

// consulta datos para graficar opciones de grado proyección
Route::get('/datos/grafica/opcion/grados/proyeccion', 'IndicadorProyeccionController@consultaOpcionGrado');

Route::get('/exportar/excel/educacion-continua', 'EducacionContinuaController@exportarReporte');
