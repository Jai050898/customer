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

class UploadFile{

	private $_url = '';
	private $_fid = '';
	private $_fname = '';
	private $_headers = array('Content-Type: multipart/form-data; boundary=AaB03x','Accept: text/xml');

	public function __construct($upurl,$fid,$fname){
		$this->_url = $upurl;
		$this->_fid = $fid;
		$this->_fname = $fname;
	}
	
	/**
	 * Create POST Data
	 *	This private method creates the data that will be POSTED to a specific upload URL.
	 * @return 	The data to be POSTED to the upload URL.
	 * 	 */
	private function createData(){
		$eol = "\r\n";
		$data = '';
		$mime_boundary="AaB03x";
		$data .= '--' . $mime_boundary . $eol;
		$data .= 'Content-Disposition: form-data; name="bid"' . $eol . $eol;
		$data .= "$this->_fid" . $eol;
		$data .= '--' . $mime_boundary . $eol;
		$name = basename($this->_fname);
		$data .= 'Content-Disposition: form-data; name="fname"; filename="'.$name.'"' . $eol;
		$data .= 'Content-Type: application/octet-stream' . $eol . $eol;
		$content = file_get_contents($this->_fname);
		$data .= $content. $eol;
		$data .= "--" . $mime_boundary . "--" . $eol . $eol;
		return $data;
	}
	
	/**
	 * Send Upload Request
	 *	This method is uploading the file content to a specific URL using the POST Rest method.
	 * @return 	The server's response in xml.
	 * 	 */	
	public function sendRequest(){
		set_time_limit(300);
		$data = $this->createData();
		$handle = curl_init();
		curl_setopt($handle, CURLOPT_HTTPHEADER, $this->_headers);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($handle, CURLOPT_URL, $this->_url);
		curl_setopt($handle, CURLOPT_POST, true);
		curl_setopt($handle, CURLOPT_POSTFIELDS, $data);
		$response = curl_exec($handle);
		$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
		curl_close($handle);
		return $response;
	}
}


class DownloadFile{

	private $_url = '';
	private $_headers = array();

	public function __construct($hostname,$apikey,$ua){
		$this->_url = $hostname;
		$this->_headers[] = 'X-Api-Key: '.$apikey;
		$this->_headers[] = 'User-Agent: '.$ua;
	}
	
	/**
	 * Send Download Request
	 *	This method downloads a file following the redirection.
	 *
	 * @param urld - required -
	 *          The download URL.
	 * @param parameters - required -
	 *          The download parameters array list.
	 * @param autt - required -
	 *          The user's authentication token.
	 * @return 	The headers and the content of the downloaded file or "fail" if the request has failed.
	 * 	 */	
	public function sendRequest($urld,$parameters,$autt){
		set_time_limit(300);
		$url = $this->_url .'/'.$urld;
		$headers = $this->_headers;
		$headers[] = 'X-Auth-Token: '.$autt;
		$handle = curl_init();
		curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($handle, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($handle, CURLOPT_HEADER, true);
		$d = http_build_query($parameters);
		$url .= '?'.$d;
		curl_setopt($handle, CURLOPT_URL, $url);
		$response = curl_exec($handle);
		$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
		curl_close($handle);
		if ($code == '200'){
			return $response;
		}
		else{
			return 'fail';
		}
	}
	
	/**
	 * Send Download Request Without Saving the file
	 *
	 * @param urld - required -
	 *          The download URL.
	 * @param parameters - required -
	 *          The download parameters array list.
	 * @param autt - required -
	 *          The user's authentication token.
	 * @return 	The file's real download URL or "fail" if the request has failed.
	 * 	 */
	public function sendRequestWS($urld,$parameters,$autt){
		set_time_limit(300);
		$url = $this->_url .'/'.$urld;
		$headers = $this->_headers;
		$headers[] = 'X-Auth-Token: '.$autt;
		$handle = curl_init();
		curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($handle, CURLOPT_HEADER, true);
		$d = http_build_query($parameters);
		$url .= '?'.$d;
		curl_setopt($handle, CURLOPT_URL, $url);
		$response = curl_exec($handle);
		$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
		curl_close($handle);
		if ($code == '302'){
			return $response;
		}
		else{
			return 'fail';
		}
	}

	/**
	 * Send Download Request With Resume Support
	 *
	 * @param url - required -
	 *          The file's real download URL.
	 * @param autt - required -
	 *          The user's authentication token.
	 * @param range - optional -
	 *          The range of KB that will be downloaded from the file. 
	 * @return 	The specified range of KB from the file or "fail" if the request has failed. If no range is set the entire file will be downloaded.
	 * 	 */	
	public function sendRequestResume($url,$autt,$range=''){
		set_time_limit(300);
		$headers = $this->_headers;
		$headers[] = 'X-Auth-Token: '.$autt;
		if (''!==$range){
			$headers[] = 'Range: bytes='.$range;
		}
		$handle = curl_init();
		curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($handle, CURLOPT_URL, $url);
		$response = curl_exec($handle);
		$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
		curl_close($handle);
		if (($code == '200')||($code == '206')){
			return $response;
		}
		else{
			return 'fail';
		}
	}
}
?>