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

session_start();
if ((empty($_SESSION['sHost'])) || (empty($_SESSION['sApp']))) {

	header('Location: ./SampleApp.php');
}else if (empty($_SESSION['sEmail']) || (empty($_SESSION['sPass']))){
	header('Location: ./SampleApp.php');
}
?>

<html>


<body>

	<div id="send">
		<h2>Send and Receive</h2>
	</div>


	<div id="store">
		<h2>Storage and Share</h2>
	</div>

	<div id="sendlink">
		<a href="javascript:void(0)" class="c1"
			onclick="refreshActions('sendactions','storelink','send')" id="link2">Change
			to Send and Receive Actions</a>
	</div>


	<div id="storelink">
		<a href="javascript:void(0)" class="c1"
			onclick="refreshActions('storeactions','sendlink','store')"
			id="link3">Change to Storage and Share Actions</a>

	</div>

	<div id="storeactions">
		<b>Select an Action:</b><br /> <br /> <b>User</b><br />
		<ul class="gpmenu">
			<li><button type="button" name="getuserinfo" class="button"
					onclick="refresh('getuserinfo')">Get User Info</button>
			</li>
			<li><button type="button" name="getpolicyinfo" class="button"
					onclick="refresh('getpolicyinfo')">Get Policy Info</button>
			</li>

		</ul>
		<br /> <b>Files in Folders</b><br />
		<ul class="gpmenu">
			<li><button type="button" name="getfileinfo" class="button"
					onclick="refresh('getfileinfo')">Info</button>
			</li>
			<li><button type="button" name="uploadFile" class="button"
					onclick="refresh('addfile')">Add</button>
			</li>
			<li><button type="button" name="sendfile" class="button"
					onclick="refresh('sendfile')">Send</button>
			</li>
			<li><button type="button" name="downloadfile1" class="button"
					onclick="refresh('downloadafile1')">Download</button>
			</li>
			<li><button type="button" name="renamefile" class="button"
					onclick="refresh('renamefile')">Rename</button>
			</li>
			<li><button type="button" name="movefile" class="button"
					onclick="refresh('movefile')">Move</button>
			</li>
			<li><button type="button" name="deletefile" class="button"
					onclick="refresh('deletefile')">Delete</button>
			</li>
			<li><button type="button" name="filerevisions" class="button"
					onclick="refresh('filerevisions')">Revisions</button>
			</li>


		</ul>
		<br /> <b>Folders</b><br />
		<ul class="gpmenu">
			<li><button type="button" name="list" class="button"
					onclick="refresh('getfolderinfo')">Info</button>
			</li>
			<li><button type="button" name="createfolder" class="button"
					onclick="refresh('createfolder')">Create</button>
			</li>
			<li><button type="button" name="renamefolder" class="button"
					onclick="refresh('renamefolder')">Rename</button>
			</li>
			<li><button type="button" name="movefolder" class="button"
					onclick="refresh('movefolder')">Move</button>
			</li>
			<li><button type="button" name="deletefolder" class="button"
					onclick="refresh('deletefolder')">Delete</button>
			</li>
			<li><button type="button" name="storagerevisions" class="button"
					onclick="refresh('storagerevisions')">Revisions</button>
			</li>

		</ul>
		<br /> <b>Share</b><br />
		<ul class="gpmenu">
			<li><button type="button" name="sharefolder" class="button"
					onclick="refresh('sharefolder')">Share Folder</button>
			</li>
			<li><button type="button" name="unsharefolder" class="button"
					onclick="refresh('unsharefolder')">Unshare Folder</button>
			</li>
			<li><button type="button" name="getshareinfo" class="button"
					onclick="refresh('getshareinfo')">Get Share Info</button>
			</li>
		</ul>
	</div>

	<div id="sendactions">
		<b>Select an Action:</b><br /> <br /> <b>User</b><br />
		<ul class="gpmenu">
			<li><button type="button" name="getuserinfo" class="button"
					onclick="refresh('getuserinfo')">Get User Info</button>
			</li>
			<li><button type="button" name="getpolicyinfo" class="button"
					onclick="refresh('getpolicyinfo')">Get Policy Info</button>
			</li>


		</ul>
		<br /> <b>Send</b><br />
		<ul class="gpmenu">

			<li><button type="button" name="uploaditem" class="button"
					onclick="refresh('uploaditem')">Upload</button>
			</li>
			<li><button type="button" name="downloadafile" class="button"
					onclick="refresh('downloadafile')">Download</button>
			</li>

		</ul>
		<br /> <b>Items</b><br />
		<ul class="gpmenu">
			<li><button type="button" name="getitemcount" class="button"
					onclick="refresh('getitemcount')">Count</button>
			</li>
			<li><button type="button" name="getlistofitems" class="button"
					onclick="refresh('getitemlist')">List</button></li>
			<li><button type="button" name="getiteminfo" class="button"
					onclick="refresh('getiteminfo')">Info</button>
			</li>
			<li><button type="button" name="changeexpiration" class="button"
					onclick="refresh('changeexpiration')">Change Expiration</button>
			</li>
			<li><button type="button" name="deleteitem" class="button"
					onclick="refresh('deleteitem')">Delete</button>
			</li>

		</ul>
	</div>








	<!--  User APIs -->
	<!-- get user info -->
	<div id="getuserinfo">
		<h2><span class="ttitle">Get User Info:</span></h2>
		<table>
			<tr>
				<td><b>Email*: </b></td>
				<td><input type="text" name="email" id="email1" size="50"
					maxlength="70" value="<?php echo $_SESSION['sEmail']; ?>" /></td>
			</tr>
			<tr>
				<td><b>Auth Token*: </b></td>
				<td><input type="text" name="token" id="token1" size="100"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" />
				</td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label></td>
			</tr>			
			<tr>
				<td colspan="2">
					<button type="button" name="submit" class="button1"
						onclick="dostuff('getuserinfo','StoreMethods.php',document.getElementById('token1').value,document.getElementById('email1').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>


	<!-- get policy info -->
	<div id="getpolicyinfo">
		<h2><span class="ttitle">Get Policy Info:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b></td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" /></td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label></td>
			</tr>			
			<tr>
				<td colspan="2">
					<button type="button" name="submit" class="button1"
						onclick="dostuff('getpolicyinfo','StoreMethods.php',document.getElementById('token').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>

	
	<!-- Files in Folders -->
	<!-- info -->
	<div id="getfileinfo">
		<h2><span class="ttitle">Get File Info:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b>
				</td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" />
				</td>
			</tr>
			<tr>
				<td><b>File Id*: </b>
				</td>
				<td><input type="text" name="fileid" id="fileid" size="50"
					maxlength="500" value="" />
				</td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label>
				</td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('getfileinfo','StoreMethods.php',document.getElementById('token').value,document.getElementById('fileid').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>


	<!-- send -->
	<div id="sendfile">
		<h2><span class="ttitle">Send File:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b>
				</td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" />
				</td>
			</tr>
			<tr>
				<td><b>File id*: </b>
				</td>
				<td><input type="text" name="fileId" id="fileid" size="50"
					maxlength="500" value="" />
				</td>
			</tr>
			<tr>
				<td><b>Recipients*: </b>
				</td>
				<td><input type="text" name="recipients" id="recipients" size="50"
					maxlength="500" value="" />
				</td>
			</tr>
			<tr>
				<td colspan="2"><label id="recipientslist" class="label">Comma
						separated email addresses of the recipients. Fields with * are
						required.</label>
				</td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('sendfile','StoreMethods.php',document.getElementById('token').value,document.getElementById('fileid').value,document.getElementById('recipients').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>


	<!-- Rename -->
	<div id="renamefile">
		<h2><span class="ttitle">Rename File:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b>
				</td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" />
				</td>
			</tr>
			<tr>
				<td><b>New Name*: </b>
				</td>
				<td><input type="text" name="name" id="name" size="50"
					maxlength="500" value="" />
				</td>
			</tr>
			<tr>
				<td><b>File Id*: </b>
				</td>
				<td><input type="text" name="fileid" id="fileid" size="50"
					maxlength="500" value="" />
				</td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label>
				</td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('renamefile','StoreMethods.php',document.getElementById('token').value,document.getElementById('name').value,document.getElementById('fileid').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>

	
	<!-- Move -->
	<div id="movefile">
		<h2><span class="ttitle">Move File:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b>
				</td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" />
				</td>
			</tr>

			<tr>
				<td><b>File Id*: </b>
				</td>
				<td><input type="text" name="fileid" id="fileid" size="50"
					maxlength="500" value="" />
				</td>
			</tr>
			<tr>
				<td><b>Parent Id*: </b>
				</td>
				<td><input type="text" name="parentid" id="parentid" size="50"
					maxlength="500" value="" />
				</td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label>
				</td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('movefile','StoreMethods.php',document.getElementById('token').value,document.getElementById('fileid').value,document.getElementById('parentid').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>

	
	<!-- Delete -->
	<div id="deletefile">
		<h2><span class="ttitle">Delete File:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b>
				</td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" />
				</td>
			</tr>

			<tr>
				<td><b>File Id*: </b>
				</td>
				<td><input type="text" name="fileid" id="fileid" size="50"
					maxlength="500" value="" />
				</td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('deletefile','StoreMethods.php',document.getElementById('token').value,document.getElementById('fileid').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>

	
	<!--File Revisions-->
	<div id="filerevisions">
		<h2><span class="ttitle">Get File Revisions:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b>
				</td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" />
				</td>
			</tr>

			<tr>
				<td><b>File Id*: </b>
				</td>
				<td><input type="text" name="fileid" id="fileid" size="50"
					maxlength="500" value="" />
				</td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('filerevisions','StoreMethods.php',document.getElementById('token').value,document.getElementById('fileid').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>


	<!-- download file -->
	<div id="downloadafile1">
		<iframe id="idframe" src="./dwn.php"> </iframe>
	</div>


	<!-- add -->
	<div id="addfile">
		<h2><span class="ttitle">Add File:</span></h2>
		<form enctype="multipart/form-data" id="uploadf"
			action="StoreMethods.php" method="post">
			<table>
				<tr>
					<td><b>Auth Token*: </b>
					</td>
					<td><input type="text" name="token" id="token" size="50"
						maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" />
					</td>
				</tr>
				<tr>
					<td><b>Parent Id: </b>
					</td>
					<td><input type="text" name="parent" id="parent" size="50"
						maxlength="500" value="" />
					</td>
				</tr>
				<tr>
					<td><input type="hidden" id="method" name="method"
						value="initupload" />
					</td>
				</tr>
			</table>
		</form>
		</br>
		<table>	
			<tr>
				<b>Browse the File*: </b><td colspan="2"><form id="form1" class="autoform" enctype='multipart/form-data' action='' method='post'><div id="prog1" class="black">Not Uploaded</div> <input type="file" class="autoform" name="fname" size="80"/> <input type="hidden" id="bid1" name="bid" value=""/> </form>
			    </td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are required.</label>
				</td>
			</tr>
			<tr><td colspan="2"><input type="hidden" value="0" id="someValue" /><input type="hidden" value="1" id="val" /><input type="submit" value="Submit" class="button1" onClick="uploadForm('1')" /></td></tr>
		</table>
	</div>

	
	<!-- add -->
	<div id="addfilerez">
		<h2><span class="ttitle">Add File:</span></h2>
		<form enctype="multipart/form-data" id="uploadf"
			action="StoreMethods.php" method="post">
			<table>
				<tr>
					<td><b>Auth Token*: </b>
					</td>
					<td><input type="text" name="token" id="token" size="50"
						maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" />
					</td>
				</tr>
				<tr>
					<td><b>Browse File*: </b>
					</td>
					<td><input type="file" name="path" id="path" size="80"
						maxlength="500" value="" /> <input type="hidden" id="method"
						name="method" value="addfile" />
					</td>
				</tr>
				<tr>
					<td colspan="2"><label id="label" class="label">Path to the file to
							be uploaded.</label>
					</td>
				</tr>
				<tr>
				
				
				<tr>
					<td><b>Parent Id: </b>
					</td>
					<td><input type="text" name="parent" id="parent" size="50"
						maxlength="500" value="" />
					</td>
				</tr>
				<tr>
					<td colspan="2"><label id="label" class="label">Fields with * are
							required.</label>
					</td>
				</tr>				
				<tr>
					<td colspan="2"><input type="submit" value="Submit"
						onClick="prepareForm()" />
					</td>
				</tr>
			</table>
		</form>
	</div>

	
	<!-- send -->
	<div id="sendFile">
		<h2><span class="ttitle">Send File:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b>
				</td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" />
				</td>
			</tr>
			<tr>
				<td><b>File id*: </b>
				</td>
				<td><input type="text" name="fileId" id="fileid" size="50"
					maxlength="500" value="" />
				</td>
			</tr>
			<tr>
				<td><b>Recipients*: </b>
				</td>
				<td><input type="text" name="recipients" id="recipients" size="50"
					maxlength="500" value="" />
				</td>
			</tr>
			<tr>
				<td colspan="2"><label id="recipientslist" class="label">Comma
						separated email addresses of the recipients.</label>
				</td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label>
				</td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('sendfile','StoreMethods.php',document.getElementById('token').value,document.getElementById('fileid').value,document.getElementById('recipients').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>


	<!-- Folders -->
	<!-- List -->
	<div id="getfolderinfo">
		<h2><span class="ttitle">Get Folder Info:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b></td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" /></td>
			</tr>
			<tr>
				<td><b>Folder Id*: </b></td>
				<td><input type="text" name="folderid" id="folderid" size="50"
					maxlength="500" value="" /></td>
			</tr>
			<tr>
				<td><b>Include Files: </b></td>
				<td><input type="checkbox" name="includefiles" checked="checked"
					id="includefiles" /></td>
			</tr>
			<tr>
				<td><b>Include Folders: </b></td>
				<td><input type="checkbox" name="includefolders" checked
					id="includefolders" /></td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label></td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('getfolderinfo','StoreMethods.php',document.getElementById('token').value,document.getElementById('folderid').value,document.getElementById('includefiles').checked,document.getElementById('includefolders').checked)">Submit</button>
				</td>
			</tr>
		</table>
	</div>


	<!-- Create -->
	<div id="createfolder">
		<h2><span class="ttitle">Create Folder:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b></td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" /></td>
			</tr>
			<tr>
				<td><b>Name*: </b></td>
				<td><input type="text" name="foldername" id="foldername" size="50"
					maxlength="500" value="" /></td>
			</tr>
			<tr>
				<td><b>Parent Id: </b></td>
				<td><input type="text" name="parentid" id="parentid" size="50"
					maxlength="500" value="" /></td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label></td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('createfolder','StoreMethods.php',document.getElementById('token').value,document.getElementById('foldername').value,document.getElementById('parentid').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>

	
	<!-- Rename -->
	<div id="renamefolder">
		<h2><span class="ttitle">Rename Folder:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b></td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" /></td>
			</tr>
			<tr>
				<td><b>New Name*: </b></td>
				<td><input type="text" name="foldername" id="foldername" size="50"
					maxlength="500" value="" /></td>
			</tr>
			<tr>
				<td><b>Folder Id*: </b></td>
				<td><input type="text" name="folderid" id="folderid" size="50"
					maxlength="500" value="" /></td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label></td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('renamefolder','StoreMethods.php',document.getElementById('token').value,document.getElementById('foldername').value,document.getElementById('folderid').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>

	
	<!-- Move Folder-->
	<div id="movefolder">
		<h2><span class="ttitle">Move Folder:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b></td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" /></td>
			</tr>

			<tr>
				<td><b>Folder Id*: </b></td>
				<td><input type="text" name="folderid" id="folderid" size="50"
					maxlength="500" value="" /></td>
			</tr>
			<tr>
				<td><b>Parent Id*: </b></td>
				<td><input type="text" name="parentid" id="parentid" size="50"
					maxlength="500" value="" /></td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label></td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('movefolder','StoreMethods.php',document.getElementById('token').value,document.getElementById('folderid').value,document.getElementById('parentid').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>

	
	<!-- Delete Folder-->
	<div id="deletefolder">
		<h2><span class="ttitle">Delete Folder:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b></td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" /></td>
			</tr>

			<tr>
				<td><b>Folder Id*: </b></td>
				<td><input type="text" name="folderid" id="folderid" size="50"
					maxlength="500" value="" /></td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label></td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('deletefolder','StoreMethods.php',document.getElementById('token').value,document.getElementById('folderid').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>

	
	<!--storage Revisions-->
	<div id="storagerevisions">
		<h2><span class="ttitle">Get Storage Revisions:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b>
				</td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" />
				</td>
			</tr>

			<tr>
				<td><b>From Revision: </b>
				</td>
				<td><input type="text" name="fromrevision" id="fromrevision"
					size="50" maxlength="500" value="" />
				</td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('storagerevisions','StoreMethods.php',document.getElementById('token').value,document.getElementById('fromrevision').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>

	
	<!-- Share -->
	<!-- Share Folder-->
	<div id="sharefolder">
		<h2><span class="ttitle">Share Folder:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b></td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" /></td>
			</tr>
			<tr>
				<td><b>FolderId*: </b></td>
				<td><input type="text" name="folderid" id="folderid" size="50"
					maxlength="500" /></td>
			</tr>
			<tr>
				<td><b>Email*: </b></td>
				<td><input type="text" name="email" id="email" size="50"
					maxlength="500" /></td>
			</tr>
			<tr>
				<td><b>Message: </b></td>
				<td><input type="text" name="message" id="message" size="50"
					maxlength="500" value="" /></td>
			</tr>
			<tr>
				<td><b>Permission: </b></td>
				<td><select name="permission" id="permission">
						<option value="read">read</option>
						<option value="write">write</option>
				</select>
				</td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label></td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('sharefolder','StoreMethods.php',document.getElementById('token').value,document.getElementById('folderid').value,document.getElementById('email').value,document.getElementById('message').value,getOption('permission'))">Submit</button>
				</td>
			</tr>
		</table>
	</div>

	
	<!-- Unshare Folder-->
	<div id="unsharefolder">
		<h2><span class="ttitle">Unshare Folder:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b></td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" /></td>
			</tr>
			<tr>
				<td><b>Folder Id*: </b></td>
				<td><input type="text" name="folderid" id="folderid" size="50"
					maxlength="500" value="" /></td>
			</tr>
			<tr>
				<td><b>Email*: </b></td>
				<td><input type="text" name="email" id="email" size="50"
					maxlength="500" value="" /></td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label></td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('unsharefolder','StoreMethods.php',document.getElementById('token').value,document.getElementById('folderid').value,document.getElementById('email').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>


	<!-- Get Share Info-->
	<div id="getshareinfo">
		<h2><span class="ttitle">Get Share Info:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b></td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" /></td>
			</tr>
			<tr>
				<td><b>Folder Id*: </b></td>
				<td><input type="text" name="folderid" id="folderid" size="50"
					maxlength="500" value="" /></td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label></td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('getshareinfo','StoreMethods.php',document.getElementById('token').value,document.getElementById('folderid').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>

	
	<!-- SEND -->
	<!-- Upload = get Upload URL, Upload, Commit Item Send -->
	<div id="uploaditem">
		<h2><span class="ttitle">Upload:</span></h2>
		<form enctype="multipart/form-data" id="uploadf"
			action="SendMethods.php" method="post">
			<table>
				<tr>
					<td><b>Auth Token*: </b>
					</td>
					<td><input type="text" name="token" id="token" size="50"
						maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" />
					</td>
				</tr>
				<tr>
					<td><b>Recipients*: </b>
					</td>
					<td><input type="text" name="recipients" id="recipients" size="50"
						maxlength="500" value="" />
					</td>
				</tr>

				<tr>
					<td colspan="2"><label id="recipientslist" class="label">Comma
							separated email addresses of the recipients.</label>
					</td>
				</tr>
				<tr>
					<td><b>File Count: </b>
					</td>
					<td><input type="text" name="fileCount" id="fileCount" size="50"
						maxlength="500" value="" />
					</td>
				</tr>
				<tr>
					<td><b>Subject: </b>
					</td>
					<td><input type="text" name="subject" id="subject" size="50"
						maxlength="200" value="" />
					</td>
				</tr>
				<tr>
					<td><b>Message: </b>
					</td>
					<td><input type="text" name="message" id="message" size="50"
						maxlength="2000" value="" />
					</td>
				</tr>
				<tr>
					<td><b>Verify identity: </b>
					</td>
					<td><input type="checkbox" name="verifyid" id="verifyid" />
					</td>
				</tr>
				<tr>
					<td><b>Return Receipt: </b>
					</td>
					<td><input type="checkbox" name="returnreceipt" id="returnreceipt" />
					</td>
				</tr>
				<tr>
					<td><b>Password: </b>
					</td>
					<td><input type="text" name="psw" id="psw" size="50"
						maxlength="500" value="" />
					</td>
				</tr>
				<tr>
					<td><b>Send Email Notification: </b>
					</td>
					<td><input type="checkbox" name="sendemailnotif"
						id="sendemailnotif" checked />
					</td>
				</tr>
				<tr>
					<td><b>Expiration: </b>
					</td>
					<td><input type="text" name="expiration" id="expiration" size="50"
						maxlength="500" value="" />
					</td>
				</tr>
				<tr>
					<td colspan="2"><label id="label" class="label">Expiration in
							minutes (0 = never expire). Fields with * are required. </label>
					</td>
				</tr>
				<tr>
					<td><input type="hidden" id="method" name="method"
						value="preparesend" />
					</td>
				</tr>
			</table>	
		</form>
		</br>
		<table>
				<tr>
					<td colspan="2"><input type="hidden" value="0" id="val" /> <a
						href="javascript:void(0)" class="c2" onclick="addField();">Add File</a></td>
				</tr>
				<tr>
					<td><div id="labelDiv"></div></td>
					<td><div id="mainDiv"></div></td>
				</tr>
				<tr><td colspan="2"><input type="hidden" value="0" id="someValue" /><input type="submit" value="Submit" class="button1" style="margin-left:10px;" onClick="uploadForm(document.getElementById('fileCount').value)" /></td></tr>
		</table>
	</div>

	
	<!-- download file -->
	<div id="downloadafile">
		<iframe  id="idframe1" src="./dwn1.php"> </iframe>
	</div>

	
	<!-- Items -->
	<!-- Count-->
	<div id="getitemcount">
		<h2><span class="ttitle">Get Item Count:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b></td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" /></td>
			</tr>
			<tr>
				<td><b>Sent Items: </b></td>
				<td><input type="checkbox" name="sentitems" id="sentitems" checked />
				</td>
			</tr>
			<tr>
				<td><b>Filter: </b></td>
				<td><select name="filter1" id="filter1">
						<option value="All">All</option>
						<option value="Expired">Expired</option>
						<option value="Unexpired" selected>Unexpired</option>
				</select>
				</td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are required.</label></td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('getitemcount','SendMethods.php',document.getElementById('token').value,document.getElementById('sentitems').checked,getOption('filter1'));">Submit</button>
				</td>
			</tr>
		</table>
	</div>

	
	<!--  List-->
	<div id="getitemlist">
		<h2><span class="ttitle">Get Item List:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b></td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" /></td>
			</tr>
			<tr>
				<td><b>Sent Items: </b></td>
				<td><input type="checkbox" name="sentitems" checked id="sentitems" />
				</td>
			</tr>
			<tr>
				<td><b>Filter: </b></td>
				<td><select name="filter2" id="filter2">
						<option value="All">All</option>
						<option value="Expired">Expired</option>
						<option value="Unexpired" selected>Unexpired</option>
				</select></td>
			</tr>
			<tr>
				<td><b>Include File Info: </b></td>
				<td><input type="checkbox" name="includefileinfo"
					id="includefileinfo" /></td>
			</tr>
			<tr>
				<td><b>Include Tracking: </b></td>
				<td><input type="checkbox" name="includetracking"
					id="includetracking" /></td>
			</tr>
			<tr>
				<td><b>Page: </b></td>
				<td><input type="text" name="page" id="page" size="50"
					maxlength="500" value="1" /></td>
			</tr>
			<tr>
				<td><b>Page Length: </b></td>
				<td><input type="text" name="pagelength" id="pagelength" size="50"
					maxlength="500" value="20" /></td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label></td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('getitemlist','SendMethods.php',document.getElementById('token').value,document.getElementById('sentitems').checked,getOption('filter2'),document.getElementById('includefileinfo').checked,document.getElementById('includetracking').checked,document.getElementById('page').value,document.getElementById('pagelength').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>

	
	<!-- Info-->
	<div id="getiteminfo">
		<h2><span class="ttitle">Get Item Info:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b></td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" /></td>
			</tr>
			<tr>
				<td><b>Item Id*: </b></td>
				<td><input type="text" name="itemid" id="itemid" size="50"
					maxlength="500" value="" /></td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label></td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('getiteminfo','SendMethods.php',document.getElementById('token').value,document.getElementById('itemid').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>

	
	<!--Change Expiration-->
	<div id="changeexpiration">
		<h2><span class="ttitle">Change Expiration of a Sent Item:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b></td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" /></td>
			</tr>
			<tr>
				<td><b>Item Id*: </b></td>
				<td><input type="text" name="itemid" id="itemid" size="50"
					maxlength="500" value="" /></td>
			</tr>
			<tr>
				<td><b>Expiration*: </b></td>
				<td><input type="text" name="expiration" id="expiration" size="50"
					maxlength="500" value="" /></td>
			</tr>
			<tr>
				<td colspan="2"><label id="labelexpiration" class="label">Expiration
						duration in minutes. A value of 0 means that the file never
						expires. Fields with * are
						required.</label>
				</td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('changeexpiration','SendMethods.php',document.getElementById('token').value,document.getElementById('itemid').value,document.getElementById('expiration').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>

	
	<!--  Delete-->
	<div id="deleteitem">
		<h2><span class="ttitle">Delete Item:</span></h2>
		<table>
			<tr>
				<td><b>Auth Token*: </b></td>
				<td><input type="text" name="token" id="token" size="50"
					maxlength="500" value="<?php echo $_SESSION['sToken']; ?>" /></td>
			</tr>
			<tr>
				<td><b>Item Id*: </b></td>
				<td><input type="text" name="itemid" id="itemid" size="50"
					maxlength="500" value="" /></td>
			</tr>
			<tr>
				<td colspan="2"><label id="label" class="label">Fields with * are
						required.</label></td>
			</tr>			
			<tr>
				<td colspan="2"><button type="button" name="submit" class="button1"
						onclick="dostuff('deleteitem','SendMethods.php',document.getElementById('token').value,document.getElementById('itemid').value)">Submit</button>
				</td>
			</tr>
		</table>
	</div>

</body>
</html>
