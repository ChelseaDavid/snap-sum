<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Snap Challenge</title>
	</head>
	<body>

		<?php
		$sum=array(16,8,5);
		echo array_sum($sum);
		?>

		<script>
			function sumArrayFunctional(arrayToSum) {
				return arrayToSum.reduce((sum.current) => sum + current);
			}

		</script>

	</body>
</html>