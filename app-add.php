<?php

include_once('conexion.php');


$nombre=$_POST['nombre'];
$documento =$_POST['documento'];
$cargo =$_POST['cargo'];
$sede =$_POST['sede'];
$area =$_POST['area'];
$estadoCivil =$_POST['estadoCivil'];
$sexo =$_POST['sexo'];
$nivelAcademico =$_POST['nivelAcademico'];
$jefeInmediato =$_POST['jefeInmediato'];
$fechaIngreso =$_POST['fechaIngreso'];
$fechaRetiro =$_POST['fechaRetiro'];
$independizarse =$_POST['independizarse'];
$motivosPersonales =$_POST['motivosPersonales'];
$faltaMotivacion =$_POST['faltaMotivacion'];
$horarioLaboral =$_POST['horarioLaboral'];
$cambioCiudad =$_POST['cambioCiudad'];
$cargaLaboral =$_POST['cargaLaboral'];
$cambioResidencia =$_POST['cambioResidencia'];
$relInterCompaneros =$_POST['relInterCompaneros'];
$relInterJefe =$_POST['relInterJefe'];
$relInterCliente =$_POST['relInterCliente'];
$oportunidad =$_POST['oportunidad'];
$ambienteFisico =$_POST['ambienteFisico'];
$ProblFamiliares =$_POST['problFamiliares'];
$estudios =$_POST['estudios'];
$noCumpleExpecta =$_POST['noCumpleExpecta'];
$salario =$_POST['salario'];
$problemSalud =$_POST['problemSalud'];
$otro =$_POST['otro'];
$cual =$_POST['cual'];
$mejorOferta =$_POST['mejorOferta'];
$porqueOferta =$_POST['porqueOferta'];
$rtaSalario =$_POST['rtaSalario'];
$satisfecho =$_POST['satisfecho'];
$factmejora =$_POST['factmejora'];
$aspecPos =$_POST['aspecPos'];
$opCrecLaboral =$_POST['opCrecLaboral'];
$argCrecLaboral =$_POST['argCrecLaboral'];
$seguroExequial =$_POST['seguroExequial'];
$areaProtegida =$_POST['areaProtegida'];
$seguroVida =$_POST['seguroVida'];
$perMatrimonio =$_POST['perMatrimonio'];
$perGrado =$_POST['perGrado'];
$voluntariado =$_POST['voluntariado'];
$diaHijos =$_POST['diaHijos'];
$reconMensual =$_POST['reconMensual'];
$detalleCumple =$_POST['detalleCumple'];
$perMadreHijo =$_POST['perMadreHijo'];
$asesLegalPsico =$_POST['asesLegalPsico'];
$gimnasio =$_POST['gimnasio'];
$vestuario =$_POST['vestuario'];
$diaCumple =$_POST['diaCumple'];
$perDilPerso =$_POST['perDilPerso'];
$perPadreHijo =$_POST['perPadreHijo'];
$convUniver =$_POST['convUniver'];
$concesionarios =$_POST['concesionarios'];
$opinBenefi =$_POST['opinBenefi'];
$relJefeColab =$_POST['relJefeColab'];
$reconJefe =$_POST['reconJefe'];
$relCompaneros =$_POST['relCompaneros'];
$capacitaciones =$_POST['capacitaciones'];
$argCapacit =$_POST['argCapacit'];
$actBienestar =$_POST['actBienestar'];
$argBienestar =$_POST['argBienestar'];
$condFisicas =$_POST['condFisicas'];
$recomienda =$_POST['recomienda'];
$porque =$_POST['porque'];
$observacion =$_POST['observacion'];
$fechaDil = date('Y-m-d H:i');
$estado = 'diligenciado';








$sql = sqlsrv_query($conexion,
  "INSERT INTO retiro_encuesta
(
nombre,
documento,
cargo,
sede,
area,
estadoCivil,
sexo,
nivelAcademico,
JefeInmediato,
fechaIngreso,
fechaRetiro,
independizarse,
motivosPersonales,
faltaMovivacion,
horarioLaboral,
cambioCiudad,
cargaLaboral,
cambioResidencia,
relInterCompaneros,
renInterJefe,
relInterCliente,
oportunidad,
ambienteFisico,
ProblFamiliares,
estudios,
noCumpleExpecta,
salario,
problemSalud,
otro,
cual,
rtaMejOpLab,
porqueOferta,
rtaSalario,
satisfecho,
factmejora,
aspecPos,
opCrecLaboral,
argCrecLaboral,
seguroExequial,
areaProtegida,
seguroVida,
perMatrimonio,
PerGrado,
voluntariado,
diaHijos,
ReconMensual,
detalleCumple,
perMadreHijo,
asesLegalPsico,
gimnasio,
vestuario,
diaCumple,
perDilPerso,
perPadreHijo,
convUniver,
concesionarios,
opinBenefi,
reljefeColab,
reconJefe,
relCompaneros,
capacitaciones,
argCapacit,
actBienestar,
argBienestar,
condFisicas,
recomienda,
porque,
observacion,
fechaDil,
estado
) 
           VALUES
(
'$nombre',
'$documento',
'$cargo',
'$sede',
'$area',
'$estadoCivil',
'$sexo',
'$nivelAcademico',
'$jefeInmediato',
'$fechaIngreso',
'$fechaRetiro',
'$independizarse',
'$motivosPersonales',
'$faltaMotivacion',
'$horarioLaboral',
'$cambioCiudad',
'$cargaLaboral',
'$cambioResidencia',
'$relInterCompaneros',
'$relInterJefe',
'$relInterCliente',
'$oportunidad',
'$ambienteFisico',
'$ProblFamiliares',
'$estudios',
'$noCumpleExpecta',
'$salario',
'$problemSalud',
'$otro',
'$cual',
'$mejorOferta',
'$porqueOferta',
'$rtaSalario',
'$satisfecho',
'$factmejora',
'$aspecPos',
'$opCrecLaboral',
'$argCrecLaboral',
'$seguroExequial',
'$areaProtegida',
'$seguroVida',
'$perMatrimonio',
'$perGrado',
'$voluntariado',
'$diaHijos',
'$reconMensual',
'$detalleCumple',
'$perMadreHijo',
'$asesLegalPsico',
'$gimnasio',
'$vestuario',
'$diaCumple',
'$perDilPerso',
'$perPadreHijo',
'$convUniver',
'$concesionarios',
'$opinBenefi',
'$relJefeColab',
'$reconJefe',
'$relCompaneros',
'$capacitaciones',
'$argCapacit',
'$actBienestar',
'$argBienestar',
'$condFisicas',
'$recomienda',
'$porque',
'$observacion',
'$fechaDil',
'$estado'
)");

?>