jQuery(document).ready(

function (){
    $("#nombre_label").hide();
    $("#nombre").hide();
    $("#boton_agregar").hide();
    
 $("#boton_consulta").click(function () {
     $.post("ValidacionPersona.php",{rut:$("#rut").val()},
     function(respuesta){
        var resultado = respuesta; 
         
        if(resultado==='true'){
            if (confirm('Persona ya existe en nuestros registros,')) {
                return false;
            } 
            
        }else{
            if (confirm('Persona no existe en nuestros registros primero debe ser enrolado, desea hacerlo?')) {
             $("#nombre_label").show();
             $("#nombre").show();
             $("#boton_agregar").show();
             $("#boton_consulta").hide();
        }else{
            return false;
        }
        }
     });
});   
});

