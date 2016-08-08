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
    return($boatArray) ;
}



class data_retrive_tmptable
{
    public $host = 'localhost';
    public $user = 'root';
    public $pass = '';
    public $db = 'BoatLocator';
    //public $tbl_name=10001;        6.97779 79.210467
    public $return_arr = array();

    function get_data($tbl_name){
        $connection = mysqli_connect($this->host, $this->user,$this->pass,$this->db );
        //  $sect_data_query = "SELECT `latitude`,`longitude` FROM `$tbl_name`";

        $sect_data_query = "SELECT `latitude`,`longitude` FROM `$tbl_name` ORDER BY `$tbl_name`.boat_id  DESC LIMIT 1" ;

        if ($result = mysqli_query($connection,$sect_data_query)) {

            while ($row = mysqli_fetch_assoc($result)) {
                $row_array['lat'] = floatval($row['latitude']);
                $row_array['lng'] = floatval($row['longitude']);

                array_push($this->return_arr, $row_array);
            }
        }


        return json_encode($this->return_arr);
       // echo json_encode;

    }
}

$newOne= array();
$response= array();

function finalLatLonAry(){

    $response = CummBoats();
    $hello = new data_retrive_tmptable();

    $lastOne = array();

    for ($i = 0; $i < sizeof($response); $i++) {

        echo "$response[$i] <br> ";
        $lastOne[$i] = $hello->get_data($response[$i]);
        //  return $lastOne[$i];
       //  echo "you wont array is : $lastOne[$i] <br> ";
      //  array_push($newOne, $lastOne[$i]);
    }
    return $lastOne;
}

$q = finalLatLonAry();
$q[0];
$q[1];
$q[2];

for ($i = 0; $i < sizeof($q); $i++) {

    // echo "$response[$i] <br> ";
    echo "you wont array is : $q[$i] <br> ";
}

//echo json_encode($q);

?>
