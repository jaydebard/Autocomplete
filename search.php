<?php
// If search box has text in it
if(isset($_GET['term'])) {
	// Database connection
	include('db-info-pdo.php');

	// Create array to hold search info
	$return_arr = array();

	// Prepare the query to select First and Last names for display in the search box
	$stmt = $db->prepare('SELECT DISTINCT FirstName, LastName FROM employees WHERE FirstName LIKE :term ORDER BY FirstName ASC');
	
	// Execute the query
	$stmt->execute(array('term' => '%'.$_GET['term'].'%'));
			
	// Loop over the results
	while($row = $stmt->fetch()) {
	  $return_arr[] =  $row['FirstName'] . ' ' . $row['LastName'];
	}

	// Encode to json format
	echo json_encode($return_arr);
	
	// Close database connection
	$db = null;
}
?>