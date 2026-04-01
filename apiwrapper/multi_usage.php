<?php
//require_once 'url_list.php';
require_once 'config.php';

$urls = array(

	'http://burrendahplumbing.citysearch.com.au',
	'http://innovativerecruitment.com.au',
	'http://swanpark.cityofswan.com',
	'http://talonshighsecurityfencing.com.au',
	'http://users.bigpond.net.au/batteryking',
	'http://users.bigpond.net.au/bids6446',
	'http://users.bigpond.net.au/skips10',
	//'http://vinimpexinternational.com',
	//'http://volkspower.com.au',


	);

try {
    echo "building request\n";
    $webthumb = new Bluga_Webthumb();
    $webthumb->setApiKey($APIKEY);
	$i = 0;
	foreach($urls as $url) {
		try {
			echo "Adding url: $url\n";
			$j = $webthumb->addUrl($url,'medium2', 1024, 768);
			$j->file = str_replace(array(':',':','/','&'),'_',substr($url,7));
			$i++;
		}
		catch(Exception $e) {
			echo "Error adding a url -- ".$e->getMessage()."\n";
		}
	}
	echo "Requesting $i thumbs\n";
	$webthumb->submitRequests();

    while (!$webthumb->readyToDownload()) {
        sleep(12);
	echo "Checking Job Status\n";
        $webthumb->checkJobStatus();
    } // while (!$webthumb->ready_to_download())

	$webthumb->fetchAll('thumbs');

} catch (Exception $e) {
//    var_dump($e);
	echo "Exception handler\n";
	echo $e->getMessage();

	echo "\n\n";
}

?>
