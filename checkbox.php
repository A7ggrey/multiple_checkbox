<?php

$selectedItems = $_POST['checkbox'];
$whereClause = "id IN (".implode(",", $selectedItems).")";
$status = $_POST['category'];

// Connect to database and execute update query
$db = new mysqli("localhost", "root", "", "test");
$query = "UPDATE checkbox SET status= $status WHERE $whereClause";
$db->query($query);

echo "<script>alert('Updated ". $db->affected_rows ." items.'); history.back(-1);</script>";

?>