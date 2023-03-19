$(document).ready(function() {
    $('.ajouter_experience').click(function(e) {
         if( document.getElementById("poste_de_travail").value.length>=3 &&
            document.getElementById("entreprise").value.length>=3
            ){
        e.preventDefault();
        var poste_de_travail = $('#poste_de_travail').val();
        var entreprise = $('#entreprise').val();
        var date_d_e = $('#date_d_e').val();
        var date_f_e = $('#date_f_e').val();
        $.ajax({

            type: "POST",
            url: "experience_professionnele.php",
            data: {
                "poste_de_travail": poste_de_travail,
                "entreprise": entreprise,
                "date_d_e": date_d_e,
                "date_f_e": date_f_e
            },
            success: function(data) {

                $('.resEXP').html(data);
                $('#experience_form')[0].reset();

            }
        });
    }  
});
});