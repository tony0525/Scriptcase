if(isset($_SESSION["Searched"])){
	$LastSearchCriteria = [lastSearch];

	{table.var} = 		trim($LastSearchCriteria[0]);

}
else{
	$LastSearchCriteria = 0;
	echo "<script type='text/javascript'>alert('No Previous Search');</script>";
}
