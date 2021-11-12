$(document).ready(function()
{
	$('#loading').hide();

	$('#send_file').click(function()
		{
			if($('#fichier').val().trim().length === 0)
			{
				alert('Veuillez choisir une image. Merci !');
			}

			/*else
			{
				$('#upload_file').hide();
				$('#loading').show();
				$.post('../../controllers/admin/upload_file_profile.php', {fichier: $('#fichier').get(0).files}, function(data,status)
					{
						f(data == 'success')
						{
							alert(data);
						}

						else
						{
							alert(data);
							$('#upload_file').show();
							$('#loading').hide();
						}
					});
			}*/
		});
});
