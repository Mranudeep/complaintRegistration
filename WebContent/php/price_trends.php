<?php


$file = file_get_contents("https://www.makaan.com/price-trends");

//echo  $file;

$dom = new domDocument;
@$dom->loadHTML($file);

$scrape = $dom->getElementsbyTagName('title');

foreach ($scrape as $title){
    echo "Title of website :". $title->nodeValue;
}

$scrape = $dom->getElementsbyTagName('table');

foreach ($scrape as $td){
    echo "Price Trends:". $td->nodeValue. "<br>";
}


//@$doc->loadhtml($string);

$xpath = new DOMXPath($file);

// Modify the XPath query to match the content
foreach($xpath->query('//*[@id="city_apartment"]/table')->item(0)->getElementsByTagName('tr') as $rows) {
    $cells = $rows->getElementsByTagName('td');
    
    // Do stuff with the data
    echo $cells->item(0);
    echo $cells->item(1);
    echo $cells->item(2);
}
?>
