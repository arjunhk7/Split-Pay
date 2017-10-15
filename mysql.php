<?php

//CREDENTIALS FOR DB
define ('DBSERVER', 'localhost');
define ('DBUSER', 'root');
define ('DBPASS','');
define ('DBNAME','dbname');

//LET'S INITIATE CONNECT TO DB
$connection = mysqli_connect(DBSERVER, DBUSER, DBPASS) or die("Can't connect to server. Please check credentials and try again");
$result = mysqli_select_db(DBNAME) or die("Can't select database. Please check DB name and try again");

//CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];
    $sql = mysqli_query ("SELECT zip, city FROM zips WHERE city LIKE '%{$query}%' OR zip LIKE '%{$query}%'");
	$array = array();
    while ($row = mysqli_fetch_array($sql)) {
        $array[] = array (
            'label' => $row['city'].', '.$row['zip'],
            'value' => $row['city'],
        );
    }
    //RETURN JSON ARRAY
    echo json_encode ($array);
}

?>
