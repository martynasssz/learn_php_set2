<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>System Info</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
</head>
<body>
	<div class="container">
		<h1>Server and File Info</h1>
		
			<ul class="list-group">
				<?php foreach($server as $key => $value): ?>	
					<li class="list-group-item">
						<strong><?php return $key; ?>: </strong>
						<?php return $value; ?>	
					</li>		
				<?php endforeach; ?>	
			</ul>
		
	</div>
</body>
</html>