function AfficherListeOffres()
{
    $.ajax({
        type:"GET",
        url:"php/listeOffre.php",
        success:function(data)
        {

            // Version 2
            var lesSecteurs = $.parseJSON(data);
            console.log(lesSecteurs);
            var chaine = "<table border =2> <tr class='tabhead'><th></th> <th>TITRE</th><th>FILIERE</th><th>Jour publication</th> <th>VILLE</th></tr>";

            for(var Secteurs in lesSecteurs)
            {

                chaine = chaine +   " <form action='../php/testpdf.php' method='get'><tr><th class='headplot'><input type='hidden' name='id' value="+lesSecteurs[Secteurs].id+"></input></th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].titre+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].filiere+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].date_ajout+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].ville+"</th>";
                chaine = chaine +	" <th>"+"<input type='submit' value='Voir'/></th></form>";
                chaine = chaine +	" <th>"+"<form action='../php/phpnet.php' method='get'><input type='hidden' name='id' value="+lesSecteurs[Secteurs].id+"><input type='submit' value='Postuler'/></form></th></tr>";
                //                chaine = chaine +   " <th>"+"<a href=../php/testpdf.php?"+lesSecteurs[Secteurs].file+">Voir</a></th></tr>";


            }


            chaine = chaine + "</table>";



            $("#offre").html("");
            $("#offre").append(chaine);


        },
        error : function()
        {
            alert('Erreur du script PHP');
        }
    });		
}



function AfficherListeCandidature()
{
    $.ajax({
        type:"GET",
        url:"../php/listecandidature.php",
        success:function(data)
        {

            // Version 2
            var lesSecteurs = $.parseJSON(data);
            console.log(lesSecteurs);
            var chaine = "<table border =2 style='background-color : whitesmoke; border-collapse: collapse; border-bottom-color: darkgray; border-top: none; border-right: none; border-left: none;'> <tr><th></th> <th>TITRE</th><th>FILIERE</th><th>Jour publication</th> <th>VILLE</th></tr>";

            for(var Secteurs in lesSecteurs)
            {

                chaine = chaine +   " <form action='../php/testpdf.php' method='get'><tr><th><input type='hidden' name='id' value="+lesSecteurs[Secteurs].id+"></input></th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].titre+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].filiere+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].date_ajout+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].ville+"</th>";
                chaine = chaine +	" <th>"+"<input type='submit' value='Voir'/></th></form>";
                chaine = chaine +	" <th>"+"<form action='../php/phpnet.php' method='get'><input type='hidden' name='id' value="+lesSecteurs[Secteurs].id+"><input type='submit' value='Postuler'/></form></th></tr>";
                //                chaine = chaine +   " <th>"+"<a href=../php/testpdf.php?"+lesSecteurs[Secteurs].file+">Voir</a></th></tr>";


            }


            chaine = chaine + "</table>";



            $("#offre").html("");
            $("#offre").append(chaine);


        },
        error : function()
        {
            alert('Erreur du script PHP');
        }
    });		
}


// Cette fonction affiche la liste des secteurs de notre supermarché

function AfficherListeJeunes()
{
    $.ajax({
        type:"GET",
        url:"../php/listejeunes.php",
        success:function(data)
        {
            // Version 2
            var lesSecteurs = $.parseJSON(data);
            console.log(lesSecteurs);
            var chaine = "<table border =2 style='background-color : whitesmoke;'> <tr> <th>ID</th><th>NOM</th>  <th>PRENOM</th> <th>SECTION</th><th>ANNEE</th> </tr>";
//            for (var i=0; i < 4; i++) {
            for(var Secteurs in lesSecteurs)
            {
                

                chaine = chaine +	" <tr><th>"+lesSecteurs[Secteurs].id+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].nom+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].prenom+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].filiere+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].annee+"</th>"; 
                chaine = chaine +	" <th>"+"<form action='../php/candidatures.php' method='get'><input type='hidden' name='id' value="+lesSecteurs[Secteurs].id+"><input type='submit' value='Profil'/></form></th></tr>";
                
                
            }
            
            chaine = chaine + "BOF";
            

            chaine = chaine + "</table>";


            $("#col").html("");
            $("#col").append(chaine);


        },
        error : function()
        {
            alert('Erreur du script PHP');
        }
    });		
}

function AfficherListeFiliere() {
    $.ajax({
        type:"GET",
        url:"../php/listeSIO.php",
        data:"idfiliere="+$("#selecteur").val(),
        success:function(data)
        {
            // Version 2
            var lesSecteurs = $.parseJSON(data);
            console.log(lesSecteurs);
            var chaine = "<table border =2 style='background-color : whitesmoke; border-collapse: collapse; border-bottom-color: darkgray; border-top: none; border-right: none; border-left: none;'> <tr> <th>ID</th><th>NOM</th>  <th>PRENOM</th> <th>SECTION</th><th>ANNEE</th> </tr>";

            for(var Secteurs in lesSecteurs)
            {


                chaine = chaine +	" <tr><th>"+lesSecteurs[Secteurs].id+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].nom+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].prenom+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].filiere+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].annee+"</th>";
                chaine = chaine +	" <th>"+"<form action='../php/candidatures.php' method='get'><input type='hidden' name='id' value="+lesSecteurs[Secteurs].id+"><input type='submit' value='Profil'/></form></th></tr>";


            }


            chaine = chaine + "</table>";



            $("#col").html("");
            $("#col").append(chaine);


        },
        error : function()
        {
            alert('Erreur du script PHP');
        }
    });		
}

function AfficherListeDocuments(){

    $.ajax({
        type:"GET",
        url:"php/listedocs.php",
        success:function(data)
        {
            // Version 2
            var lesSecteurs = $.parseJSON(data);
            console.log(lesSecteurs);
            var chaine = "<?php mb_internal_encoding('UTF-8'); ?><table border =2 style='background-color : whitesmoke; margin : auto;'> <tr> <th>Nom</th><th>Type de fichier</th><th>Contenue</th><th>Date d'ajout</th></tr>";

            for(var Secteurs in lesSecteurs)
            {


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











function AfficherPageListe()
{
    $.ajax({
        type:"GET",
        url:"../pages.php",
        success:function(data)
        {
            // Version 2
            var lesSecteurs = $.parseJSON(data);
            console.log(lesSecteurs);
            var chaine = "<table border =2 style='background-color : whitesmoke;'> <tr> <th>ID</th><th>NOM</th>  <th>PRENOM</th> <th>SECTION</th><th>ANNEE</th> </tr>";
//            for (var i=0; i < 4; i++) {
            for(var Secteurs in lesSecteurs)
            {
                

                chaine = chaine +	" <tr><th>"+lesSecteurs[Secteurs].id+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].nom+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].prenom+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].filiere+"</th>";
                chaine = chaine +	" <th>"+lesSecteurs[Secteurs].annee+"</th>"; 
                chaine = chaine +	" <th>"+"<form action='../php/candidatures.php' method='get'><input type='hidden' name='id' value="+lesSecteurs[Secteurs].id+"><input type='submit' value='Profil'/></form></th></tr>";
                
                
            }
            
            chaine = chaine + "BOF";
            

            chaine = chaine + "</table>";

            $("#col").append(chaine);
            $("#col").html("");



        },
        error : function()
        {
            alert('Erreur du script PHP');
        }
    });		
}