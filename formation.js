$(document).ready(function() {
    $('.formation_ajouter').click(function(e) {
          if( document.getElementById("specialite").value.length>=3 &&
            document.getElementById("etablissement").value.length>=3
            ){
        e.preventDefault();

        var domaine_formation =$("select.domaine_formation").children("option:selected").text();
        var specialite = $('#specialite').val();
        var etablissement = $('#etablissement').val();
        var date_d_f = $('#date_d_f').val();
        var date_f_f = $('#date_f_f').val();

        $.ajax({
            type: "POST",
            url: "formationForm.php",
            data: {
                "domaine_formation": domaine_formation,
                "specialite": specialite,
                "etablissement": etablissement,
                "date_d_f": date_d_f,
                "date_f_f": date_f_f
            },
            success: function(data) {

                $('.resF').html(data);
            
               $("#specialite").val("");
               $("#etablissement").val("");
              

            }


        });

    }
});
});