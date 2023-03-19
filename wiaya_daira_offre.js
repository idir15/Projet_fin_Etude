$(document).ready(function(){

  $('#wilaya_offre').on('change',function(){
    var wilayaID = $(this).val();
    
      
      $.ajax({
          url: "daira.php",
          method: "post",
          data: {
            wilayaaa: wilayaID,
          },
          success: function (response) {
            
            $("#daira_offre").html(response);

          },
        });
  




  });


  });