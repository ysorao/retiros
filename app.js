function mejop(){
    if (document.getElementById('oportunidad').checked){
        preg13.classList.remove("d-none");
    }else{
        preg13.classList.add("d-none");
        porqueOferta.classList.add("d-none");
    }
}


function remun(){
    if (document.getElementById('salario').checked){
        preg14.classList.remove("d-none");
    }else{
        preg14.classList.add("d-none");
        porqueOferta.classList.add("d-none");
    }
}


function ofert(){

    var oferta = document.getElementById('mejorOferta').value;

    if(oferta == 'Otra organización le ofreció una mejor oferta laboral que no había solicitado'){
        porqueOferta.classList.remove("d-none");
        document.getElementById('dinamPreg').innerHTML="¿Porque fue atractiva la oferta?";
    }else if(oferta=='¿Fue el resultado de una búsqueda activa?'){
        porqueOferta.classList.remove("d-none");
        document.getElementById('dinamPreg').innerHTML="Especifique el motivo que lo impulso a realizar la búsqueda";
    }else if(oferta=='Otro'){
        porqueOferta.classList.remove("d-none");
        document.getElementById('dinamPreg').innerHTML="Cual?";
    }else{
        porqueOferta.classList.add("d-none");
    }

}

