<?php 
 include_once "conn.php";
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nosso App</title>
</head>

<body>
<h1>Usuarios do sistema</h1>
<ul>
	<?php foreach($users as $user): ?>
		<li>Nome: <?php echo $user['name'] ?>,
		idade:
		<?php echo $user['age']; ?>
	</li>
	<?php endforeach; ?>
</ul>

</body>
</html>