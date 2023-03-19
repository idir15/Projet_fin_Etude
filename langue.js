$(document).ready(function() {
    $('.ajouter_langue').click(function(e) {
        e.preventDefault();


        var nom_langue = $("select.nom_langue").children("option:selected").text();
        var niveau_langue = $("select.niveau_langue").children("option:selected").text();


        $.ajax({

            type: "POST",
            url: "langue.php",
            data: {
                "nom_langue": nom_langue,
                "niveau_langue": niveau_langue,
            },
            success: function(datacomp) {

                $('.afficherLangue').html(datacomp);
                $('#langue_Forme')[0].reset();

            }
        });
    });
});