<?php
	//Inicio la sesión
    session_start();
    include_once "../includes/common.php";
    $data = $_POST;
    $data['check'] = 2;
    $data['consulta'] = "SELECT * FROM usuarios WHERE usuario='".$data['usuario']."' and clave='".$data['clave']."'";
    $resultado = query($data['consulta']);
    if(num_rows($resultado)>0)
    {
        $usuario = fetch_array($resultado);
        $data['check'] = (int) $usuario['activo'];
        if($data['check']==1)
        {   
            $_SESSION['uid'] = $usuario['id'];
            $_SESSION['usuario'] = $usuario['usuario'];
            $_SESSION['nombre'] = $usuario['nombre'];
        }
    }

echo json_encode($data) ?>
