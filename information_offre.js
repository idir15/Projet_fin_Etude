$(document).ready(function() {
   
    $('.info_offre').click(function(e) {
        if( document.getElementById("nom_offre").value.length>=3 &&
            document.getElementById("detail_offre").value.length>=3 &&
            document.getElementById("adresse_offre").value.length>=3

            ){

        e.preventDefault();
       
        var nom_offre = $('#nom_offre').val();
        var detail_offre = $('#detail_offre').val();
        var daira_offre=$("select.daira_offre").children("option:selected").text();
        var date_fin_offre = $('#date_fin_offre').val();
        var type_de_travail = $('select.type_offre').children("option:selected").text();
        var adresse_offre = $('#adresse_offre').val();
              

        $.ajax({
            type: "POST",
            url: "information_offre.php",
            data: {
                "nom_offre": nom_offre,
                "detail_offre": detail_offre,
                "daira_offre": daira_offre,
                "date_fin_offre": date_fin_offre,
                "type_de_travail": type_de_travail,
                "adresse_offre": adresse_offre
            },
            success: function(data) {
                $('.result').html(data);
                $('#info_offre_form')[0].reset();

            }
        });
    }});
});