<?php

include_once('conexion.php');

if($_POST){

    $nombre = $_POST['nombre'];
    $documento = $_POST['documento'];
    $cargo = $_POST['cargo'];
    $sede = $_POST['sede'];
    $area = $_POST['area'];
    $estadoCivil = $_POST['estadoCivil'];
    $sexo = $_POST['sexo'];
    $nivel = $_POST['nivel'];
    $jefe = $_POST['jefe'];
    $ingreso = $_POST['ingreso'];
    $retiro = $_POST['retiro'];
    $independizarse = $_POST['independizarse'];
    $motivosP = $_POST['motivosP'];
    $motivacion = $_POST['motivacion'];
    $horario = $_POST['horario'];
    $cambioCiudad = $_POST['cambioCiudad'];
    $carga = $_POST['carga'];
    $cambioResidencia = $_POST['cambioResidencia'];
    $relCompaneros = $_POST['relCompaneros'];
    $relJefe = $_POST['relJefe'];
    $relCliente = $_POST['relCliente'];
    $oportunidad = $_POST['oportunidad'];
    $ambFisico = $_POST['ambFisico'];
    $proFamiliares = $_POST['proFamiliares'];
    $estudios = $_POST['estudios'];
    $expectativas = $_POST['expectativas'];
    $salario = $_POST['salario'];
    $salud = $_POST['salud'];
    $otro = $_POST['otro'];
    $cual = $_POST['cual'];
    $mejorOferta = $_POST['mejorOferta'];
    $porqueOferta = $_POST['porqueOferta'];
    $ofertaBusqueda = $_POST['ofertaBusqueda'];
    $motivoBusqueda = $_POST['motivoBusqueda'];
    $ofertaOtro = $_POST['ofertaOtro'];
    $ofertaCual = $_POST['ofertaCual'];
    $salarioProp = $_POST['salarioprop'];
    $satisfecho = $_POST['satisfecho'];
    $factPositivos = $_POST['factPositivos'];
    $factNegativos = $_POST['factNegativos'];
    $crecimiento = $_POST['crecimiento'];
    $exequial = $_POST['exequial'];
    $areaProtegida = $_POST['areaProtegida'];
    $seguro = $_POST['seguro'];
    $matrimonio = $_POST['matrimonio'];
    $grado = $_POST['grado'];
    $voluntariado = $_POST['voluntariado'];
    $diaHijos = $_POST['diaHijos'];
    $reconocimiento = $_POST['reconocimiento'];
    $cumpleanos = $_POST['cumpleanos'];
    $nacimiento = $_POST['nacimiento'];
    $asesoria = $_POST['asesoria'];
    $gimnasio = $_POST['gimnasio'];
    $vestir = $_POST['vestir'];
    $diaCumpleanos = $_POST['diaCumpleanos'];
    $diligencias = $_POST['diligencias'];
    $nacimientoPadre = $_POST['nacimientoPadre'];
    $universidades = $_POST['universidades'];
    $concesionarios = $_POST['concesionarios'];
    $opinion = $_POST['opinion'];
    $interpersonales = $_POST['interpersonales'];
    $reconocimientoJefe = $_POST['reconocimientoJefe'];
    $ambiente = $_POST['ambiente'];
    $capacitaciones = $_POST['capacitaciones'];
    $bienestar = $_POST['bienestar'];
    $fisicas = $_POST['fisicas'];
    $recomendar = $_POST['recomendar'];
    $porque = $_POST['porque'];
    $sugerenciaFin = $_POST['sugerenciaFin'];
    $fecha = date('Y-m-d H:i:s');

}





echo $nombre.'<br>'.
$documento.'<br>'.
$cargo.'<br>'.
$sede.'<br>'.
$area.'<br>'.
$estadoCivil.'<br>'.
$sexo.'<br>'.
$nivel.'<br>'.
$jefe.'<br>'.
$ingreso.'<br>'.
$retiro.'<br>'.
$independizarse.'<br>'.
$motivosP.'<br>'.
$motivacion.'<br>'.
$horario.'<br>'.
$cambioCiudad.'<br>'.
$carga.'<br>'.
$cambioResidencia.'<br>'.
$relCompaneros.'<br>'.
$relJefe.'<br>'.
$relCliente.'<br>'.
$oportunidad.'<br>'.
$ambFisico.'<br>'.
$proFamiliares.'<br>'.
$estudios.'<br>'.
$expectativas.'<br>'.
$salario.'<br>'.
$salud.'<br>'.
$otro.'<br>'.
$cual.'<br>'.
$mejorOferta.'<br>'.
$porqueOferta.'<br>'.
$ofertaBusqueda.'<br>'.
$motivoBusqueda.'<br>'.
$ofertaOtro.'<br>'.
$ofertaCual.'<br>'.
$salarioProp.'<br>'.
$satisfecho.'<br>'.
$factPositivos.'<br>'.
$factNegativos.'<br>'.
$crecimiento.'<br>'.
$exequial.'<br>'.
$areaProtegida.'<br>'.
$seguro.'<br>'.
$matrimonio.'<br>'.
$grado.'<br>'.
$voluntariado.'<br>'.
$diaHijos.'<br>'.
$reconocimiento.'<br>'.
$cumpleanos.'<br>'.
$nacimiento.'<br>'.
$asesoria.'<br>'.
$gimnasio.'<br>'.
$vestir.'<br>'.
$diaCumpleanos.'<br>'.
$diligencias.'<br>'.
$nacimientoPadre.'<br>'.
$universidades.'<br>'.
$concesionarios.'<br>'.
$opinion.'<br>'.
$interpersonales.'<br>'.
$reconocimientoJefe.'<br>'.
$ambiente.'<br>'.
$capacitaciones.'<br>'.
$bienestar.'<br>'.
$fisicas.'<br>'.
$recomendar.'<br>'.
$porque.'<br>'.
$sugerenciaFin.'<br>';

?>