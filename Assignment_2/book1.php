<?php
$doc = new DOMDocument("1.0", "UTF-8");
$doc->formatOutput = true;
$bookinfo= $doc->createElement("BookInfo");
$doc->appendChild($bookinfo);

$book= $doc->createElement("book");
$bookinfo->appendChild($book);

$bookno= $doc->createElement("bookno","1");
$book->appendChild($bookno);

$bookname= $doc->createElement("bookname","JAVA");
$book->appendChild($bookname);

$authorname= $doc->createElement("authorname","Balguru Swami");
$book->appendChild($authorname);

$price= $doc->createElement("price","250");
$book->appendChild($price);

$year= $doc->createElement("year","2006");
$book->appendChild($year);

$book= $doc->createElement("book");
$bookinfo->appendChild($book);

$bookno= $doc->createElement("bookno","2");
$book->appendChild($bookno);

$bookname= $doc->createElement("bookname","C");
$book->appendChild($bookname);

$authorname= $doc->createElement("authorname","Denisn Ritchie");
$book->appendChild($authorname);

$price= $doc->createElement("price","500");
$book->appendChild($price);

$year= $doc->createElement("year","1971");
$book->appendChild($year);

$doc->save("book.xml");
echo "book.xml created<h4>";
?>

