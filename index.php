<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Facebook Video Downloader</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="icon" href="favicon.ico" />
</head>
<body>
	<!-- GitHub corner -->
	<a href="https://github.com/tinhnhanvh/facebook-video-downloader" class="github-corner" tabindex="-1"><svg width="80" height="80" viewBox="0 0 250 250" style="fill:#151513; color:#fff; position: absolute; top: 0; border: 0; right: 0;"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a>
	

	<div class="container">
		<h1 class="slogan">Get Link Video From Facebook</h1>
		<p class="slogan">Contact me at: <i class="	fa fa-facebook-square" aria-hidden="true"></i>/tinhnhanvh</p>
		<div class="row">
			<div class="col-xs-4">
				<img src="image.jpg" class="img-responsive">
			</div>
			<div class="col-xs-8">
				<form method="POST">
					<div class="form-group">
						<label>Link Video Facebook (Public)</label>
						<input class="form-control" type="url" name="url" id="url" placeholder="Nhập Link Google Drive" required value="https://www.facebook.com/zuck/videos/10104052858820231/">
						<p class="help-block">Only link from public video</p>
					</div>
					<div class="form-action">
						<button class="btn btn-success btn-block" type="button" id="submit">
							Create Video Link
						</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="result"></div>
			</div>
			<div class="col-md-3"></div>
		</div>
		
	</div>

	<footer class="footer">
		<div class="container">
			<p class="text-muted">Copyright &copy; by @tinhnhanvh</p>
		</div>
	</footer>
	<script src="js/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#submit').click(function() {
				$.ajax({
					type: 'GET',
					dataType: 'JSON',
					url: 'get.php?url=' + $('#url').val(),
					success: function(data) {
						$('.result').empty();
						$.each(data, function(key, val){
							$('.result').append('<a class="btn btn-success btn-block" href="'+val+'" download>Download '+key+'</a>');
						});
						
					}
				});
			});
		});
	</script>
</body>
</html>

