$(document).ready(function(){

  $('#wilaya').on('change',function(){
    var wilayaID = $(this).val();
    
      
      $.ajax({
          url: "daira.php",
          method: "post",
          data: {
            wilayaaa: wilayaID,
          },
          success: function (response) {
            alert(wilayaID);
            $("#daira").html(response);

          },
        });
  




  });


  });