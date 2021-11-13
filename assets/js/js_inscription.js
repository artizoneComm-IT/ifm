$(document).ready(function()
    {
        $('#identites').hide();
        $('#identites').show(1000);
        $('#envoyer').click(function()
            {
                if($('#names').val().trim().length === 0)
                {
                    alert('Veuillez remplir votre nom !');
                }

                else if($('#last_names').val().trim().length === 0)
                {
                    alert('Veuillez remplir votre prénom !');
                }

                else if($('#phone1').val().trim().length === 0)
                {
                    alert('Veuillez remplir un numéro de téléphone !');
                }

                else if($('#addresses').val().trim().length === 0)
                {
                    alert('Veuillez remplir votre adresse !');
                }

                else if($('#email').val().trim().length === 0)
                {
                    alert('Veuillez remplir votre email !');
                }

                else if($('#password').val().trim().length === 0)
                {
                    alert('Veuillez remplir votre mot de passe !');
                }

                else if($('#categorie').val().trim().length === 0)
                {
                    alert('Veuillez choisir un categorie !');
                }

                else
                {
                    let donnees = {
                        names: $('#names').val(),
                        last_names: $('#last_names').val(),
                        pseudo: $('#pseudo').val(),
                        phone1: $('#phone1').val(),
                        phone2: $('#phone2').val(),
                        addresses: $('#addresses').val(),
                        email: $('#email').val(),
                        passwords: $('#password').val(),
                        id_categorie: $('#categorie').val()
                    };
                    console.log(donnees);

                    $.post('../controllers/inscription.php', donnees, function(data, status)
                        {
                            if(data == '1')
                            {
                                alert('Succès');
                                window.location.replace('login.php');
                            }

                            else
                            {
                                alert(data);
                            }
                        });
                }
            });
    });