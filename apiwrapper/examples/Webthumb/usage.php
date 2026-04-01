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

//for customer/vote page

function usageVoting($url,$h)
{
	try {
		$webthumb1 = new Bluga_Webthumb();
		//$webthumb->setApiKey($APIKEY);
		$webthumb1->setApiKey("1151b141d532a4bf8361a0f0e632e564");
		//$webthumb->setApiKey("91c624a1440f5386594e69fdaedc3136");		
		if($h =="B")
			$job = $webthumb1->addUrl($url,'large', 1024, 2048);
		else
			$job = $webthumb1->addUrl($url,'large', 1024, -1);
                $webthumb1->submitRequests();
//		print_r($job);exit;
		//echo'<pre>';print_r($job);exit;
		$webthumb1->submitRequests();
	
		while (!$webthumb1->readyToDownload()) {
			$webthumb1->checkJobStatus();
		} // while (!$webthumb->ready_to_download())
	
		$webthumb1->fetchToFile($job,NULL,NULL,"/home/automark/public_html/vote/files");
		return $job->status->id;
	} catch (Exception $e) {
		var_dump($e->getMessage());
	}
}

?>
