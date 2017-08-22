 $("document").ready(function(){
        $("#tipoactividad").load("con_act_options.php");

        $("#tipoactividad").change(function(){
          var id_tipo_actividad = $("#tipoactividad").val();
          $.get("con_act_options_2.php",{enviar:id_tipo_actividad})
          .done(function(data){
            $("#actividad").html(data);
          })
        })
      })