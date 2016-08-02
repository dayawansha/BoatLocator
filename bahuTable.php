<?php

function CummBoats()
{
    $connection = mysqli_connect("localhost", "root", "", "boatlocator");

    $tableList = array();

    $res = mysqli_query($connection, "SHOW TABLES");

    while ($cRow = mysqli_fetch_array($res)) {
        $tableList[] = $cRow[0];

    }
    //print_r($tableList);
    //echo '<br>';
    //echo ($tableList[3]);

    $newArr = array("ad_fishery_officer","boat","boat_owner","coast_guard","device","discrict","district_navy_officer","journy","launching_point", "ministry_officer","user");

    $newArr1 = array();
    $boatArray = array();

   // print_r($tableList);

    foreach($tableList as $val1){
       // echo $val1 ."<Br>";

        if(!in_array($val1,$newArr)){
            array_push($boatArray,$val1);
        }

    }
   // print_r($boatArray);
    //json_encode($boatArray);
     return json_encode($boatArray) ;
}
$response = CummBoats();
echo $response ;

?>