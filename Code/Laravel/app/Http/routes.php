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

	// Ruta raiz
	Route::get('/','HomeController@index');
	// Ruta cierre de sesion
	Route::get('/auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

	 	Route::resource('adscripcion','AdscripcionController');
		Route::resource('sustentacion','SustentacionController');
		Route::resource('asistencia','AsistenciaController');
		Route::resource('participacion','ParticipacionController');
		Route::resource('publica', 'PublicaController');
		Route::resource('adquisicion', 'AdquisicionController');
		Route::resource('externo','ExternoController');
		Route::resource('grupos','GrupoController');
		Route::resource('indicadores-investigacion','IndicadorInvestigacionController');


		// Rutas para Proyeccion Social
		Route::group(['middleware' => 'auth_proyeccion'], function(){
			Route::resource('educacion-continua','EducacionContinuaController');
			Route::resource('evento','EventoController');
			Route::resource('grupo-proyeccion','GrupoProyeccionController');
			Route::resource('opcion-grado-proyeccion', 'OpcionGradoProyeccionController');
			Route::resource('proyectos-proyeccion','ProyectoProyeccionController');
			Route::resource('publicacion-proyeccion', 'PublicacionProyeccionController');
			Route::resource('tipo-evento','TipoEventoController');
		});

		// Rutas para Investigacion
		Route::group(['middleware' => 'auth_investigacion'], function(){

			Route::resource('encuentro-grupo','EncuentroGrupoController');
			Route::resource('joven-investigador','JovenInvestigadorController');
			Route::resource('opcion-grado-investigacion','OpcionGradoInvestigacionController');
			Route::resource('proyectos-investigacion','ProyectoInvestigacionController');
			Route::resource('publicacion-investigacion', 'PublicacionInvestigacionController');
			Route::resource('red-conocimiento','RedConocimientoController');		
		
	});

});

Route::get('/buscarEstudiante/{palabra}','buscarPersonaController@buscarEstudiante');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('/excel', function(){

	//$data = \DB::table('estudiantes')->get();
	//dd($data);
	$data = array(
		array('data1', 'data2'),
		array('data3', 'data4'));
	//dd($data);
	$data = FCS\Estudiante::select('numero_documento AS Cédula', 'codigo_estudiante AS Código', \DB::raw("CONCAT(primer_nombre,' ',segundo_nombre, ' ', apellido_paterno, ' ', apellido_materno) AS 'Nombre Estudiante'"), 'telefono AS Teléfono')->get();
	dd($data);
	Excel::create('filename', function($excel) use($data){
		$excel->sheet('SheetName', function($sheet) use($data){
			//$sheet->fromArray($data);
			$sheet->fromModel($data);
		});
	})->export('xls');
});
Route::get('/excel/encuentros', 'EncuentroGrupoController@excel');
