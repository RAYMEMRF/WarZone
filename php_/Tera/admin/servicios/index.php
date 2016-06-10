<?
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].'/'.$root[1]);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/'.$root[1]);
include (SITE_ROOT.'/resources/includes/header.php'); 
$imagen = 'resources/img/1377591956_sharemanager.png';
$tabla = 'servicios';
$addmsj = 'Agregar Servicio';
$columnas = array('Encabezado'=>'encabezado','Titulo'=>'titulo','Imagen'=>'imagen');
$condicion = 1;
$filas = 5;
$editar = 1;
$eliminar = 1;
$delmsj = 'Estas seguro que deseas eliminar este servicio?';
echo get_index_header($imagen,$tabla,$addmsj);
echo get_index_view($tabla,$columnas,$condicion,$filas,$editar,$eliminar);
if($eliminar)
{
    echo get_deletion_modal($delmsj);
}
include(SITE_ROOT.'/resources/includes/footer.php'); 
?>
