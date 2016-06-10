<?
    if (!empty($_POST))
    {  
        $control = get_referer_control();
        switch($control)
        {
            case 'usuarios':
                $update = "nombre='".$_POST['name']."', correo='".$_POST['email']."', usuario='".$_POST['username']."', clave='".$_POST['password']."'";
                $insert = "(nombre, correo, usuario, clave) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['username']."','".$_POST['password']."')";
                $unique_field = "usuario";
                $unique_value = $_POST['username'];
            break;
            case 'slideshow':
                $update = "encabezado='".$_POST['encabezado']."', titulo='".$_POST['titulo']."', parrafo='".$_POST['parrafo']."', imagen='".$_POST['imagen']."', miniatura='".$_POST['miniatura']."'";
                $insert = "(encabezado, titulo, parrafo, imagen, miniatura) VALUES ('".$_POST['encabezado']."','".$_POST['titulo']."','".$_POST['parrafo']."','".$_POST['imagen']."','".$_POST['miniatura']."')";
                $unique_field = "titulo";
                $unique_value = $_POST['titulo'];
            break;
            case 'servicios':
                $update = "encabezado='".$_POST['encabezado']."', titulo='".$_POST['titulo']."', parrafo='".$_POST['descripcion']."', imagen='".$_POST['imagen']."'";
                $insert = "(encabezado, titulo, parrafo, imagen) VALUES ('".$_POST['encabezado']."','".$_POST['titulo']."','".$_POST['descripcion']."','".$_POST['imagen']."')";
                $unique_field = "titulo";
                $unique_value = $_POST['titulo'];
            break;
            case 'clientes':
                $update = "nombre='".$_POST['nombre']."', descripcion='".$_POST['descripcion']."', link='".$_POST['link']."', imagen='".$_POST['imagen']."'";
                $insert = "(nombre, link, descripcion, imagen) VALUES ('".$_POST['nombre']."','".$_POST['link']."','".$_POST['descripcion']."','".$_POST['imagen']."')";
                $unique_field = "nombre";
                $unique_value = $_POST['nombre'];
            break;
            case 'blog':
                $update = "titulo='".$_POST['titulo']."', entrada='".$_POST['entrada']."', autor='".$_POST['autor']."', link='".$_POST['link']."', fecha='".$_POST['fecha']."'";
                $insert = "(titulo, entrada, autor, link, fecha, usuario_id) VALUES ('".$_POST['titulo']."','".$_POST['entrada']."','".$_POST['autor']."','".$_POST['link']."','".date("Y-m-d")."','".$_SESSION['uid']."')";
                $unique_field = "titulo";
                $unique_value = $_POST['titulo'];
            break;
            case 'descargas':
                $update = "nombre='".$_POST['nombre']."', descripcion='".$_POST['descripcion']."', link='".$_POST['link']."'";
                $insert = "(nombre, descripcion, link, fecha, usuario_id) VALUES ('".$_POST['nombre']."','".$_POST['descripcion']."','".$_POST['link']."','".date("Y-m-d")."','".$_SESSION['uid']."')";
                $unique_field = "nombre";
                $unique_value = $_POST['nombre'];
            break;
            
        }
        
        $action = get_referer_action();
        switch($action)
        {
            case 'agregar':
                $sql = "INSERT INTO ".$control.$insert;
            break;
            
            case 'editar':
                $sql = "UPDATE ".$control." SET ".$update." WHERE id=".$_POST['id'];
            break;
        }
        
        //Muestra la consulta cuando el modo debug esta activado
        if(get_setting('debug'))
        {	echo 'CONSULTA post.php = '.$sql.'<br>';}
        
        //Se valida que no ocurra duplicidad, especialmente para casos cuando el usuario presione F5 mientras se envia el POST
        $select = "SELECT * FROM ".$table." WHERE ".(!empty($unique_value)? $unique_field." LIKE '".$unique_value."'" : "id = 0");
        $query = query($select);
        
        //Si existe duplicidad, mostramos un mensaje de error y finalizamos el proceso de post
        if(num_rows($query) > 0 && $action == "agregar")
        {        
            echo mensaje("El campo '".$unique_field."' debe ser &uacute;nico, por favor NO PRESIONE F5 si es el caso ya que puede estar provocando reenv&iacute;o peligroso de informaci&oacute;n!");
            exit();
        }
        
        //Si no existe duplicidad procedemos a realizar el query
        else
        {    
            if($id = query($sql))
            {   
                echo mensaje("El proceso fue realizado exitosamente!","success");
                //~ echo mensaje("success","El registro ".(is_int($id)? $id : $_POST['id'])." fue ".$accion." existosamente!");
            }
            else
            {
                echo mensaje("Disculpe, no se pudo completar la operaci&oacute;n!");
            }
        }
        if(get_setting('debug'))
        {	print_r($_FILES); }
        if (!empty($_FILES))
        {   
            foreach($_FILES as $key => $values)
            {
               $target = SITE_ROOT."/resources/upload/".$control."/".$values['name'];
               move_uploaded_file($values['tmp_name'], $target);
            } 
        }
    }
?>
