<?php
require_once '/home/navigato/public_html/apiwrapper/examples/Webthumb/config.php';
ini_set('max_execution_time',90);
function usage($url)
{
	try {
		$webthumb = new Bluga_Webthumb();
		//$webthumb->setApiKey($APIKEY);
		$webthumb->setApiKey("1151b141d532a4bf8361a0f0e632e564");
		$job = $webthumb->addUrl($url,'large', 1024, -1);
		$webthumb->submitRequests();
	
		while (!$webthumb->readyToDownload()) {
			$webthumb->checkJobStatus();
		} // while (!$webthumb->ready_to_download())
	
		$webthumb->fetchToFile($job);
		return $job->status->id;
	} catch (Exception $e) {
		var_dump($e->getMessage());
	}
}
?>