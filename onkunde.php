<?php  
	$complete = 0;
	if(isset($_POST['submit'])) {
		$complete = 1;

		function check($data){
			$data = strip_tags($data);
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			
			return $data;
		}

		$skills = check($_POST["skills"]);
		$friends = check($_POST["friends"]);
		$num = check($_POST["num"]);
		$vacation = check($_POST["vacation"]);
		$childtoy = check($_POST["childtoy"]);
		$best = check($_POST["best"]);
		$worst = check($_POST["worst"]);
		$happen = check($_POST["happen"]);

		$onkunde = "<p>Er zijn veel mensen die niet kunnen $skills. Neem nou $friends. Zelfs met de hulp van $vacation of zelfs $num kan $friends niet $skills. Dat heeft te niet maken met een gebrek aan $best, maar met een teveel aan $worst. Te veel $worst leidt tot $happen en dat is niet goed als je wilt $skills. Helaas voor $friends.</p>";

	}
?>

<html>
	<head>
		<title>Mad Libs</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
	</head>
	<body>
		<nav>
			<ul>
				<li onclick="window.location.href='paniek.php'">Paniek</li>
				<li onclick="window.location.href='onkunde.php'">Onkunde</li>
			</ul>
		</nav>
		<div class="container">
			<h1>Onkunde</h1><br>
			<form action="onkunde.php" method="post" class="formulier">

				<div class="form-group">
					<label for="skills" class="question">Wat zou je graag willen kunnen?</label>
					<input id="skills" type="text" name="skills" class="form-control" required><br>
				</div>

				<div class="form-group">
					<label for="friends" class="question">Met welke personen kun je goed opschieten?</label>
					<input id="friends" type="text" name="friends" class="form-control" required><br>
				</div>
				
				<div class="form-group">
					<label for="num" class="question">Wat is je favoriete getal?</label>
					<input id="num" type="text" name="num" class="form-control" required><br>
				</div>


				<div class="form-group">
					<label for="vacation" class="question">Wat heb je altijd bij je als je op vakantie gaat?</label>
					<input id="vacation" type="text" name="vacation" class="form-control" required><br>				
				</div>
				
				<div class="form-group">
					<label for="childtoy" class="question">Met welk speelgoed speelde je als kind het meest?</label>
					<input id="childtoy" type="text" name="childtoy" class="form-control" required><br>
				</div>

				<div class="form-group">
					<label for="best" class="question">Wat is je beste persoonlijke eigenschap?</label>
					<input id="best" type="text" name="best" class="form-control" required><br>
				</div>

				<div class="form-group">
					<label for="worst" class="question">Wat is je slechtste persoonlijke eigenschap?</label>
					<input id="worst" type="text" name="worst" class="form-control" required><br>
				</div>

				<div class="form-group">
					<label for="happen" class="question">Wat is het ergste wat je kan overkomen?</label>
					<input id="happen" type="text" name="happen" class="form-control" required><br>
				</div>

				<button name="submit" type="submit" class="btn">Versturen</button>

			</form>
		</div>
		
		<div class="output">
			<?php 
			if ($complete == 1){

			echo $onkunde;

			}?>
		</div>


		
		<script src="jquery-3.4.1.min.js"></script>
		<script src="script.js"></script>
		<footer>© Remy Nijsten - 2019</footer>
	</body>
</html>