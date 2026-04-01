<pre>
<?php

// bring in your configuration, api yet etc
require_once 'config.php';

ini_set('max_execution_time',90);

$url = 'http://webthumb.bluga.net/';

try {
    $webthumb = new Bluga_Webthumb();
    $webthumb->setApiKey($APIKEY);
    $job = $webthumb->addUrl($url,'excerpt', 1024, 768);
    // you can set any option here
    // see: http://webthumb.bluga.net/apidoc#request
    $job->options->excerpt = array('x'=>400,'y'=>400,'height'=>200,'width'=>200);
    $job->options->outputType = 'png';
 
    // you can set some fetch to file options on the job object
    $job->file = 'excerpt';

    $webthumb->submitRequests();

    while (!$webthumb->readyToDownload()) {
        sleep(5);
	echo "Checking Job Status\n";
        $webthumb->checkJobStatus();
    } // while (!$webthumb->ready_to_download())

    $webthumb->fetchToFile($job);
    echo '<img src="'.$job->file.'.png'.'" /><br />';

} catch (Exception $e) {
    var_dump($e->getMessage());

}

?>

</pre>

