$(document).ready(function() {
    $('.ajouterinf').click(function(e) {
        if ((document.getElementById("first_name").value.length>=3 && 
                  document.getElementById("first_name").value.match(/^[a-zA-Zéçàè]+[ \-']?[[a-zA-Zéçàè]+[ \-']?]*[a-zA-Zéçàè]+[ ]?$/) ) &&
                  (document.getElementById("last_name").value.length>=3 && 
                  document.getElementById("last_name").value.match(/^[a-zA-Zéçàè]+[ \-']?[[a-zA-Zéçàè]+[ \-']?]*[a-zA-Zéçàè]+[ ]?$/) ) &&
                  (document.getElementById("adresse").value.length>=4) &&
                  (document.getElementById("wilaya").value.length>0) &&
                  (document.getElementById("daira").value.length>0) &&
                  (document.getElementById("phone").value.length==10 && document.getElementById("phone").value.match("^[0-9]+$"))){
                    
                
        e.preventDefault();

        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var sexe = $('input[type=radio]:checked').val();
        var date_naissance = $('#date_naissance').val();
        var adresse = $('#adresse').val();
        
        var wilaya = $('#wilaya').val();
        var daira=$("select.daira").children("option:selected").text();
         
        
        var phone = $('#phone').val();
        $.ajax({
            type: "POST",
            url: "information.php",
            data: {
                "first_name": first_name,
                "last_name": last_name,
                "sexe": sexe,
                "date_naissance": date_naissance,
                "adresse": adresse,
               
                "wilaya": wilaya,
                "daira": daira,
                
                "phone": phone
            },
            success: function(data) {
                $('.result').html(data);
                $('#contactform')[0].reset();
            }
        });
   } });
});