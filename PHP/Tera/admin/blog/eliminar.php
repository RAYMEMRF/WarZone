<?php
    $root = explode('/',$_SERVER['REQUEST_URI']);
    define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].'/'.$root[1]);
    define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/'.$root[1]);
    include (SITE_ROOT.'/resources/includes/init.php');
    include (SITE_ROOT.'/resources/includes/common.php');
    $table = 'blog';
    $sql = "DELETE FROM ".$table." WHERE id=".$_GET['ref'];
    try
    {
        query($sql);
        echo "<SCRIPT LANGUAGE='javascript'>location.href = 'index.php?act=e'</SCRIPT>";
    }
    catch(Exception $e)
    {
        if(get_setting('debug'))
        {	echo 'Ha ocurrido el siguiente error -> '.$e; 
        	echo '<br><br><br><br><br><br>';
        	echo '<div align="center"><a href="index.php">Volver al index</a></div>';
        }
        else
        {
            echo "<SCRIPT LANGUAGE='javascript'>location.href = 'index.php?act=0'</SCRIPT>";
        }
    }
?>
