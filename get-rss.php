<?php 

$way = $_GET['way'];

//if(!in_array($way,$ways){$rezultat = 'err';}
//else{
switch($way)
	{
		case "easy" :
 /* $doc = new DOMDocument();
  $doc->load('http://weather.yahooapis.com/forecastrss?p=ROXX0008&u=c');
  $arrFeeds = array();
  foreach ($doc->getElementsByTagName('item') as $node) {
    $itemRSS = array ( 
      'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
      'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
      'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
      'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue
      );
    array_push($arrFeeds, $itemRSS);
  }*/echo 'easy' ; break;
		case "complex" :echo 'complex'; break;
	}
//}
//echo $rezultat;
?>
