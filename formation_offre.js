$(document).ready(function() {
    $('.ajouter_formation_offre').click(function(e) {
        if( document.getElementById("specialite_offre").value.length>=3
            
            ){

        e.preventDefault();
        
    var domaine_formation_offre =$("select.domaine_formation_offre").children("option:selected").text();

         
        var specialite_offre =$('#specialite_offre').val();



        $.ajax({
            type: "POST",
            url: "formation_offre.php",
            data: { "domaine_formation_offre":domaine_formation_offre, "specialite_offre": specialite_offre },
            success: function(data) {
                $('.resultt').html(data);
                $("#specialite_offre").val("");

               
            }
        });
    }});
});