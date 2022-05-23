<?php
$doc = new DOMDocument("1.0", "UTF-8");
$doc->formatOutput = true;
$movieinfo= $doc->createElement("MovieInfo");
$doc->appendChild($movieinfo);

$movie= $doc->createElement("category");
$movie->setattribute("type","Horror");
$movieinfo->appendChild($movie);
$mno= $doc->createElement("mno","1");
$movie->appendChild($mno);
$mname= $doc->createElement("moviename","Raz");
$movie->appendChild($mname);
$aname= $doc->createElement("actorname","xyz");
$movie->appendChild($aname);
$year= $doc->createElement("year","2010");
$movie->appendChild($year);

$movie= $doc->createElement("category");
$movie->setattribute("type","Classic");
$movieinfo->appendChild($movie);
$mno= $doc->createElement("mno","2");
$movie->appendChild($mno);
$mname= $doc->createElement("moviename","timepass");
$movie->appendChild($mname);
$aname= $doc->createElement("actorname","xyz");
$movie->appendChild($aname);
$year= $doc->createElement("year","2016");
$movie->appendChild($year);

$movie= $doc->createElement("category");
$movie->setattribute("type","Action");
$movieinfo->appendChild($movie);
$mno= $doc->createElement("mno","3");
$movie->appendChild($mno);
$mname= $doc->createElement("moviename","Tiger");
$movie->appendChild($mname);
$aname= $doc->createElement("actorname","xyz");
$movie->appendChild($aname);
$year= $doc->createElement("year","2015");
$movie->appendChild($year);
$movie= $doc->createElement("category");
$movie->setattribute("type","Classic");
$movieinfo->appendChild($movie);
$mno= $doc->createElement("mno","4");
$movie->appendChild($mno);
$mname= $doc->createElement("moviename","ki and ka");
$movie->appendChild($mname);
$aname= $doc->createElement("actorname","xyz");
$movie->appendChild($aname);
$year= $doc->createElement("year","2010");
$movie->appendChild($year);
$movie= $doc->createElement("category");
$movie->setattribute("type","Classic");
$movieinfo->appendChild($movie);
$mno= $doc->createElement("mno","5");
$movie->appendChild($mno);
$mname= $doc->createElement("moviename","Welcome");
$movie->appendChild($mname);
$aname= $doc->createElement("actorname","xyz");
$movie->appendChild($aname);
$year= $doc->createElement("year","2010");
$movie->appendChild($year);
$doc->save("A2SB2.xml");
echo "A2SA3.xml created<h4>";
?>

