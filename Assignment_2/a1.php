
<?php
$xmlstr = '<?xml version="1.0" encoding="UTF-8" ?>';
$sxe = new SimpleXMLElement("<Store></Store>");

$item1 = $sxe->addChild('Item');
$item1->addChild('ItemName', 'Monitor');
$item1->addChild('ItemPrice', 20000);
$item1->addChild('Quantity', 10);

$item2 = $sxe->addChild('Item');
$item2->addChild('ItemName', 'Mouse');
$item2->addChild('ItemPrice', 1000);
$item2->addChild('Quantity', 5);

$item3 = $sxe->addChild('Item');
$item3->addChild('ItemName', 'CPU');
$item3->addChild('ItemPrice', 5000);
$item3->addChild('Quantity', 8);

$item4 = $sxe->addChild('Item');
$item4->addChild('ItemName', 'Camera');
$item4->addChild('ItemPrice', 1200);
$item4->addChild('Quantity', 12);

$item5 = $sxe->addChild('Item');
$item5->addChild('ItemName', 'keyboard');
$item5->addChild('ItemPrice', 8000);
$item5->addChild('Quantity', 16);
$sxe->asXML('item.xml');

?>

