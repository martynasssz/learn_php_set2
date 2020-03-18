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
		<?php if($server): ?> <!--short hand php sintax expresion. "If" is used for testing is it server variable there. Vietoj riestiniu skliausti naudojam dvitaski -->
			<ul class="list-group">
				<?php foreach($server as $key => $value): ?>	
					<li class="list-group-item">
						<strong><?php echo $key; ?>: </strong>
						<?php echo $value; ?>	
					</li>		
				<?php endforeach; ?>	
			</ul>
		<?php endif; ?>	<!--pabaig if'o-->
		<br>

		<h1>Client info</h1>
		<?php if($client): ?> <!--short hand php -->
			<ul class="list-group">
				<?php foreach($client as $key => $value): ?>	
					<li class="list-group-item">
						<strong><?php echo $key; ?>: </strong>
						<?php echo $value; ?>	
					</li>		
				<?php endforeach; ?>	
			</ul>
		<?php endif; ?>	









	</div>
</body>
</html>
