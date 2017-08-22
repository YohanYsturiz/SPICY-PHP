 $("document").ready(function(){
        $("#linea_investigacion").load("con_act_optionseve.php");

        $("#linea_investigacion").change(function(){
          var id_linea_investigacion = $("#linea_investigacion").val();
          $.get("con_act_options_2eve.php",{enviar:id_linea_investigacion})
          .done(function(data){
            $("#lider").html(data);
          })
        })
      })