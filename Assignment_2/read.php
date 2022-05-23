<?php
$xml=simplexml_load_file("movies.xml") or die("eror:cannot create object");
var_dump($xml);

foreach($xml->movies as $movie)
{
	echo "<br>Movie category attribute= $movie-> attributes() <br>";
	echo "<br>Movie Title elements= $movie-> MovieTitle <br>";
	echo "<br>Movie Actor name element= $movie-> ActorName <br>";
	echo "<br>Release year element= $movie-> ReleaseYear <br>";


}

?>

