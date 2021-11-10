$(document).ready(function()
{
    $("#experience").hide();
    $("#competence").hide();
    $("#distinction").hide();
    $('#register').hide();
    //--------------------------------- formation -----------------------------

    var lieuFormation = [];
    var anneeFormation = [];
    var typeFormation = [];
    var descriptionFormation = [];

    $("#bouttonFormation .ajouter button").click(function()
    {
        lieuFormation.push($('#lieuFormation').val());
        anneeFormation.push($('#anneeFormation').val());
        typeFormation.push($('#typeFormation').val());
        descriptionFormation.push($('#descriptionFormation').val());

        $('#lieuFormation').val("");
        $('#anneeFormation').val("");
        $('#typeFormation').val("");
    });

    $("#bouttonFormation .suivant button").click(function()
    {   
        
        lieuFormation.push($('#lieuFormation').val());
        anneeFormation.push($('#anneeFormation').val());
        typeFormation.push($('#typeFormation').val());
        descriptionFormation.push($('#descriptionFormation').val());

        $("#formation").hide(1000);
        $("#competence").show(1000);
    });

    $("#bouttonFormation .precedant button").click(function()
    {
        $('#lieuFormation').val("");
        $('#anneeFormation').val("");
        $('#typeFormation').val("");
        $('#descriptionFormation').val("");
        lieuFormation = [];
        anneeFormation = [];
        typeFormation = [];
        descriptionFormation = [];

        $("#formation").hide(1000);
        $("#membre").show(1000);
    });


    // ---------------------------------- competence ----------------------------------
    var icones_categories = [];
    var mes_competences = [];
    var descritpionCompetences = [];

    $('#bouttonCompetence .ajouter button').click(function()
    {
        icones_categories.push($('#icones_categories').val());
        mes_competences.push($('#mes_competences').val());
        descritpionCompetences.push($('#descritpionCompetences').val());
        $('#icones_categories').val("0");
        $('#mes_competences').val("");
        $('#descritpionCompetences').val("");
    });

    $("#bouttonCompetence .suivant button").click(function()
    {
            icones_categories.push($('#icones_categories').val());
            mes_competences.push($('#mes_competences').val());
            descritpionCompetences.push($('#descritpionCompetences').val());
            $("#competence").hide(1000);
            $("#experience").show(1000);
    });

    $("#bouttonCompetence .precedant button").click(function()
    {
        $('#icones_categories').val("0");
        $('#mes_competences').val("");
        $('#descritpionCompetences').val("");
        icones_categories = [];
        mes_competences = [];
        descritpionCompetences = [];

        $("#competence").hide(1000);
        $("#formation").show(1000);
    });


    //----------------------- Expérience -----------------------------

    var nomOrganisation = [];
    var anneeExperience = [];
    var typeExperience = [];
    var descriptionExperiences = [];

    $("#bouttonExperience .ajouter button").click(function()
    {
        nomOrganisation.push($('#nomOrganisation').val());
        anneeExperience.push($('#anneeExperience').val());
        typeExperience.push($('#typeExperience').val());
        descriptionExperiences.push($('#descriptionExperiences').val());
        $('#nomOrganisation').val("");
        $('#anneeExperience').val("");
        $('#typeExperience').val("");
        $('#descriptionExperiences').val("");
    });

    $("#bouttonExperience .precedant button").click(function()
        {
            $('#nomOrganisation').val("");
            $('#anneeExperience').val("");
            $('#typeExperience').val("");
            $('#descriptionExperiences').val("");
            nomOrganisation = [];
            anneeExperience = [];
            typeExperience = [];
            descriptionExperiences = [];

            $("#experience").hide(1000);
            $("#competence").show(1000);
    });
    $('#bouttonExperience .suivant button').click(function()
    {
        nomOrganisation.push($('#nomOrganisation').val());
        anneeExperience.push($('#anneeExperience').val());
        typeExperience.push($('#typeExperience').val());
        descriptionExperiences.push($('#descriptionExperiences').val());
        $('#experience').hide(1000);
        $('#distinction').show(1000);
    });

    // ------------------------------- Distinctions --------------------------

    var organisateurs = [];
    var anneeDistinction = [];
    var typeDistinction = [];
    var descriptionDistinction = [];
    var rangDistinction = [];

    $('#bouttonDistinction .ajouter button').click(function()
    {
        organisateurs.push($('#organisateurs').val());
        anneeDistinction.push($('#anneeDistinction').val());
        typeDistinction.push($('#typeDistinction').val());
        descriptionDistinction.push($('#descriptionDistinction').val());
        rangDistinction.push($('#rangDistinction').val());
        $('#organisateurs').val("");
        $('#anneeDistinction').val("");
        $('#typeDistinction').val("");
        $('#descriptionDistinction').val("");
        $('#rangDistinction').val("");
    });

    $('#bouttonDistinction .precedant button').click(function()
    {
        $('#organisateurs').val("");
        $('#anneeDistinction').val("");
        $('#typeDistinction').val("");
        $('#descriptionDistinction').val("");
        $('#rangDistinction').val("");
        organisateurs = [];
        anneeDistinction = [];
        typeDistinction = [];
        descriptionDistinction = [];
        rangDistinction = [];

        $('#distinction').hide(1000);
        $('#experience').show(1000);
    });

    $('#bouttonDistinction .suivant button').click(function()
    {
        organisateurs.push($('#organisateurs').val());
        anneeDistinction.push($('#anneeDistinction').val());
        typeDistinction.push($('#typeDistinction').val());
        descriptionDistinction.push($('#descriptionDistinction').val());
        rangDistinction.push($('#rangDistinction').val());

        $('#register').show(1000);
    });
        
    //-------------------------- LES DONNEES ---------------------------------

    $('#register').click(function()
    {
        var donnees = {
            //------------------- formation ---------------------------
            lieuF: lieuFormation,
            anneeF: anneeFormation,
            typeF: typeFormation,
            descriptionF: descriptionFormation,
            //-------------------- Competences ------------------------
            iconeC: icones_categories,
            competences: mes_competences,
            descriptionC: descritpionCompetences,
            //------------------- Experience ------------------------
            nomE: nomOrganisation,
            anneeE: anneeExperience,
            typeE: typeExperience,
            descriptionE: descriptionExperiences,
            // ------------------- Distinction ----------------------
            nomD: organisateurs,
            anneeD: anneeDistinction,
            typeD: typeDistinction,
            descriptionD: descriptionDistinction,
            rangD: rangDistinction
        };

        $.post( "../controllers/controllers.php", donnees, function(data, status)
        {
            if(status == 'success')
            {
                alert('Vos données sont enregistrées...!');
                window.location.replace('../index.php');
            }
            else
            {
                alert(data);
            }
        });
        //------------------- formation ---------------------------
        lieuFormation = [];
        anneeFormation = [];
        typeFormation = [];
        descriptionFormation = [];
        //-------------------- Competences ------------------------
        icones_categories = [];
        mes_competences = [];
        descritpionCompetences = [];
        //------------------- Experience ------------------------
        nomOrganisation = [];
        anneeExperience = [];
        typeExperience = [];
        descriptionExperiences = [];
        // ------------------ Distinction ------------------------
        organisateurs = [];
        anneeDistinction = [];
        typeDistinction = [];
        descriptionDistinction = [];
        rangDistinction = [];
    });
});
