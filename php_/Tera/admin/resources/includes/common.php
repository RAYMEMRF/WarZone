<?php
include_once "database.php";

//Extrae el valor de un campo de la tabla configuracion
function get_setting($field)
{
    $consulta = "SELECT * FROM configuracion";
    $query = query($consulta);
    $resultado = fetch_array($query);
    return $resultado[$field];
}

//Extrae el valor de un campo de la tabla documentacion
function get_docs($field)
{
    $consulta = "SELECT * FROM documentacion";
    $query = query($consulta);
    $resultado = fetch_array($query);
    return $resultado[$field];
}

//Obtiene el encabezado html en menues de consultas, indicando la tabla y la imagen asociada
function get_index_header($imagen,$tabla,$addmsj)
{
    $html = '

      <div class="page-header">
        <h1><a href="index.php"><img style="width: 64px; height: 64px;" src="'.HTTP_ROOT.'/'.$imagen.'" class="img-rounded" title="'.ucfirst($tabla).'" /></a>'.ucfirst($tabla).'&nbsp;<small>Consultar</small></h1>
      </div>
      <p>
        <button type="button" class="btn btn-success btn-sm" onclick="location.href=\''.HTTP_ROOT.'/'.$tabla.'/agregar.php\'">
          <span class="glyphicon glyphicon-plus white"></span> '.$addmsj.'
        </button>
        <button type="button" class="btn btn-default btn-sm" onclick="location.href=\''.HTTP_ROOT.'\'">
          <span class="glyphicon glyphicon-arrow-left"></span> Regresar al men&uacute;
        </button>
      </p>';
    
    return $html;
}

//Obtiene una tabla en formato html a partir de una tabla de la base de datos especificada 
function get_index_view($table, $fields, $where = 1, $ppage = 0, $edit = 1, $delete = 1)
{
    $consulta = "SELECT * FROM ".$table." WHERE ".$where;
    $html = '
      <div class="panel panel-default">
        <div class="panel-body">';
    
    //COMPRUEBO SI SE VA EJECUTAR LA ACCION POR GET Ó POST
    if(isset($_GET['act']) && in_array($_GET['act'], array("a", "m", "e","0")))
    {
	echo mensaje("El proceso fue realizado exitosamente!","success");
	
	if($_GET['act']=="0")
	{
	     echo mensaje("Disculpe, no se pudo completar la operaci&oacute;n!");
	}
    }
    else 
    {
	 include (SITE_ROOT.'/resources/includes/post.php');
    }
    
    if($ppage)
    {
	//AL PRINCIPIO COMPRUEBO SI HICIERON CLICK EN ALGUNA PÁGINA
	if(isset($_GET['page']))
	{
	    $page= $_GET['page'];
	}
	else
	{
	    //SI NO DIGO Q ES LA PRIMERA PÁGINA
	    $page=1;
	}
	
	//ACA SE SELECCIONAN TODOS LOS DATOS DE LA TABLA
	$datos=query($consulta);
	  
	//MIRO CUANTOS DATOS FUERON DEVUELTOS
	$num_rows=num_rows($datos);
	  
	//ACA SE DECIDE CUANTOS RESULTADOS MOSTRAR POR PÁGINA , EN EL EJEMPLO PONGO 15
	$rows_per_page= $ppage;
	  
	//CALCULO LA ULTIMA PÁGINA
	$lastpage= ceil($num_rows / $rows_per_page);
	  
	//COMPRUEBO QUE EL VALOR DE LA PÁGINA SEA CORRECTO Y SI ES LA ULTIMA PÁGINA
	$page=(int)$page;
	 
	if($page > $lastpage)
	{
	    $page= $lastpage;
	}
	 
	if($page < 1)
	{
	    $page=1;
	}
	  
	//CREO LA SENTENCIA LIMIT PARA AÑADIR A LA CONSULTA QUE DEFINITIVA
	$limit= ' LIMIT '. ($page -1) * $rows_per_page . ',' .$rows_per_page;
	
	//REALIZO LA CONSULTA QUE VA A MOSTRAR LOS DATOS (ES LA ANTERIO + EL $limit)
	$consulta .= $limit;
    }

    //EJECUTO LA CONSULTA QUE VA A MOSTRAR LOS DATOS
    if(get_setting('debug'))
    {	echo 'CONSULTA get_index_view() = '.$consulta.'<br>'; }
    $query = query($consulta);
    
    if(num_rows($query)>0)
    {
	$html .= '
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>';
				       
	foreach($fields as $head=>$field)
	{ 
	    $html .= '
                  <th>'.$head.'</th>';
	}
	
	if($edit + $delete)
	{
	    $html .= '
                  <th colspan="'.($edit + $delete).'">Opciones</th>';
	}
	$html .= '
                </tr>
              </thead>
              <tbody>';
	
	while($resultado = fetch_array($query))
	{
	    $html .= '
                <tr>
                  <td>'.$resultado['id'].'</td>';
	    foreach($fields as $head=>$field)
	    {   if(is_array($field))
		{ 
		    $html .= ' 
                  <td>'.get_field_from_fk($field[0],$field[1],$resultado[$field[2]]).'</td>';
		}
		else 
		{
		    if($field=='link')
		    {
		     $html .= '
                  <td><a href="../resources/upload/'.$table.'/'.$resultado[$field].'">'.$resultado[$field].'</a></td>';
		    }
		    else
		    {
		    $html .= '
                  <td>'.$resultado[$field].'</td>';
		    }
		}
	    }
	
	    if($edit + $delete)
	    {
		$html .= '
                  <td>
                  <!-- Icons -->';
	    }
	    
	    if($edit)
	    {
		$html .= '
		            <a href="editar.php?ref='.$resultado['id'].'" title="Editar" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;';
	    }
	    
	    if($delete)
	    {
		$html .= '
		            <a href="eliminar.php?ref='.$resultado['id'].'" role="button" data-target="#myModal" data-toggle="modal" class="btn btn-default btn-xs confirm-delete" title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a>';
	    }
	    
	    if($edit + $delete)
	    {
		$html .= '
                  </td>';
	    }
	    
	    $html .= '
                </tr>';
	}

	$html .= '
              </tbody>
            </table>
        </div><!-- fin panel-body -->
      </div><!-- fin panel -->';
	
	$html .= $ppage? get_paginate($table,$where,$page,$ppage,$lastpage) : '';
    }
    else
    {
	$html = mensaje("No se encontraron resultados!","warning");
	//~ $html = '';
    }
      
    return $html;
}

//Declaracion de ventana emergente para mostrar mensaje de confirmación de eliminación
function get_deletion_modal($mensaje)
{
    $html = '

      <!--  Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Confirmar eliminar</h4>
            </div>
            <div class="modal-body">
              <p class="text-danger">'.$mensaje.'</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button id="btnYes" type="button" class="btn btn-danger">Eliminar</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal-->
      
    <script src="'.HTTP_ROOT.'/resources/js/deletionModal.js"></script>';
    
    return $html;
}

//Muestra un mensaje de alerta(warning), error(danger), noticia(info) o exito(success)
function mensaje($message = "", $type = "danger")
{
    switch($type)
    {
	case "danger":
	$icon = '<span class="glyphicon glyphicon-remove"></span>';
	break;
	case "success":
	$icon = '<span class="glyphicon glyphicon-ok"></span>';
	break;
	case "warning":
	$icon = '<span class="glyphicon glyphicon-warning-sign"></span>';
	break;
	case "info":
	$icon = '<span class="glyphicon glyphicon-info-sign"></span>';
	break;
	default:
	$icon = '';
	break;
    }
	$html = '
	  <div class="alert alert-'.$type.' alert-dismissable">
	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	    '.$icon.'&nbsp;&nbsp;'.$message.'
	  </div>';
    return $html;
}

//Obtiene el valor de un campo especificado indicando la tabla y la clave foránea
function get_field_from_fk($table,$field,$fk)
{
    $consulta = "SELECT * FROM ".$table." WHERE id = ".$fk;
    $query = query($consulta);
    $resultado = fetch_array($query);
    return $resultado[$field];
}

//Indica el nombre del .php actual
function get_current_filename(){
    return basename($_SERVER['PHP_SELF']);// Return the URL with a trailing slash
}

//Indica el nombre del .php proveniente del POST, este nombre debe estar asociado a la accion (agregar, editar, etc)
function get_referer_action(){
    
    $action = '';
    
    if(!empty($_SERVER['HTTP_REFERER']))
    {
	$basename = explode("?",basename($_SERVER['HTTP_REFERER']));
	list($action,$ext) =  explode(".",$basename[0]);
    }
    return $action;// Return the URL with a trailing slash
    
}

//Indica el nombre del modulo proveniente del POST, este nombre debe estar asociado a una tabla (usuarios, clientes, etc)
function get_referer_control(){
    
    $control = '';
    
    if(!empty($_SERVER['HTTP_REFERER']))
    {
	$dirname = explode("/",dirname($_SERVER['HTTP_REFERER']));
	$control = end($dirname);
    }
    return $control;// Return the URL with a trailing slash
}

//Obtener el paginado indicando a partir de una tabla especificada
function get_paginate($table, $where = 1, $page = 1, $ppage = 10, $lastpage = 1)
{
    $html = '';
    
    if($lastpage > 1)
    {
       $nextpage= $page +1;
       $prevpage= $page -1;
       $html .= '
	    <div class="text-center">
	      <ul class="pagination pagination-sm">';
	//SI NO ES LA PRIMERA PÁGINA HABILITO EL BOTON DE FIRST, EL PREVIOUS Y MUESTRO EL RESTO DE PÁGINAS
	if ($page > 1)
	{
	    $html .= '
	        <li><a href="'.$_SERVER['PHP_SELF'].'?page=1" title="Primera"><span class="glyphicon glyphicon-fast-backward"></span></a></li>
	        <li><a href="'.$_SERVER['PHP_SELF'].'?page='.$prevpage.'" title="Anterior"><span class="glyphicon glyphicon-backward"></span></a></li>';
	   
	    for($i= 1; $i<= $lastpage ; $i++)
            {
	      $html .= '
	        <li'.($page==$i?' class="active"':'').'><a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'" title="P&aacute;gina '.$i.'">'.$i.'</a></li>';
	    }
	    //Y SI LA ULTIMA PÁGINA ES MAYOR QUE LA ACTUAL MUESTRO EL BOTON NEXT Y EL LAST 
            if($lastpage >$page )
            {     
                $html .= '
	        <li><a href="'.$_SERVER['PHP_SELF'].'?page='.$nextpage.'" title="Pr&oacute;xima"><span class="glyphicon glyphicon-forward"></span></a></li>
	        <li><a href="'.$_SERVER['PHP_SELF'].'?page='.$lastpage.'" title="&Uacute;ltima"><span class="glyphicon glyphicon-fast-forward"></span></a></li>';
            }
	}
	else
        {
	   //EN CAMBIO SI ESTAMOS EN LA PÁGINA UNO DESHABILITO EL BOTON DE FIRST, PREVIUS Y MUESTRO LAS DEMÁS
	    for($i= 1; $i<= $lastpage ; $i++)
	    {
	      $html .= '
	        <li'.($page==$i?' class="active"':'').'><a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'" title="P&aacute;gina '.$i.'">'.$i.'</a></li>';
	    }
	    //Y SI LA ULTIMA PÁGINA ES MAYOR QUE LA ACTUAL MUESTRO EL BOTON NEXT Y EL LAST 
            if($lastpage >$page )
            {     
		$html .= '
	        <li><a href="'.$_SERVER['PHP_SELF'].'?page='.$nextpage.'" title="Pr&oacute;xima"><span class="glyphicon glyphicon-forward"></span></a></li>
	        <li><a href="'.$_SERVER['PHP_SELF'].'?page='.$lastpage.'" title="&Uacute;ltima"><span class="glyphicon glyphicon-fast-forward"></span></a></li>';
	    }
	}
	
	 $html .= '
	      </ul>
	    </div>';
    }
    return $html;
}

//Valida la permisologia a partir del ID del menu y el ID del nivel asociado al usuario a la SESSION
function check_access($menu = 0,$nivel = 0)
{
    $accesso = False;
    $consulta = "SELECT acceso FROM permisologias WHERE nivel_id = ".$nivel." and menu_id = ".$menu;
    $query = query($consulta);
    if(num_rows($query))
    {
	$resultado = fetch_array($query);
	$acceso = $resultado['acceso']? True : False;
    }
    return $acceso;
}

//Indica la extension de una cadena (php, html, etc)
function findexts($filename) 
{ 
    $filename = strtolower($filename) ; 
    $exts = split("[/\\.]", $filename) ; 
    $n = count($exts)-1; 
    $exts = $exts[$n]; 
    return $exts; 
} 

//Adapta el path especificado segun el sistema operativo (WIN ó LINUX)
function pth($path)
{
    $runningOnWindows = (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN');
    $slash = $runningOnWindows ? '\\' : '/';
    $wrongSlash = $runningOnWindows ? '/' : '\\' ;
    return (str_replace($wrongSlash, $slash, $path));
}

//Convierte fecha del formato europeo al formato postgres
function fecha_eu_pg($data)
{
    list($day, $month, $year) = explode("/", $data);
    return $year."-".$month."-".$day;
}

//Convierte fecha del formato postgres al formato europeo
function fecha_pg_eu($data)
{
    list($year, $month, $day) = explode("-", $data);
    return $day."/".$month."/".$year;
}

//Convierte fecha del formato postgres a texto
function fechaAletras($fecha)
{
    $f =explode('-',$fecha);
    $dia=$f[2];
    $mes=$f[1];
    $year=$f[0];

    switch($mes){
	case "1": $mes_nombre="Enero"; break;
	case "2": $mes_nombre="Febrero"; break;
	case "3": $mes_nombre="Marzo"; break;
	case "4": $mes_nombre="Abril"; break;
	case "5": $mes_nombre="Mayo"; break;
	case "6": $mes_nombre="Junio"; break;
	case "7": $mes_nombre="Julio"; break;
	case "8": $mes_nombre="Agosto"; break;
	case "9": $mes_nombre="Septiembre"; break;
	case "10": $mes_nombre="Octubre"; break;
	case "11": $mes_nombre="Noviembre"; break;
	case "12": $mes_nombre="Diciembre"; break;
    }
    return $dia." de ".$mes_nombre." de ".$year;
}   


function get_select_tag($name, $table, $field = "nombre", $selected = "", $where = "1", $class = "form-control input-sm")
{
    $consulta = "SELECT * FROM ".$table." WHERE ".$where;
    $query = query($consulta);
    $html = '
		<select id="'.$name.'" name="'.$name.'" class="'.$class.'">
			<option value="">-- Seleccione un elemento --</option>';
			while($resultado = fetch_array($query))
			{
			$html .= '
			<option value="'.$resultado['id'].'"'.($selected==(string)$resultado['id']? 'selected' : '').'>'.$resultado[$field].'</option>';
			
					}
    $html .= '
		</select>';
    
    return $html;
}
?>
