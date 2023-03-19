$(document).ready(function() {
    $('.ajouter_langue_offre').click(function(e) {
        e.preventDefault();
        var nom_langue_offre = $("select.nom_langue_offre").children("option:selected").text();
        var niveau_langue_offre = $("select.niveau_langue_offre").children("option:selected").text();


        


        $.ajax({
            type: "POST",
            url: "langue_offre.php",
            data: { "nom_langue_offre": nom_langue_offre, "niveau_langue_offre": niveau_langue_offre },
            success: function(data) {
                $('.result_langue').html(data);
                $('#langue_offre_form')[0].reset();
            }
        });
    });
});