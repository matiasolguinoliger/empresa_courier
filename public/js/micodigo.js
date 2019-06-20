function validarCotizacion()
{
    //setteo msg
    document.getElementById("msgNombre").innerHTML = "";
    //var nombre = document.forms["formCotizacion"]["nombre"].value;
    //validar datos de texto;
    var nombre = document.getElementById("nombre").value
    var email = document.getElementById("email").value;
    var categoria = document.getElementById("categoria").value;
    //var prioridad = document.getElementByname("prioridad").value;
    //radio button prioridad
    
    /*var baja = document.getElementById("baja").checked;
    var normal = document.getElementById("normal").checked;
    var alta = document.getElementById("alta").checked;*/
    
    //textArea
    
    var humano = document.getElementById("humano").checked;
    var mensaje = document.getElementById("mensaje").value;
    
    if ( nombre === null || nombre.length === 0 || /^\s+$/.test(nombre) ) {
        document.getElementById("msgNombre").innerHTML = "ingresar nombre";
        document.getElementById("msgNombre").style.color = "red";
        document.getElementById("nombre").style.borderColor = "red";
        //window.location.replace("cotizacion.html");
        return false;
    }
    else if (email === null || email.length === 0 || /^\s+$/.test(email)) {
        document.getElementById("msgEmail").innerHTML = "mail invalido";
        document.getElementById("msgEmail").style.color = "red";
        document.getElementById("email").style.borderColor = "red";
        //window.location.replace("cotizacion.html");
        return false;
    }
    else if( categoria === null || categoria === "" ) {
        document.getElementById("msgCategoria").innerHTML = "seleccion una categoria";
        document.getElementById("msgCategoria").style.color = "red";
        document.getElementById("categoria").style.borderColor = "red";
    return false;
    }
    /*else if((baja=="")&&(normal=="")&&(alta==""))
    {
        document.getElementById("msgPrioridad").innerHTML = "seleccione prioridad";
        document.getElementById("msgPrioridad").style.color = "red";
        //document.getElementById("normal").style.borderColor = "red";
        return false;
    }*/
    else if(humano == "")
    {
        document.getElementById("msgHumano").innerHTML = "seleccione prioridad";
        document.getElementById("msgHumano").style.color = "red";
        return false
    }
    else if( mensaje === null || mensaje === "" ) {
        document.getElementById("msgMensaje").innerHTML = "escriba un mensaje";
        document.getElementById("msgMensaje").style.color = "red";
        document.getElementById("mensaje").style.borderColor = "red";
    return false;
    }
    else {return true;}
}