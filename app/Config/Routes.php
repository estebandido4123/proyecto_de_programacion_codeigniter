<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

/*regiones controladores */ 
$routes->get('regiones','RegionesController::index_regiones'); #muestra regiones
$routes->post('agregar_region','RegionesController::insertar'); #agrega regiones nuevas
$routes->get('eliminar_region/(:num)','RegionesController::eliminar/$1'); # elimina regiones
$routes->get('buscar_region/(:num)','RegionesController::buscar_region/$1'); # busca las regiones
$routes->post('modificar_region','RegionesController::modificar_region'); # modifica regiones
/* ----Termina los controladores de regiones----*/

/*regiones controladores */ 
$routes->get('departamentos','departamentosController::index_departamentos'); #muestra departamentos
$routes->post('agregar_departamentos','departamentosController::agregar_departamentos'); #agrega departamentos nuevos
$routes->get('eliminar_departamentos/(:num)','departamentosController::eliminar_departamentos/$1'); # elimina departamentos
$routes->get('buscar_departamentos/(:num)','departamentosController::buscar_departamentos/$1'); # busca los departamentos
$routes->post('modificar_departamentos','departamentosController::modificar_departamentos'); # modifica departamentos
/* ----Termina los controladores de regiones----*/

/* municipios controladores */
$routes->get('municipios', 'MunicipiosController::index_municipios'); # muestra municipios
$routes->post('agregar_municipios', 'MunicipiosController::agregar_municipios'); # agrega municipios nuevos
$routes->get('eliminar_municipios/(:num)', 'MunicipiosController::eliminar_municipios/$1'); # elimina municipios
$routes->get('buscar_municipios/(:num)', 'MunicipiosController::buscar_municipios/$1'); # busca los municipios
$routes->post('modificar_municipios', 'MunicipiosController::modificar_municipios'); # modifica municipios
/* ----Termina los controladores de municipios----*/

/* niveles academicos controladores */
$routes->get('niveles_academicos', 'NivelesAcademicosController::index_niveles_academicos'); # muestra niveles
$routes->post('agregar_niveles_academicos', 'NivelesAcademicosController::agregar_niveles_academicos'); # agrega nivel nuevo
$routes->get('eliminar_niveles_academicos/(:num)', 'NivelesAcademicosController::eliminar_niveles_academicos/$1'); # elimina nivel
$routes->get('buscar_niveles_academicos/(:num)', 'NivelesAcademicosController::buscar_niveles_academicos/$1'); # busca nivel
$routes->post('modificar_niveles_academicos', 'NivelesAcademicosController::modificar_niveles_academicos'); # modifica nivel
/* ----Termina los controladores de niveles academicos----*/    

/* ciudadanos controladores */
$routes->get('ciudadanos', 'CiudadanosController::index_ciudadanos'); # muestra la lista de ciudadanos
$routes->post('agregar_ciudadanos', 'CiudadanosController::agregar_ciudadanos'); # agrega un nuevo ciudadano
$routes->get('eliminar_ciudadanos/(:num)', 'CiudadanosController::eliminar_ciudadanos/$1'); # elimina por DPI
$routes->get('buscar_ciudadanos/(:num)', 'CiudadanosController::buscar_ciudadanos/$1'); # busca por DPI
$routes->post('modificar_ciudadanos', 'CiudadanosController::modificar_ciudadanos'); # modifica datos del ciudadano
/* ----Termina los controladores de ciudadanos----*/