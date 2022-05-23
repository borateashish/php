<?php
$xmlstr = '<?xml version="1.0" encoding="UTF-8" ?>';
$sxe = new SimpleXMLElement("<Movie_Store></Movie_Store>");

$item1 = $sxe->addChild('Movie');
$item1->addAttribute('Category','Classical');
$item1->addChild('MovieTitle','RRR');
$item1->addChild('ActorName', 'Ram, NTR');
$item1->addChild('ReleaseYear', 2022);

$item2 = $sxe->addChild('Movie');
$item2->addAttribute('Category','Classical');
$item2->addChild('MovieTitle','Rockstar');
$item2->addChild('ActorName', 'Ranbir');
$item2->addChild('ReleaseYear', 2016);

$item3 = $sxe->addChild('Movie');
$item3->addAttribute('Category','Horror');
$item3->addChild('MovieTitle','Bhul Bhuliya');
$item3->addChild('ActorName', 'vidya balan');
$item3->addChild('ReleaseYear', 2014);

$item4 = $sxe->addChild('Movie');
$item4->addAttribute('Category','Horror');
$item4->addChild('MovieTitle','Raaz');
$item4->addChild('ActorName', 'Emram hasmi');
$item4->addChild('ReleaseYear', 2016);

$item5 = $sxe->addChild('Movie');
$item5->addAttribute('Category','Action');
$item5->addChild('MovieTitle','Rowdy Rathod');
$item5->addChild('ActorName', 'Akshay Kumar');
$item5->addChild('ReleaseYear', 2017);

$item6 = $sxe->addChild('Movie');
$item6->addAttribute('Category','Action');
$item6->addChild('MovieTitle','War');
$item6->addChild('ActorName', 'hritik roshan');
$item6->addChild('ReleaseYear', 2021);
$sxe->asXML('movies.xml');

echo "xml file is created";

?>

