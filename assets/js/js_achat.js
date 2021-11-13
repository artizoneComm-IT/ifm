$(document).ready(function()
	{
		$('#vente').hide();
		$('#loading').hide();
		$('#acheter').click(function()
		{
			$('#vente').show(1000);
		});

		$('#send').click(function()
			{
				if($('#nom').val().trim().length === 0)
				{
					alert('Veuillez remplir votre nom. Merci !');
				}

				else if($('#prenoms').val().trim().length === 0)
				{
					alert('Veuillez remplir votre prenom. Merci !');
				}

				else if($('#cin').val().trim().length === 0)
				{
					alert('Veuillez remplir votre CIN. Merci !');
				}

				else if($('#phone').val().trim().length === 0)
				{
					alert('Veuillez remplir téléphone. Merci !');
				}

				else if($('#date').val().trim().length === 0)
				{
					alert('Veuillez remplir la date de livraison. Merci !');
				}

				else if($('#heure').val().trim().length === 0)
				{
					alert("Veuillez remplir l'heure de livraison. Merci !");
				}

				else
				{
					let donnees = {
						nom: $('#nom').val(),
						prenoms: $('#prenoms').val(),
						cin: $('#cin').val(),
						email: $('#email').val(),
						date: $('#date').val(),
						heure: $('#heure').val()
					};
					console.log(donnees);
					$('#send').hide();
					$('#loading').show();
					$.post('../controllers/achat.php', donnees, function(data, status)
						{
							if(data == '1')
							{
								$('#loading').hide();
								$('#send').show();
								alert('Vous recevrez un mail de confirmation. Merci !');
								window.location.href="gallerie.php";
							}

							else
							{
								alert(data);
							}
						});
				}
			});
	});