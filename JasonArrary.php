<?php

include "dbconnection.php";

    //fetch table rows from mysql db
    $sql = " SELECT * FROM `10008` ";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

//create an array
$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
}
echo json_encode($emparray);

//close the db connection
mysqli_close($connection);

?>