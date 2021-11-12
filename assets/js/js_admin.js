$(document).ready(function()
{
	$('#loading').hide();

	$('#send_file').click(function()
		{
			if($('#fichier').val().trim().length === 0)
			{
				alert('Veuillez choisir une image. Merci !');
			}

			else
			{
				$('#upload_file').hide();
				$('#loading').show();
				$.post('../../controllers/admin/upload_file.php', donnees, function(data,status)
					{
						if(data == 'success')
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
			}
		});
});
