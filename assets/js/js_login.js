$(document).ready(function()
	{
		$('#erreur').hide();

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
								window.location.replace('view.php');
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
	});
