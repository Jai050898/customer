<?
###########################################
/*
Class for handling Invoice
Author: 
Date: Sept 4, 2008
*/
###########################################

class Invoice
{

	#variables
	private $id;
	private $profile;
	private $conn;
	
	#Methods
	
	#***************************************************#
	#Constructor
	#***************************************************#
	function __construct($conn,$id='')
	{
		$this->conn=$conn;
		$this->id=$id;
		$this->profile['invoiceNumber']='';
		$this->profile['invoiceAmount']='';
	}
	#***************************************************#
	
	#***************************************************#
	#Get the Invoice profile
	#***************************************************#
	function getprofile()
	{
		$res=$this->conn->Execute("Select * from onlinepayments where id=$this->id");
		if(is_array($res) && !empty($res))
		{
			$this->profile['invoiceNumber']=stripSlash($res[0]['invoiceNumber']);
			$this->profile['invoiceAmount']=stripSlash($res[0]['invoiceAmount']);
			return $this->profile;
		}
		else
		{
			return false;
		}
	}
	#***************************************************#
	
	#***************************************************#
	#Set the property of the Invoice
	#***************************************************#
	function setproperty($propertyname,$value)
	{
		if(array_key_exists($propertyname,$this->profile))
		{
			$this->profile[$propertyname]=$value;
		}
	}
	#***************************************************#
	
	#***************************************************#
	#Get the property of the Invoice
	#***************************************************#
	function getproperty($propertyname)
	{
		if(array_key_exists($propertyname,$this->profile))
		{
			return $this->profile[$propertyname];
		}
		else
		{
			return false;
		}
	}
	#***************************************************#
	
	#***************************************************#
	#Delete the Invoice
	#***************************************************#
	function delInvoice($id)
	{
		$res=$this->conn->Execute("Delete from onlinepayments where id=".$id,'delete');
		return $res;
	}
	#***************************************************#
	
	#***************************************************#
	#Add a Invoice
	#***************************************************#
	function addInvoice()
	{
		$res=$this->conn->Insert('onlinepayments',$this->profile);
		if($res)
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}
	#***************************************************#
	

	#***************************************************#
	#Update a Invoice
	#***************************************************#
	function updateInvoice()
	{
		$res=$this->conn->Update('onlinepayments',$this->profile,'id',$this->id);
		if($res)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	#***************************************************#
	
	
	#***************************************************#
	#Fetch all the invoice
	#***************************************************#
	 function getallInvoice()
	 {
		$res=$this->conn->Execute("Select * from onlinepayments order by invoiceNumber desc");
		return $res;

	 }
	 #***************************************************#


	
}



?>
