<?php
// Start or retrieve the session
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
if(!isset($_SESSION['uid']))
{
    echo "<SCRIPT LANGUAGE='javascript'>location.href = '".HTTP_ROOT."/login.php'</SCRIPT>";
}
?>
