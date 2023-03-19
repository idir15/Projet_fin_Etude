$(document).ready(function() {
    $('.ajouter_comp').click(function(e) {

          if( document.getElementById("nom_competence").value.length>=3 
            ){
        e.preventDefault();
        var nom_competence = $('#nom_competence').val();
        $.ajax({

            type: "POST",
            url: "competence.php",
            data: {
                "nom_competence": nom_competence,
            },
            success: function(datacomp) {

                $('.resCompt').html(datacomp);
                $('#autre_competenceForm')[0].reset();
               

            }
        });
    }
});
});