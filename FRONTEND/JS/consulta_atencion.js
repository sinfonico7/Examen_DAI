jQuery(document).ready(

function (){
      
 $("#buton_buscar").click(function () {
     $.getJSON("ConsultaAtencionJSON",{id:$("#id_atencion").val()},
     function(atencion){
               
               $("#columna_estado").html(atencion.idAtencion);
               $("#columna_fecha").html(atencion.fechaHora);
               $("#columna_id").html(atencion.pacienteID);
               $("#columna_medico").html(atencion.medicoID);
               $("#columna_paciente").html(atencion.estadoID);     
     });
});   
});