<?php
    include ("conectionBD.php");

    $Tipo_Tercero = $_POST['Tipo_Tercero'];
    $Naturaleza = $_POST['Naturaleza'];
    $TipoDocumento =  $_POST['TipoDocumento'];
    $NumeroDocumento = $_POST['NumeroDocumento'];
    $dv = $_POST['dv'];
    $RazonSocial = $_POST['RazonSocial'];
    $Primer_Apellido = $_POST['Primer_Apellido'];
    $Segundo_Apellido = $_POST['Segundo_Apellido'];
    $Primer_Nombre = $_POST['Primer_Nombre'];
    $Segundo_Nombre = $_POST['Segundo_Nombre'];
    $Grupo = $_POST['Grupo'];
    $Direccion = $_POST['Direccion'];
    $Departamento = $_POST['Departamento'];
    $Municipio = $_POST['Municipio'];
    $Email = $_POST ['Email'];
    $Telefono_Fijo1 = $_POST['Telefono_Fijo1'];
    $Telefono_Fijo2 = $_POST['Telefono_Fijo2'];
    $Telefono_Movil1 = $_POST['Telefono_Movil1'];
    $Telefono_Movil2 = $_POST['Telefono_Movil2'];
    $Fecha_Nacimiento = $_POST['Fecha_Nacimiento'];
    $Observaciones = $_POST['Observaciones'];

    $query = "INSERT INTO tercero(Tipo_Tercero, Naturaleza, TipoDocumento, NumeroDocumento, dv, RazonSocial, Primer_Apellido, Segundo_Apellido, Primer_Nombre, Segundo_Nombre, Grupo, Direccion, Departamento, Municipio, Email, Telefono_Fijo1, Telefono_Fijo2, Telefono_Movil1, Telefono_Movil2, Fecha_Nacimiento, Observaciones) VALUES('$Tipo_Tercero', '$Naturaleza', '$TipoDocumento', '$NumeroDocumento', '$dv', '$RazonSocial', '$Primer_Apellido', '$Segundo_Apellido', '$Primer_Nombre',  '$Segundo_Nombre', '$Grupo', '$Direccion', '$Departamento', '$Municipio', '$Email', '$Telefono_Fijo1', '$Telefono_Fijo2', '$Telefono_Movil1', '$Telefono_Movil2', '$Fecha_Nacimiento', '$Observaciones')";
    $resultado = $conection->query($query);

    if($resultado){
        echo "Guardar Exitoso";
        header ("location: Terceros.php"); 
    } else {
        echo "No se ha guardado Correctamente";
    }
?>