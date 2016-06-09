<? 
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].'/'.$root[1].'/'.$root[2]);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/'.$root[1].'/'.$root[2]);
//Inicio la sesión
include (SITE_ROOT.'/resources/includes/init.php'); 
    session_unset();
    session_destroy();
    //COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
    if(!isset($_SESSION['uid']))
    {
        echo "<SCRIPT LANGUAGE='javascript'>location.href = '".HTTP_ROOT."/login.php'</SCRIPT>";
    }
?>
