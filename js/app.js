
$(function() {

    $('#result').hide();

   // ALMACENAR DATOS
   $('#app-form').submit(function(e) {
       const posData = {
        nombre: $('#nombre').val(),
        documento: $('#documento').val(),
        cargo: $('#cargo').val(),
        sede: $('#sede').val(),
        area: $('#area').val(),
        estadoCivil: $('#estadoCivil').val(),
        sexo: $('#sexo').val(),
        nivel: $('#nivel').val(),
        jefe: $('#jefe').val(),
        ingreso: $('#ingreso').val(),
        retiro: $('#retiro').val(),
        independizarse: $('#independizarse').val(),
        motivosP: $('#motivosP').val(),
        motivacion: $('#motivacion').val(),
        horario: $('#horario').val(),
        cambioCiudad: $('#cambioCiudad').val(),
        carga: $('#carga').val(),
        cambioResidencia: $('#cambioResidencia').val(),
        relCompaneros: $('#relCompaneros').val(),
        relJefe: $('#relJefe').val(),
        relCliente: $('#relCliente').val(),
        oportunidad: $('#oportunidad').val(),
        ambFisico: $('#ambFisico').val(),
        proFamiliares: $('#proFamiliares').val(),
        estudios: $('#estudios').val(),
        expectativas: $('#expectativas').val(),
        salario: $('#salario').val(),
        salud: $('#salud').val(),
        otro: $('#otro').val(),
        cual: $('#cual').val(),
        mejorOferta: $('#mejorOferta').val(),
        porqueOferta: $('#porqueOferta').val(),
        ofertaBusqueda: $('#ofertaBusqueda').val(),
        motivoBusqueda: $('#motivoBusqueda').val(),
        ofertaOtro: $('#ofertaOtro').val(),
        ofertaCual: $('#ofertaCual').val(),
        salarioSuperior: $('#salarioSuperior').val(),
        salarioIgual: $('#salarioIgual').val(),
        salarioMenor: $('#salarioMenor').val(),
        satisfecho: $('#satisfecho').val(),
        factPositivos: $('#factPositivos').val(),
        factNegativos: $('#factNegativos').val(),
        crecimiento: $('#crecimiento').val(),
        exequial: $('#exequial').val(),
        areaProtegida: $('#areaProtegida').val(),
        seguro: $('#seguro').val(),
        matrimonio: $('#matrimonio').val(),
        grado: $('#grado').val(),
        voluntariado: $('#voluntariado').val(),
        diaHijos: $('#diaHijos').val(),
        reconocimiento: $('#reconocimiento').val(),
        cumpleanos: $('#cumpleanos').val(),
        nacimiento: $('#nacimiento').val(),
        asesoria: $('#asesoria').val(),
        gimnasio: $('#gimnasio').val(),
        vestir: $('#vestir').val(),
        diaCumpleanos: $('#diaCumpleanos').val(),
        diligencias: $('#diligencias').val(),
        nacimientoPadre: $('#nacimientoPadre').val(),
        universidades: $('#universidades').val(),
        concesionarios: $('#concesionarios').val(),
        opinion: $('#opinion').val(),
        interpersonales: $('#interpersonales').val(),
        reconocimientoJefe: $('#reconocimientoJefe').val(),
        ambiente: $('#ambiente').val(),
        capacitaciones: $('#capacitaciones').val(),
        bienestar: $('#bienestar').val(),
        fisicas: $('#fisicas').val(),
        recomendar: $('#recomendar').val(),
        porque: $('#porque').val(),
        sugerenciaFin: $('#sugerenciaFin').val(),
        
       };
       
       $.post('app-add.php', posData, function(response) {
        $('#exampleModal').modal('show');
           $('#app-form').trigger('reset');
           $('#result').html(response);
           $('#result').show();
       });
       e.preventDefault();
   });
});



function nombrefirma(){
    var nom = document.getElementById('nombre').value;
    var ced = document.getElementById('cedula').value;

    document.getElementById("firma").innerHTML = nom;
    document.getElementById("documento").innerHTML = ced;

}

function fecha(){
    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        var f=new Date();
        var fec = (f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
        document.getElementById("fecha").innerHTML = fec;

}