function AfficherListeDocuments2(){

    $.ajax({
            type:"GET",
            url:"../php/listedocs2.php",
            success:function(data){
            var lesSecteurs = $.parseJSON(data); 
            console.log(lesSecteurs);
            var chaine = "<?php mb_internal_encoding('UTF-8'); ?><table border =2 style='background-color : whitesmoke; margin : auto;'> <tr> <th>Nom</th><th>Type de fichier</th><th>Contenue</th><th>Date d'ajout</th></tr>";

            for(var Secteurs in lesSecteurs){


                chaine = chaine +	" <tr><th>"+lesSecteurs[Secteurs].file+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].type+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].doc+"</th>";
                chaine = chaine +   " <th>"+lesSecteurs[Secteurs].date_ajout+"</th>";
                chaine = chaine +   " <th>"+"<a href=../uploads/"+lesSecteurs[Secteurs].file+">Voir</a></th></tr><br>";



            }


            chaine = chaine + "</table><br><br>";



            $("#col").append(chaine);


        },
        error : function()
        {
            alert('Erreur du script PHP');
        }
    });		

}