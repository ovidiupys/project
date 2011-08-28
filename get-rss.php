<?php 
$way = $_GET['way'];
$ways = array("easy","complex");
if(!in_array($way,$ways)){$rezultat = 'err';}
else{
switch($way)
	{
	case "easy" :
		$text=file_get_contents("http://weather.yahooapis.com/forecastrss?p=ROXX0008&u=c");
		preg_match('/.*?, (\d+) C/i', $text, $matches);
		$rezultat = $matches[1].'&deg C';	
	break;
	case "complex" :
		$rezultat = 'complex'; 
	break;
	}
}
echo $rezultat;

?>
