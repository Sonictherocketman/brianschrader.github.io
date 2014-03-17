  <?php
        //Outputs the RSS file for the site.
        $src = $_SERVER['DOCUMENT_ROOT'] . "/archive/metadata.json";
    	$json = json_decode(file_get_contents($src), true);
    	$num = $json["articles"];
    	if ($num != null and $num > 0) {
	        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n\t<rss version=\"2.0\">\n<channel>\n";
			for($i = 0; $i < $num; $i++) {
			  echo "\t<item>\n
			  <title>".$json['title'.$i]."</title>\n
			  <link>".$json['link'.$i]."</link>\n
			  <description>".substr(strip_tags($json['content'.$i]), 0, 20)."...</description>\n
			  </item>\n";
			 }
        echo "</channel>\n</rss>";
		}
 ?>