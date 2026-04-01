<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!--  /**********************************************************************************************
 * Copyright 2012 YouSendIt, Inc. All Rights Reserved.
*
* Licensed under the YouSendIt API agreement. You may not use this file except in compliance
* with the License.
*
* This is a sample file distributed on an "AS IS" basis, WITHOUT WARRANTIES OR CONDITIONS OF
* ANY KIND, either expressed or implied. See the API License for the specific language
* governing permissions and limitations.
*********************************************************************************************/-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="appstyle.css" rel="stylesheet" type="text/css">
<script src="jquery.min.js"></script>
<script src="jquery.form.js"></script>
<script src="actions.js"></script>
<script src="sendRequest.js"></script>
</head>

<body id="body2">
	<span id="logout"><a href="./Logout.php">Log out</a></span>
	<table id="main" border="2" cellpadding="2">
		<tr class="noborder">
			<td align="left" id="title1">
				<div id="title">
					<h2>Storage and Share</h2>
				</div>
			</td>

			<td align="right" id="link" class="noborder"><a href="javascript:void(0)" class="c1"
				onclick="refreshActions('sendactions','storelink','send')"
				id="link1">Change to Send and Receive Actions</a>
			</td>
		</tr>

		<tr valign="top" class="noborder">
			<td id="actions">
				<div id="storeactions">
					<b>Select an Action:</b><br /> <br /> <b>User</b><br />
					<ul class="gpmenu">
						<li><button type="button" class="button" name="getuserinfo"
								onclick="refresh('getuserinfo')">Get User Info</button></li>
						<li><button type="button" class="button" name="getpolicyinfo"
								onclick="refresh('getpolicyinfo')">Get Policy Info</button></li>

					</ul>
					<br /> <b>Files in Folders</b><br />
					<ul  class="gpmenu">
						<li><button type="button" class="button" name="getfileinfo"
								onclick="refresh('getfileinfo')">Info</button></li>
						<li><button type="button" class="button" name="uploadFile"
								onclick="refresh('addfile')">Add</button></li>
						<li><button type="button" class="button" name="sendfile"
								onclick="refresh('sendfile')">Send</button></li>
						<li><button type="button" class="button" name="downloadfile1"
								onclick="refresh('downloadafile1')">Download</button>
						</li>
						<li><button type="button" class="button" name="renamefile"
								onclick="refresh('renamefile')">Rename</button>
						</li>
						<li><button type="button" class="button" class="button"
								name="movefile" onclick="refresh('movefile')">Move</button>
						</li>
						<li><button type="button" class="button" name="deletefile"
								onclick="refresh('deletefile')">Delete</button>
						</li>
						<li><button type="button" class="button" name="filerevisions"
								onclick="refresh('filerevisions')">Revisions</button>
						</li>


					</ul>
					<br /> <b>Folders</b><br />
					<ul class="gpmenu">
						<li><button type="button" class="button" name="list"
								onclick="refresh('getfolderinfo')">Info</button></li>
						<li><button type="button" class="button" name="createfolder"
								onclick="refresh('createfolder')">Create</button></li>
						<li><button type="button" class="button" name="renamefolder"
								onclick="refresh('renamefolder')">Rename</button>
						</li>
						<li><button type="button" class="button" name="movefolder"
								onclick="refresh('movefolder')">Move</button>
						</li>
						<li><button type="button" class="button" name="deletefolder"
								onclick="refresh('deletefolder')">Delete</button>
						</li>
						<li><button type="button" class="button" name="storagerevisions"
								onclick="refresh('storagerevisions')">Revisions</button>
						</li>

					</ul>
					<br /> <b>Share</b><br />
					<ul class="gpmenu">
						<li><button type="button" class="button" name="sharefolder"
								onclick="refresh('sharefolder')">Share Folder</button></li>
						<li><button type="button" class="button" name="unsharefolder"
								onclick="refresh('unsharefolder')">Unshare Folder</button></li>
						<li><button type="button" class="button" name="getshareinfo"
								onclick="refresh('getshareinfo')">Get Share Info</button></li>
					</ul>
				</div>
			</td>

			<td id="td1" id="parent">
				<fieldset id="viewform">
					<h2>Input</h2>
				</fieldset>

				<fieldset id="field1">
					<div id="spinner" class="spinner"></div>
					<h2 class="textt">&nbsp;&nbsp;Response:</h2>
					<textarea id="texxt" rows="30" cols="120" readonly="readonly"></textarea>
				</fieldset>
			</td>
		</tr>
	</table>

</body>
</html>
