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

class RestTransport{

	private $_url = '';
	private $_headers = array();

	public function __construct($hostname,$apikey,$acc='application/xml',$ua='we'){
		$this->_url = $hostname;
		$this->_headers[] = 'X-Api-Key: '.$apikey;
		$this->_headers[] = 'Accept: '.$acc;
		$this->_headers[] = 'User-Agent: '.$ua;
	}

	/**
	 * Send Request
	 *
	 * @param urld - required -
	 *          The URL area located after the hostname. There is a specific urld value for each action.
	 * @param parameters - required -
	 *          An array of parameters. There is a specific list of parameters for each call made to the server.
	 * @param method - required -
	 * 	  The Rest method used to make the call (GET, POST, PUT, DELETE).
	 * @param autt - optional -
	 * 	  The user's authentication token.
	 * @return 	The server's response in xml or json format.
	 * 	 */
	public function sendRequest($urld,$parameters,$method,$autt=''){
		$url = $this->_url .'/'.$urld;
		$headers = $this->_headers;
		if ($autt!==''){
			$headers[] = 'X-Auth-Token: '.$autt;
		}
		$handle = curl_init();
		curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		switch($method){
			case 'GET':
				$d = http_build_query($parameters);
				$url .= '?'.$d;
				curl_setopt($handle, CURLOPT_URL, $url);
				break;
			case 'POST':
				$data = http_build_query($parameters);
				curl_setopt($handle, CURLOPT_URL, $url);
				curl_setopt($handle, CURLOPT_POST, true);
				curl_setopt($handle, CURLOPT_POSTFIELDS, $data);
				break;
			case 'PUT':
				$data = http_build_query($parameters);
				$url .= '?'.$data;
				curl_setopt($handle, CURLOPT_URL, $url);
				curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'PUT');
				curl_setopt($handle, CURLOPT_POSTFIELDS, $data);
				break;
			case 'DELETE':
				curl_setopt($handle, CURLOPT_URL, $url);
				curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'DELETE');
				break;
		}
		$response = curl_exec($handle);
		curl_close($handle);
		return $response;
	}
}
?>