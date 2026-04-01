<pre>
<?php

// bring in your configuration, api yet etc
require_once '/home/automark/public_html/MM/customer/apiwrapper/config.php';

ini_set('max_execution_time',90);

//$url = 'http://www.google.com/#hl=en&q=auto+repair+vancouver+wa';
$url = $_REQUEST['url'];
try {
    $webthumb = new Bluga_Webthumb();
    $webthumb->setApiKey($APIKEY);
    $job = $webthumb->addUrl($url,'large', 1024, -1);
    $webthumb->submitRequests();

    while (!$webthumb->readyToDownload()) {
        sleep(5);
	echo "Checking Job Status\n";
        $webthumb->checkJobStatus();
    } // while (!$webthumb->ready_to_download())

    $webthumb->fetchToFile($job);
    echo '<img src="'.$job->status->id.'.jpg'.'" /><br />';

} catch (Exception $e) {
    var_dump($e->getMessage());
}

?>

</pre>

