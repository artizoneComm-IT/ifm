<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Artizone-Upload file</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/loading.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-12">
					
				</div>
			</div>			
		</div>
	</header>
	<section>
		<div class="container mt-5">
			<div class="row form-group" enctype="multipart/form-data">
				<div class="col-12 col-md-3"></div>
				<div class="col-12 col-md-6  border shadow rounded p-3">
					<p class="text-primary text-center">Veuillez choisir le fichier !</p>

					<label for="fichier" class="form-label font-weight-bold font-italic ml-3">Fichier:</label>
					<input type="file" id="fichier" class="form-control">

					<div class="container mt-3">
						<div class="row">
							<div class="col-12 text-center" id="upload_file">
								<button class="btn btn-primary" id="send_file">Upload</button>
							</div>
							<div class="col-12 text-center" id="loading">
								<span class="ld ld-hourglass ld-spin-fast" style="font-size:64px;color:#8da"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-3"></div>
			</div>
		</div>
	</section>
	<script type="text/javascript" src="../../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../../assets/js/popper.js"></script>
	<script type="text/javascript" src="../../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../../assets/js/js_admin.js"></script>
</body>
</html>