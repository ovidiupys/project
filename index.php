<!DOCTYPE html>
<html>
<head>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
<title>test</title></head>
<body>
<div style="text-align:center;">
<h1>Two ways of getting some data from an rss link</h1>
<script>
$(document).ready(function() 
{
	var loadUrl = "get-rss.php";
	$("#easy").click(function(){  
    	$("#result")  
        .html(ajax_load)  
        .load(loadUrl, "language=php&version=5");  
	});
});
</script>
<h2><a href="" id="easy">The easy way</a></h2>

<h2><a href="">The complex way</a></h2>

</div>
<div id="result"></div>
</body>
</html>
