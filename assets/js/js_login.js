$(document).ready(function()
	{
		$('#login').hide();
		$('#login').show(1000);
		$('#erreur').hide();
		$('#loading').hide();

		// Connecter ...
		$('#connecter').click(function()
			{
				if($('#identifiant').val().trim().length === 0)
				{
					alert('Veuillez saisir votre identifiant... Merci !');
				}

				else if($('#password').val().trim().length === 0)
				{
					alert('Veuillez saisir votre mot de passe... Merci !')
				}
				
				else
				{
					let donnees = {
						identifiant: $('#identifiant').val(),
						password: $('#password').val()
					};

					$.post('../controllers/login.php', donnees, function(data, status)
						{
							if(data == '1')
							{
								window.location.replace('admin/modifierportfolio.php');
							}

							else
							{
								alert(data);
								$('#erreur').show();
							}
						});
				}
			});

		$('#inscrire').click(function()
			{
				window.location.href = 'inscription.php';
			});

		$('#forgot_password').click(function()
			{
				window.location.href = 'erreurs/forgot_password.php';
			});

		$('#send_mail').click(function()
			{
				if($('#email').val().trim().length === 0)
				{
					alert('Veuillez saisir votre adresse email...! Merci !');
				}

				else
				{
					$('#envoyer').hide();
					$('#loading').show();

					$.post('../../controllers/erreurs/forgot_password.php', {email: $('#email').val()}, function(data)
						{
							if(data == 'success')
							{
								alert('Veuillez regarder votre email pour la mise à jours de votre mot de passe...!');
								window.location.replace('../login.php');
							}

							else
							{
								alert(data);
								$('#loading').hide();
								$('#envoyer').show();
							}
						});
				}
			});
	});
