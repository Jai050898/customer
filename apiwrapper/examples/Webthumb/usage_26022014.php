<?php
require_once '/home/automark/public_html/customer/apiwrapper/examples/Webthumb/config.php';
ini_set('max_execution_time',0);
function usage($url,$h)
{
	try {
		$webthumb = new Bluga_Webthumb();
		//$webthumb->setApiKey($APIKEY);
		$webthumb->setApiKey("1151b141d532a4bf8361a0f0e632e564");
		//$webthumb->setApiKey("91c624a1440f5386594e69fdaedc3136");		
		if($h =="B")
			$job = $webthumb->addUrl($url,'large', 1024, 2048);
		else
			$job = $webthumb->addUrl($url,'large', 1024, -1);
		$webthumb->submitRequests();
	
		while (!$webthumb->readyToDownload()) {
			$webthumb->checkJobStatus();
		} // while (!$webthumb->ready_to_download())
	
		$webthumb->fetchToFile($job,NULL,NULL,"/home/automark/public_html/customer/serps");
		return $job->status->id;
	} catch (Exception $e) {
		var_dump($e->getMessage());
	}
}
?>