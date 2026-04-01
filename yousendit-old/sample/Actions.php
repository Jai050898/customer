<?php

/**********************************************************************************************
 * Copyright 2012 YouSendIt, Inc. All Rights Reserved.
*
* Licensed under the YouSendIt API agreement. You may not use this file except in compliance
* with the License.
*
* This is a sample file distributed on an "AS IS" basis, WITHOUT WARRANTIES OR CONDITIONS OF
* ANY KIND, either expressed or implied. See the API License for the specific language
* governing permissions and limitations.
*********************************************************************************************/

require_once('Authentication.php');
session_start();

if ((empty($_SESSION['sHost'])) || (empty($_SESSION['sApp']))) {
	header('Location: ./SampleApp.php');
}else if (empty($_SESSION['sEmail']) || (empty($_SESSION['sPass']))){
	header('Location: ./SampleApp.php');
}


$page_title = 'YSI Store Actions';

include 'ShowActions.inc.php';
?>