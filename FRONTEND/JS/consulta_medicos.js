jQuery(document).ready(

function (){
      
 $("#buton_buscar").click(function () {
     $.getJSON("ConsultaMedicosJSON.php",{id:$("#id_atencion").val()},
     function(atencion){
               
               $("#columna_estado").html(atencion.idMedico);
               $("#columna_fecha").html(atencion.fechaContratacion);
               $("#columna_id").html(atencion.especialidad);
               $("#columna_medico").html(atencion.vlorConsulta);
               $("#columna_paciente").html(atencion.idPersona);     
     });
});   
});