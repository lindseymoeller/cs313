<?php
session_start();
?>

<!DOCTYPE html>
<body>

	<form action="survey_results.php" method="post">
		1. Which is better, chocolate or vanilla? <br>
		<input type="radio" name="better" value="chocolate" required>Chocolate<br>
		<input type="radio" name="better" value="vanilla" required>Vanilla<br>
		<br>
		2. The best holiday is:<br>
		<input type="radio" name="holiday" value="christmas" required>Christmas<br>
		<input type="radio" name="holiday" value="birthday" required>My birthday<br>
		<input type="radio" name="holiday" value="july" required>4th of July<br>
		<input type="radio" name="holiday" value="thanksgiving" required>Thanksgiving<br>
		<br>
		3. The coolest animal is the:<br>
		<input type="radio" name="animal" value="coati" required>Coati<br>
		<input type="radio" name="animal" value="giraffe" required>Giraffe<br>
		<input type="radio" name="animal" value="platypus" required>Platypus<br>
		<input type="radio" name="animal" value="narwhal" required>Narwhal<br>
		<br>
		4. ______ is the best color.<br>
		<input type="radio" name="color" value="red" required>Red<br>
		<input type="radio" name="color" value="green" required>Green<br>
		<input type="radio" name="color" value="blue" required>Blue<br>
		<input type="radio" name="color" value="yellow" required>Yellow<br>
		<br>
		<input type="submit">
		
		<p>Click here to <a href="survey_results.php">view results</a> without voting.</p>
	</form>
</body>
</html>
