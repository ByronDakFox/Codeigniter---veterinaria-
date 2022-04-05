<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/Inicio_gft=veterinaria-20v', 'Home::inicio');
$routes->get('/Registro_db=fgrt96-ik', 'Home::registro');
$routes->get('/registrosPet_and_pers=datereview-782ik', 'Home::registroDueno_Mascota');
$routes->get('/inicio_fg=n66-inicio', 'Home::login');
$routes->get('/bievenido_vt=salida-54j', 'Home::destruirDatos');
$routes->get('/datos_vt=datereview-54j', 'Home::ingresoDatos');
$routes->get('/mascota_prop=datereview-57j', 'Home::mascotasMostrar');
$routes->get('/datePro_mascs=datereview-59kj', 'Home::selectProp'); 
$routes->get('/datePet_masc=datereview-68pt', 'Home::ingresoDatosMascotas'); 
$routes->get('/historyPet_masc=datereview-96pt', 'Home::Historial');
$routes->get('/citasmaxc_masc=datereview-96pt', 'Home::citas_medicas');
$routes->get('/Agentsmaxc_masc=datereview-96pt', 'Home::citas_Agendas');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
