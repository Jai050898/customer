<?php
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
	public $id;
        public $Fields;
        public $Where;
	public $profile;
	public $conn;
	
	#Methods
	
	#***************************************************#
	#Constructor
	#***************************************************#
	function __construct($conn, $id='')
	{
		$this->con_admin_string=$conn;
		$this->id=$id;
		$this->profile['invoiceNumber']='';
		$this->profile['invoiceAmount']='';
                $this->profile['is_link_generated']='Y';
	}
	#***************************************************#
	
	#***************************************************#
	#Get the Invoice profile
	#***************************************************#
	function getprofile()
	{
		$res=$this->con_admin_string->Execute("Select * from onlinepayments where id=$this->id");
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
	
	#edit the Invoice
	#***************************************************#
	
	
	#***************************************************#
	#Delete the Invoice
	#***************************************************#
	function delInvoice($id)
	{
		$res=$this->con_admin_string->Execute("Delete from onlinepayments where id=".$id,'delete');
		return $res;
	}
	
	#***************************************************#
	
	#***************************************************#
	#Add a Invoice
	#***************************************************#
	function addInvoice()
	{
		$res=$this->con_admin_string->Insert('onlinepayments',$this->profile);
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
		$res=$this->con_admin_string->Update('onlinepayments',$this->profile,'id',$this->id);
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
	
                $res=$this->con_admin_string->Execute("Select * from onlinepayments order by invoiceNumber desc");
                return $res;
	 
	 }
	 #***************************************************#
         
         
         #***************************************************#
	#Fetch  invoice by Condition  //CUSTOM FUNCTION
	#***************************************************#
	 function getInvoiceWhere($Fields, $Where)
	 {
                $res=$this->con_admin_string->Execute("Select ".$Fields." from onlinepayments WHERE".$Where);
                return $res;
	 
	 }
	 #***************************************************#
         
         function updateInvoiceLink() {
                $res=$this->con_admin_string->Update('onlinepayments',$this->profile,'id',$this->id);
                return $res;
         }
         
         /*
         
         function destruct(){
             $this->con_admin_string->__destruct();
         }
          * 
          */

}



?>
