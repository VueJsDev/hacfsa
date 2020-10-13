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
//INICIO RUTAS INICIO
Route::get('{locale?}', 'FrontendController@index')->name('home');
Route::get('es/inicio', 'FrontendController@index')->name('homees');
Route::get('en/home', 'FrontendController@index')->name('homeen');
Route::get('pt/home', 'FrontendController@index')->name('homept');

// FIN RUTAS INICIO
//INICIO RUTAS DOCENCIA
Route::get('es/docencia', 'FrontendController@teaching')->name('teaching');
Route::get('en/education', 'FrontendController@teaching')->name('teaching_en');
Route::get('pt/docencia', 'FrontendController@teaching')->name('teaching_pt');
//FIN RUTAS DOCENCIA

//INICIO RUTAS DOCENCIA INTRODUCCION
Route::get('es/intro-docencia', 'FrontendController@teachingIntro')->name('teaching_intro');
Route::get('en/teaching', 'FrontendController@teachingIntro')->name('teaching_introen');
Route::get('pt/ensino', 'FrontendController@teachingIntro')->name('teaching_intropt');
//FIN RUTAS DOCENCIA INTRODUCCION

//INICIO RUTAS RECIDENCIA
Route::get('es/residencia', 'FrontendController@recidence')->name('recidencia');
//Route::get('en/recidence', 'FrontendController@recidence')->name('recidencia_en');
//Route::get('pt/residência', 'FrontendController@recidence')->name('recidencia_pt');
//FIN RUTAS RECIDENCIpt

//INICIO RUTAS + info RECIDENCIA
Route::get('es/inforecidencias', 'FrontendController@masInfoRecidence')->name('inforecidencias');
//Route::get('en/recidence', 'FrontendController@recidence')->name('recidencia_en');
//Route::get('pt/residência', 'FrontendController@recidence')->name('recidencia_pt');
//FIN RUTAS + info RECIDENCIpt

//INICIO RUTAS FELLOWS
Route::get('es/fellows', 'FrontendController@fellows')->name('fellows');
//Route::get('en/fellows', 'FrontendController@fellows')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@fellows')->name('fellows_pt');
//FIN RUTAS FELLOWS

//INICIO RUTAS PASANTIAS Y ROTACIONES
Route::get('es/pasantias-rotaciones', 'FrontendController@rotaciones')->name('rotations');
//Route::get('en/fellows', 'FrontendController@rotaciones')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@rotaciones')->name('fellows_pt');
//FIN RUTAS PASANTIAS Y ROTACIONES

//INICIO RUTAS ATENEOS
Route::get('es/ateneos', 'FrontendController@ateneos')->name('ateneos');
//Route::get('en/fellows', 'FrontendController@ateneos')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@ateneos')->name('fellows_pt');
//FIN RUTAS ATENEOS
Route::get('es/ateneo-octubre19', 'FrontendController@ateneosoctubre19')->name('ateneo-octubre19');
Route::get('es/ateneo-julio19', 'FrontendController@ateneosjulio19')->name('ateneo-julio19');
Route::get('es/ateneo-junio19', 'FrontendController@ateneosjunio19')->name('ateneo-junio19');
Route::get('es/ateneo-marzo19', 'FrontendController@ateneosmarzo19')->name('ateneo-marzo19');
Route::get('es/ateneo-abril19', 'FrontendController@ateneosabril19')->name('ateneo-abril19');
Route::get('es/ateneo-mayo19', 'FrontendController@ateneosmayo19')->name('ateneo-mayo19');
Route::get('es/ateneos-2019', 'FrontendController@ateneos2019')->name('ateneos-2019');
//Route::get('en/fellows', 'FrontendController@ateneos')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@ateneos')->name('fellows_pt');
//INICIO RUTAS ATENEOS
Route::get('es/ateneos_multidisciplinario', 'FrontendController@ateneosMultidisciplinario')->name('ateneos_multidisciplinario');
//Route::get('en/fellows', 'FrontendController@ateneos')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@ateneos')->name('fellows_pt');
//FIN RUTAS ATENEOS
Route::get('es/ateneos-2017', 'FrontendController@ateneos2017')->name('ateneos_2017');
//Route::get('en/fellows', 'FrontendController@ateneos')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@ateneos')->name('fellows_pt');
//FIN RUTAS ATENEOS

Route::get('es/ateneos-2018', 'FrontendController@ateneos2018')->name('ateneos_2018');
//Route::get('en/fellows', 'FrontendController@ateneos')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@ateneos')->name('fellows_pt');
//FIN RUTAS ATENEOS

Route::get('es/ateneos-cardiologia18', 'FrontendController@ateneoscardio2018')->name('ateneoscardio_2018');
//Route::get('en/fellows', 'FrontendController@ateneos')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@ateneos')->name('fellows_pt');
//FIN RUTAS ATENEOS
Route::get('es/ateneo-septiembre2018', 'FrontendController@ateneoseptiembre2018')->name('ateneo-septiembre2018');
//Route::get('en/fellows', 'FrontendController@ateneos')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@ateneos')->name('fellows_pt');
//FIN RUTAS ATENEOS
Route::get('es/ateneo-agosto-2018', 'FrontendController@ateneosagosto2018')->name('ateneo_agosto_2018');
//Route::get('en/fellows', 'FrontendController@ateneos')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@ateneos')->name('fellows_pt');
//FIN RUTAS ATENEOS

Route::get('es/ateneo-julio2018', 'FrontendController@ateneojulio18')->name('ateneo-julio2018');
//Route::get('en/fellows', 'FrontendController@ateneos')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@ateneos')->name('fellows_pt');
//FIN RUTAS ATENEOS
Route::get('es/ateneo-radiologico18', 'FrontendController@ateneoradiologico18')->name('ateneo-radiologico18');
//Route::get('en/fellows', 'FrontendController@ateneos')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@ateneos')->name('fellows_pt');
//FIN RUTAS ATENEOS

Route::get('es/uti', 'FrontendController@uti2018')->name('uti_2018');
//Route::get('en/fellows', 'FrontendController@ateneos')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@ateneos')->name('fellows_pt');
//FIN RUTAS ATENEOS
Route::get('es/ateneos-neuro18', 'FrontendController@ateneosneuro2018')->name('ateneosneuro_2018');
//Route::get('en/fellows', 'FrontendController@ateneos')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@ateneos')->name('fellows_pt');
//FIN RUTAS ATENEOS

//INICIO RUTAS ATENEOS INTERRESIDENCIAS
Route::get('es/ateneos-interresidencias', 'FrontendController@interresidencias')->name('interresidencias');
//Route::get('en/fellows', 'FrontendController@interresidencias')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@interresidencias')->name('fellows_pt');
//FIN RUTAS ATENEOS INTERRESIDENCIAS

//INICIO RUTAS ATENEOS NEUROCIRUGIA
Route::get('es/neurocirugia', 'FrontendController@neurocirugia')->name('neurocirugia');
//Route::get('en/fellows', 'FrontendController@neurocirugia')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@neurocirugia')->name('fellows_pt');
//FIN RUTAS ATENEOS NEUROCIRUGIA
Route::get('es/jornada-neurociencias2018', 'FrontendController@neurociencias2018')->name('jornada-neurociencias2018');
Route::get('es/jornada-enfermeria-18', 'FrontendController@enfermeria2018')->name('jornada-enfermeria-18');
Route::get('es/jornada-pediatria-18', 'FrontendController@pediatria2018')->name('jornada-pediatria-18');

Route::get('es/capacitacion-2018', 'FrontendController@capacitacion2018')->name('capacitacion-2018');


//INICIO RUTAS ATENEOS NEUROLOGIA
Route::get('es/neurologia', 'FrontendController@neurologia')->name('neurologia');
//Route::get('en/fellows', 'FrontendController@neurologia')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@neurologia')->name('fellows_pt');
//FIN RUTAS ATENEOS NEUROLOGIA

//INICIO RUTAS JORNADA Y CAPACITACION
Route::get('es/capacitacion', 'FrontendController@capacitacion')->name('capacitacion');
//Route::get('en/fellows', 'FrontendController@capacitacion')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@capacitacion')->name('fellows_pt');
//FIN RUTAS JORNADA Y CAPACITACION

//INICIO RUTA TRABAJOS CIENTIFICOS
Route::get('es/cientifico', 'FrontendController@tcientifico')->name('cientifico');
//Route::get('en/fellows', 'FrontendController@tcientifico')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@tcientifico')->name('fellows_pt');
//FIN RUTA TRABAJOS CIENTIFICOS

//INICIO RUTA JORNADA CARDIO
Route::get('es/cardiologia', 'FrontendController@cardiologia')->name('cardiologia');
//Route::get('en/fellows', 'FrontendController@cardiologia')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@cardiologia')->name('fellows_pt');
//FIN RUTA JORNADA CARDIO

//INICIO RUTA TRABAJOS NEURO
Route::get('es/neuro', 'FrontendController@neuro')->name('neuro');
//Route::get('en/fellows', 'FrontendController@neuro')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@neuro')->name('fellows_pt');
//FIN RUTA TRABAJOS NEURO

//INICIO RUTA TRABAJOS LABORAL
Route::get('es/laboral', 'FrontendController@laboral')->name('laboral');
//Route::get('en/fellows', 'FrontendController@laboral')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@laboral')->name('fellows_pt');
//FIN RUTA TRABAJOS LABORAL

//INICIO RUTA TRABAJOS HOSPITALARIA
Route::get('es/hospitalaria', 'FrontendController@hospitalaria')->name('hospitalaria');
//Route::get('en/fellows', 'FrontendController@hospitalaria')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@hospitalaria')->name('fellows_pt');
//FIN RUTA TRABAJOS HOSPITALARIA

//INICIO RUTA TRABAJOS GINECOLOGIA
Route::get('es/ginecologia', 'FrontendController@ginecologia')->name('ginecologia');
//Route::get('en/fellows', 'FrontendController@hospitalaria')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@hospitalaria')->name('fellows_pt');
//FIN RUTA TRABAJOS GINECOLOGIA

//INICIO RUTA TRABAJOS PEDIATRIA
Route::get('es/pediatria', 'FrontendController@pediatria')->name('pediatria');
//Route::get('en/fellows', 'FrontendController@hospitalaria')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@hospitalaria')->name('fellows_pt');
//FIN RUTA TRABAJOS PEDIATRIA

//INICIO RUTA TRABAJOS ENFERMERIA
Route::get('es/enfermeria', 'FrontendController@enfermeria')->name('enfermeria');
//Route::get('en/fellows', 'FrontendController@hospitalaria')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@hospitalaria')->name('fellows_pt');
//FIN RUTA TRABAJOS ENFERMERIA

//INICIO RUTA TRABAJOS KINESIOLOGIA
Route::get('es/kinesiologia', 'FrontendController@kinesiologia')->name('kinesiologia');
//Route::get('en/fellows', 'FrontendController@hospitalaria')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@hospitalaria')->name('fellows_pt');
//FIN RUTA TRABAJOS KINESIOLOGIA

//INICIO RUTA TRABAJOS KINESIOLOGIA
Route::get('es/kinesiologia2018', 'FrontendController@kinesiologia2018')->name('kinesiologia2018');
//Route::get('en/fellows', 'FrontendController@hospitalaria')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@hospitalaria')->name('fellows_pt');
//FIN RUTA TRABAJOS KINESIOLOGIA

//INICIO RUTA TRABAJOS ANESTEISOLOGIA
Route::get('es/anestesiologia2018', 'FrontendController@anestesiologia2018')->name('anestesiologia2018');
//Route::get('en/fellows', 'FrontendController@hospitalaria')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@hospitalaria')->name('fellows_pt');
//FIN RUTA TRABAJOS KINESIOLOGIA

//INICIO RUTA TRABAJOS ANESTEISOLOGIA
Route::get('es/endoscopia2018', 'FrontendController@endoscopia2018')->name('endoscopia2018');
//Route::get('en/fellows', 'FrontendController@hospitalaria')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@hospitalaria')->name('fellows_pt');
//FIN RUTA TRABAJOS KINESIOLOGIA

//INICIO RUTAS COMITES
Route::get('es/comites', 'FrontendController@comites')->name('comites');
//Route::get('en/fellows', 'FrontendController@comites')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@comites')->name('fellows_pt');
//FIN RUTAS COMITES

//INICIO RUTAS actividad docencia
Route::get('es/actividad-docencia', 'FrontendController@actividadDocencia')->name('actividad-docencia');
//Route::get('en/fellows', 'FrontendController@comites')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@comites')->name('fellows_pt');
//FIN RUTAS actividad docencia

//INICIO RUTAS taller de atencion
Route::get('es/taller-peritonitis', 'FrontendController@tallerPeritonitis')->name('taller-peritonitis');
//Route::get('en/fellows', 'FrontendController@comites')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@comites')->name('fellows_pt');
//FIN RUTAS 

//INICIO RUTAS taller de atencion
Route::get('es/calidad-antencion', 'FrontendController@calidadAtencion')->name('calidad-atencion');
//Route::get('en/fellows', 'FrontendController@comites')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@comites')->name('fellows_pt');
//FIN RUTAS 

//INICIO RUTAS Charla de enfermeria
Route::get('es/charla-enfermeria', 'FrontendController@charlaEnfermeria')->name('charla-enfermeria');
//Route::get('en/fellows', 'FrontendController@comites')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@comites')->name('fellows_pt');
//FIN RUTAS Charla de enfermeria

//INICIO RUTAS BIBLIOTECA
Route::get('es/biblioteca', 'FrontendController@biblioteca')->name('biblioteca');
//Route::get('en/fellows', 'FrontendController@biblioteca')->name('fellows_en');
//Route::get('pt/fellows', 'FrontendController@biblioteca')->name('fellows_pt');
//FIN RUTAS BIBLIOTECA

//PARKISON
Route::get('es/parkinson-es', 'FrontendController@parkinson')->name('parkinson_es');
Route::get('en/parkinson-en', 'FrontendController@parkinson')->name('parkinson_en');
Route::get('pt/parkinson-pt', 'FrontendController@parkinson')->name('parkinson_pt');

//FIN PARKISON

//INICIO RUTAS INSTITUCION
Route::get('es/institucion', 'FrontendController@institution')->name('institution');
Route::get('pt/instituição', 'FrontendController@institution')->name('instituicao');
Route::get('en/about-us', 'FrontendController@institution')->name('about_us');
// FIN RUTAS INSTITUCION
//INICIO RUTAS TELESALUD
Route::get('es/telesalud', 'FrontendController@ehealth')->name('ehealth');
Route::get('en/telehealth', 'FrontendController@ehealth')->name('telehealth');
Route::get('pt/tele-saúde', 'FrontendController@ehealth')->name('tele-saude');
// FIN RUTAS TELESALUD
//INICIO RUTAS INFO PACIENTE
Route::get('es/informacion-al-paciente', 'FrontendController@patient_information')->name('patient_information');
Route::get('en/patient-information', 'FrontendController@patient_information')->name('patient_information_en');
Route::get('pt/informação-do-paciente', 'FrontendController@patient_information')->name('patient_information_pt');
//FIN RUTAS INFO PACIENTE
//INICIO RUTAS CIRCUITO
Route::get('es/circuito', 'FrontendController@circuit')->name('circuit');
Route::get('en/hospital-information-system', 'FrontendController@circuit')->name('circuit_en');
Route::get('pt/circuito', 'FrontendController@circuit')->name('circuit_pt');
//FIN RUTAS CIRCUITO
//INICIO RUTAS HORARIO
Route::get('es/horarios', 'FrontendController@schedules')->name('schedules');
Route::get('en/timetables', 'FrontendController@schedules')->name('schedules_en');
Route::get('pt/horarios', 'FrontendController@schedules')->name('schedules_pt');
//FIN RUTAS HORARIO
//INICIO RUTAS AUTORIZADO
Route::get('es/esta-autorizado', 'FrontendController@authorized')->name('authorized');
Route::get('en/esta-autorizado', 'FrontendController@authorized')->name('authorized_en');
Route::get('pt/esta-autorizado', 'FrontendController@authorized')->name('authorized_pt');
//FIN RUTAS AUTORIZADO
//INICIO RUTA PROHIBIDO
Route::get('es/esta-prohibido', 'FrontendController@prohibited')->name('prohibited');
Route::get('en/prohibitions', 'FrontendController@prohibited')->name('prohibited_en');
Route::get('pt/proibido', 'FrontendController@prohibited')->name('prohibited_pt');
//FIN RUTA PROHIBIDO
//INICIO RUTA PUEDE Y DEBE
Route::get('es/usted-puede', 'FrontendController@you_can')->name('you_can');
Route::get('en/you-can', 'FrontendController@you_can')->name('you_can_en');
Route::get('pt/voce-pode', 'FrontendController@you_can')->name('you_can_pt');
//FIN RUTA PUEDE Y DEBE

Route::get('es/contacto', 'FrontendController@contact')->name('contact');
Route::get('en/contacto', 'FrontendController@contact')->name('contact_en');
Route::get('pt/contacto', 'FrontendController@contact')->name('contact_pt');
//INICIO RUTAS HISTORIA
Route::get('es/historia', 'FrontendController@history')->name('history');
Route::get('pt/historico', 'FrontendController@history')->name('historico');
Route::get('en/history', 'FrontendController@history')->name('history_en');
//FIN RUTAS HISTORIA
//INICIO RUTAS AUTORIDADES
Route::get('es/autoridades', 'FrontendController@authorities')->name('authorities');
Route::get('en/authorities', 'FrontendController@authorities')->name('authorities_en');
Route::get('pt/autoridades', 'FrontendController@authorities')->name('authorities_pt');
//FIN RUTAS AUTORIDADES
//INICIO RUTAS MISION
Route::get('es/mision', 'FrontendController@mission')->name('mission');
Route::get('en/mission', 'FrontendController@mission')->name('mission_en');
Route::get('pt/missão', 'FrontendController@mission')->name('mission_pt');
//FIN RUTAS MISION
//INICIO RUTAS VALORES
Route::get('es/valores', 'FrontendController@values')->name('values');
Route::get('en/value', 'FrontendController@values')->name('values_en');
Route::get('pt/valores', 'FrontendController@values')->name('values_pt');
//FIN RUTAS VALORES
//INICIO RUTAS SERVICIOS
Route::get('es/servicios', 'FrontendController@services')->name('services');
Route::get('es/servicios/servicio/{id}', 'FrontendController@showservices')->name('service');
Route::get('en/services', 'FrontendController@services')->name('servicesen');
Route::get('en/services/services/{id}', 'FrontendController@showservices')->name('serviceen');
Route::get('pt/serviços', 'FrontendController@services')->name('servicos');
Route::get('pt/serviços/serviços/{id}', 'FrontendController@showservices')->name('servico');
//FIN RUTAS SERVICIOS
//INICIO RUTAS TRANSPLANTE
Route::get('es/trasplantes', 'FrontendController@transplants')->name('transplants');
Route::get('en/transplants', 'FrontendController@transplants')->name('transplants_en');
Route::get('pt/trasplantes', 'FrontendController@transplants')->name('transplants_pt');
//FIN RUTAS TRANSPLANTE
//INICIO RUTAS TRANSPLANTE RENAL
Route::get('es/trasplante-renal', 'FrontendController@trasplant_renal')->name('trasplant_renal');
Route::get('en/transplants-renal', 'FrontendController@trasplant_renal')->name('trasplant_renal_en');
Route::get('pt/trasplante-renal', 'FrontendController@trasplant_renal')->name('trasplant_renal_pt');
//FIN RUTAS TRANSPLANTE RENAL
//INICIO RUTAS TRANSPLANTE HEPATICO
Route::get('es/trasplante-hepatico', 'FrontendController@trasplant_hepatico')->name('trasplant_hepatico');
Route::get('en/transplants-hepatic', 'FrontendController@trasplant_hepatico')->name('trasplant_hepatico_en');
Route::get('pt/trasplante-hepatico', 'FrontendController@trasplant_hepatico')->name('trasplant_hepatico_pt');
//FIN RUTAS TRANSPLANTE HEPATICO
//INICIO RUTAS TRANSPLANTE CARDIACO
Route::get('es/trasplante-cardiaco', 'FrontendController@trasplant_cardiaco')->name('trasplant_cardiaco');
Route::get('en/transplants-cardiaco', 'FrontendController@trasplant_cardiaco')->name('trasplant_cardiaco_en');
Route::get('pt/trasplante-cardiaco', 'FrontendController@trasplant_cardiaco')->name('trasplant_cardiaco_pt');
//FIN RUTAS TRANSPLANTE CARDIACO
//INICIO RUTAS TRABAJA CON NOSOTROS
Route::get('es/trabaja-con-nosotros', 'FrontendController@trabaja_con_nosotros')->name('trabaja_con_nosotros');
Route::get('en/work-with-us', 'FrontendController@trabaja_con_nosotros')->name('trabaja_con_nosotros_en');
Route::get('pt/trabalhar-com-a-gente', 'FrontendController@trabaja_con_nosotros')->name('trabaja_con_nosotros_pt');
//FIN RUTAS TRABAJA CON NOSOTROS
Route::post('es/sendcv', 'FrontendController@sendcv');
Route::post('es/sendcontact', 'FrontendController@sendcontact');
Route::post('es/sendparkinson', 'FrontendController@sendparkinson');
/**
 * Rutas para residencia, incluidas las que son para descargar los archivos
 * Diego Maximiliano
 */
Route::get('es/rutaDePreincripcion', 'FrontendController@evento')->name('evento_inscripcion');
Route::get('es/recidentes', 'FrontendController@recidentes')->name('recidentes');
Route::get('es/examen-residentes19', 'FrontendController@examenRecidentes19')->name('examen-residentes19');
Route::get('es/examen-recidentes', 'FrontendController@examenRecidentes')->name('examen-recidentes');
Route::get('es/semana-residentes', 'FrontendController@semanaResidentes')->name('semana-residentes');
Route::get('es/residentes-mantenimiento', 'FrontendController@mantenimientoResidentes')->name('residentes-mantenimiento');
Route::get('es/acto-residentes-mantenimiento', 'FrontendController@actoMantenimientoResidentes')->name('acto-residentes-mantenimiento');
Route::get('es/residencias-inscripcion', 'FrontendController@evento')->name('evento_inscripcion');
Route::get('es/residencias','ResidenceController@info')->name('info_recidencia');
Route::post('es/residencias', 'ResidenceController@store');
Route::get('es/residencias/inscribir', 'ResidenceController@create');
Route::get('es/residencias/descargar/{type}/{name}', 'ResidenceController@getFile');
Route::post('es/residencias/save', 'ResidenceController@postStore');

Route::get('es/eventos/jornada-de-enfermeria', 'EventoController@index');
Route::post('es/eventos/jornada-de-enfermeria', 'EventoController@store');
Route::get('es/eventos/descargar/{type}/{name}', 'EventoController@getFile');

Route::get('es/noticias', 'FrontendController@lastnews')->name('news');
Route::get('pt/noticias', 'FrontendController@lastnews')->name('news');
Route::get('en/news', 'FrontendController@lastnews')->name('news');
Route::get('es/noticias/{seoslug?}', 'FrontendController@news')->name('news_es');
Route::get('pt/noticias/{seoslug?}', 'FrontendController@news')->name('news_pt');
Route::get('en/news/{seoslug?}', 'FrontendController@news')->name('news_en');
Route::get('pt/noticias/back/{seoslug?}', 'FrontendController@previusNews')->name('news_ptbak');
Route::get('en/news/back/{seoslug?}', 'FrontendController@previusNews')->name('news_enback');

//ACTIVACION DE CUENTA
Route::get('auth/activeaccount', 'Auth\AuthController@activeAccount');
Route::post('es/sendcontact', 'FrontendController@sendcontact');

//SI YA ESTA LOGEADO INGRESA DIRECTAMENTE
Route::group(['middleware' => 'guest'], function () {
    Route::get('admin/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
});

//RUTAS RESTRINGIDAS, SE COMPRUEBA SI ESTA LOGEADO ANTES DE INGRESAR
Route::group(['middleware' => 'auth'], function () {
    Route::post('admin/news/{id}/traducido', 'NewsController@storetraducido');
    Route::post('admin/users/perfil', 'UsersController@perfilnuevo');
    Route::resource('admin/news', 'NewsController');
    Route::resource('admin/users', 'UsersController');
    Route::controller('admin/images', 'ImagesController');

    Route::get('auth/logout', 'Auth\AuthController@getLogout');
});

//CONTROLADOR PARA banners
Route::group(['middleware' => 'auth'], function () {
    Route::get('admin/banner', 'BannerController@index');
    Route::get('admin/banner/getbanners', 'BannerController@getbanners');
    Route::post('admin/banner/uploadimages', 'BannerController@uploadimages');
    Route::post('admin/banner/deletebanner', 'BannerController@deletebanner');
//CONTROLADOR PARA sections telesalud
    Route::get('admin/sections', 'SectionsController@index');
    Route::get('admin/sections/getimgsections', 'TelesaludController@getimgsections');
    Route::post('admin/sections/uploadimgsections', 'TelesaludController@uploadimgsections');
    Route::post('admin/sections/deleteimgsections', 'TelesaludController@deleteimgsections');
    Route::post('admin/sections/videotelesalud', 'TelesaludController@store');
    Route::get('admin/redirecciontelesalud/{id}', 'FrontendController@redireciontelesalud');
//CONTROLADOR PARA sections institucion historia
    Route::post('admin/sections', 'InstitucionController@store');

//CONTROLADOR PARA service
    Route::resource('admin/service', 'ServiceController');
//CONTROLADOR PARA department
    Route::resource('admin/department', 'DepartmentController');

//CONTROLADOR PARA LOGO
    Route::get('admin/logo', 'LogoController@index');
    Route::get('admin/logo/getlogo', 'LogoController@getlogo');
    Route::post('admin/logo/uploadlogo', 'LogoController@uploadlogo');
    Route::post('admin/logo/deletelogo', 'LogoController@deletelogo');

//CONTROLADOR PARA RESIDENCIAS Y POSTULANTES
    Route::get('admin/residencias/postulantes', 'PostulanteController@index');
    Route::delete('admin/recidencias/postulantes/{id}', 'PostulanteController@destroy');
    Route::get('admin/residencias/frmpostulantes', 'PostulanteController@viewsfrmpostulantes');
    Route::delete('admin/recidencias/frmpostulantes/{id}', 'PostulanteController@destroyResidences');
    Route::post('admin/recidencias/newResidences', 'PostulanteController@storeResidences');

});
