<html>
<head>
</head>
<body>
<?php
$numArticle = intval($_POST['articlenum']);
$PID = getmypid();
print "<div id='pidDiv' style='display:none;'>" . $PID . "</div>";
$pdflinks = array();
if($_POST['subreddit'] === "Front Page"){
        $html = file_get_contents('http://www.reddit.com/.json');
        $subreddit = 'http://www.reddit.com';
} else {
        $html = file_get_contents('http://reddit.com/r/' . $_POST['subreddit'] . '/.json');
        $subreddit = 'http://reddit.com/r/' . urlencode($_POST['subreddit']);
}
$json_output = json_decode($html);

foreach ( $json_output->data->children as $value ) {
	$domain = $value->data->domain;
	$url = $value->data->url;
        if( $count < $numArticle ){  
	  if( ($domain === 'i.imgur.com' || $domain === 'imgur.com') && strrpos(substr($url,-5), '.') != false){
		$string_position = strrpos($url, '.',-1);
		$imgur_URL = substr($url,0,$string_position);
		array_push($pdflinks,$imgur_URL);
	  } else {
                array_push($pdflinks,$value->data->url);
	  }
        }
        $count++;
}
$pdflinks = implode(" ",$pdflinks);
$PGM = 'ptkwkhtmltopdf -n ' . $subreddit . ' ' . $pdflinks . ' pdfs/reddit'. $PID . '.pdf';
#echo $PGM;
`$PGM`;
?>

<script>
var pid = document.getElementById('pidDiv').innerHTML;
setTimeout(function(){window.location = "http://ptkwilliams.com/reddit2pdf/pdfs/reddit"+pid+".pdf"},10);
</script>
</body>
</html

