$(document).ready(function(){

  $('#domaine_formation_offre').on('change',function(){
    var formationREF = $(this).val();
    
      
      $.ajax({
          url: "spec_for.php",
          method: "post",
          data: {
            formationREF: formationREF,
          },
          success: function (response) {
            
            $("#specialitelistoffre").html(response);

          },
        });
  




  });


  });