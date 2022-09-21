<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Arrays Ex. 1</title>
</head>
<body>
	<h1>PHP Arrays Ex. 1</h1>

<?php
$weather = array("Rain", "Sunshne", "Clouds", "Hail", "Sleet", "Snow", "Wind");

echo "<p>We've seen all kinds of weather this month.<br> At the 
beginning of the month, we had $weather[5]  and $weather[6],<br> Then 
came $weather[1] with a few  $weather[2] and some  $weather[0].<br> at least 
we didn't get any $weather[3] or $weather[4] .</p>"
?>


	<h1>PHP Arrays Ex. 2</h1>
<?php
$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
		foreach ($cities as $c) {
			echo $c.', ';
		}				
		sort($cities);
			echo "<ul>";
		foreach ($cities as $c) {
			echo "<li>". $c ."</li>";
		}
			echo "</ul>";
		array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
		sort($cities);
		echo "<ul>";
		foreach ($cities as $c) {
			echo "<li>". $c ."</li>";
		}
		echo "</ul>";	
		
		?>


</body>
</html>