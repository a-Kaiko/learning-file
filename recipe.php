<?php
$recipes = [
	['Cassoulet','[...]','ma@email.com',true,],
	['Couscous','[...]','ma@email.com',false,],
];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Affichage des recettes</title>
	</head>
	
	<body>
		<ul>
			<?php for ($lines = 0; $lines <= 1; $lines++): ?>
				<li> <?php echo $recipes[$lines][0].' ('.$recipes[$lignes][2].' )'; ?> </li>
			<?php endfor; ?>
		</ul>
	</body>
</html>