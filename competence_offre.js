$(document).ready(function() {
    $('.ajouter_competence_offre').click(function(e) {

         if( document.getElementById("nom_competence_offre").value.length>=3 
            ){
        e.preventDefault();
        var nom_competence_offre = $('#nom_competence_offre').val();


        $.ajax({
            type: "POST",
            url: "competence_offre.php",
            data: { "nom_competence_offre": nom_competence_offre },
            success: function(data) {
                $('.competence_offre').html(data);
                $('#competence_offre_form')[0].reset();
                
            }
        });
    }});
});