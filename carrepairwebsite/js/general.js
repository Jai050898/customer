function funCheckAll(Form,ArrName,id)
{
	var cnt=0;
	var len=Form.elements[ArrName].length;
	if(typeof(len)!="undefined")
	{
		for(i=0;i<Form.elements[ArrName].length;i++)
			Form.elements[ArrName][i].checked=Form.elements[id].checked;
	}
	else
	Form.elements[ArrName].checked=Form.elements[id].checked;
}