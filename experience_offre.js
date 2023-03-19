$(document).ready(function() {
    $('.ajouter_experience_offre').click(function(e) {
        if( document.getElementById("domaine_experience_offre").value.length>=3 
            ){
        e.preventDefault();
        var domaine_experience_offre = $('#domaine_experience_offre').val();
        var nombre_annee = $('#nombre_annee').val();


        $.ajax({
            type: "POST",
            url: "experience_professionnele_offre.php",
            data: { "domaine_experience_offre": domaine_experience_offre, "nombre_annee": nombre_annee },
            success: function(data) {
                $('.resultExp').html(data);
                $('#experience_offre_form')[0].reset();
                
            }
        });
    }});
});