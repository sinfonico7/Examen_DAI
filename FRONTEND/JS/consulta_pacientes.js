jQuery(document).ready(

function (){
      
 $("#buton_buscar").click(function () {
     $.getJSON("ConsultaPacienteJSON.php",{id:$("#id_atencion").val()},
     function(atencion){
               
               $("#columna_estado").html(atencion.pacienteID);
               $("#columna_fecha").html(atencion.fechaNacimiento);
               $("#columna_id").html(atencion.sexo);
               $("#columna_medico").html(atencion.direccion);
               $("#columna_paciente").html(atencion.telefono); 
               $("#columna_persona").html(atencion.personaID); 
     });
});   
});