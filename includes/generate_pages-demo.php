<?php	
//echo "<pre>";print_r($_REQUEST);
$maxPage	= ceil($total/$limit); 
$self 		= $_SERVER['PHP_SELF'];
$nav 		= ''; 
$showLimit 	= 4;
echo 'scrpath = '.$srcpath;
if($pageNum <= $showLimit)
	$page1 	= 1;
else
	$page1 	= $pageNum-$showLimit;
if($pageNum >= $maxPage-$showLimit)
	$page2 	= $maxPage;
else
	$page2 	= $pageNum+$showLimit;
for($page = $page1; $page <= $page2; $page++)		
{ 
	if ($page == $pageNum) 
		$nav .= "<div class='page_nav' style='float:left;'><a class='active'>$page</a></div>";   // no need to create a link to current page 
	else 
		$nav .= " <div class='page_nav' style='float:left;'><a href=\"?".$srcpath.$page." \">$page</a></div>"; 
}
if ($pageNum > 1) 
{ 
	$page = $pageNum - 1; 
	if($page != 1)
		$prev = "<div class='page_nav' style='float:left;'><a href=\"?".$srcpath.$page." \">Prev</a></div>";
	$first = "<div class='page_nav' style='float:left;'><a href=\"?".$srcpath."1\" class='".$class1."'>First</a></div>"; 
}		
if ($pageNum < $maxPage) 
{ 
	$page = $pageNum + 1;
	if($page != $maxPage)
		$next = "<div class='page_nav' style='float:left;'><a href=\"?".$srcpath.$page." \">Next</a></div>"; 
	$last = "<div class='page_nav' style='float:left;'><a href=\"?".$srcpath.$maxPage." \">Last</a></div>";
} 
if($nav != "<div class='page_nav' style='float:left;'><a class='active'>1</a></div>")
{
	$smarty->assign("first",$first);
	$smarty->assign("prev",$prev);
	$smarty->assign("nav",$nav);
	$smarty->assign("next",$next);
	$smarty->assign("last",$last);
	$smarty->assign("maxPage",$maxPage);
}
?>