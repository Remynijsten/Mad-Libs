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

		$pet = check($_POST["pet"]);
		$vip = check($_POST["vip"]);
		$country = check($_POST["country"]);
		$bored = check($_POST["bored"]);
		$toys = check($_POST["toys"]);
		$spijbel = check($_POST["spijbel"]);
		$rich = check($_POST["rich"]);
		$hobby = check($_POST["hobby"]);

		$first = "<p>Er heerst paniek in koningkrijk $country. Koning $spijbel is ten einde raad en als koning $spijbel ten einde raad is, dan roept hij zijn ten-einde-raadsheer $vip.</p>";
		$second = "<p>'$vip! Het is een ramp! Het is een schande!'</p>";
		$third = "<p>'Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?'</p>";
		$fourth = "<p>'Mijn $pet is verdwenen! Zo maar, zonder waarschuwing. En ik had net $toys voor hem gekocht!'</p>";
		$fifth = "<p>'Majesteit, uw $pet komt vast vanzelf weer terug?'</p>";
		$sixth = "<p>'Ja, dat is leuk en aardig, maar hoe moet ik in de tussentijd $hobby leren?' </p>";
		$seventh = "<p>'Maar Sire, daar kunt u toch uw $rich voor gebruiken.'</p>";
		$eigth = "<p>'$vip, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.'</p>";
		$ninth = "<p>'$bored, Sire.'</p>";





	}
?>

<html>
	<head>
		<title>Mad Libs</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<nav>
			<ul>
				<li onclick="window.location.href='paniek.php'">Paniek</li>
				<li onclick="window.location.href='onkunde.php'">Onkunde</li>
			</ul>
		</nav>
		<div class="container">
			<h1>Er heerst paniek...</h1><br>
			<form action="paniek.php" method="post" class="formulier">

				<p class="question">Welk dier zou je nooit als huisdier willen hebben?</p>
				<input type="text" name="pet" class="answer" required><br>

				<p class="question">Wie is de belangrijkste persoon in je leven?</p>
				<input type="text" name="vip" class="answer" required><br>

				<p class="question">In welk land zou je graag willen wonen?</p>
				<input type="text" name="country" class="answer" required><br>

				<p class="question">Wat doe je als je je verveelt?</p>
				<input type="text" name="bored" class="answer" required><br>				

				<p class="question">Met welk speelgoed speelde je als kind het meest?</p>
				<input type="text" name="toys" class="answer" required><br>

				<p class="question">Bij welke docent spijbel je het liefst?</p>
				<input type="text" name="spijbel" class="answer" required><br>

				<p class="question">Als je $100.000 had, wat zou je dan kopen?</p>
				<input type="text" name="rich" class="answer" required><br>

				<p class="question">Wat is je favoriete bezigheid?</p>
				<input type="text" name="hobby" class="answer" required><br>

				<button name="submit" type="submit" class="btn">Versturen</button>

			</form>
		</div>
		
		<div class="output">
			<?php 
			if ($complete == 1){

			echo $first;
			echo $second;
			echo $third;
			echo $fourth;
			echo $fifth;
			echo $sixth;
			echo $seventh;
			echo $eigth;
			echo $ninth;

			}?>
		</div>



		<script src="jquery-3.4.1.min.js"></script>
		<script src="script.js"></script>
		<footer>© Remy Nijsten - 2019</footer>
	</body>
</html>