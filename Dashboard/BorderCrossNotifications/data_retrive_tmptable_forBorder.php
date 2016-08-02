<?php
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
        echo json_encode;

    }
}



$postingDataPhp = (int)$_POST['postingData'];  //post karapu data ,udata yana namin labala gani.. -->
//$postingDataPhp = 10003;
$hello = new data_retrive_tmptable();
$ResponseData = $hello->get_data($postingDataPhp);
echo $ResponseData;

/* <?php
$tbl="10001";
include "data_retrive_tmptable.inc";
$hello =new data_retrive_tmptable();
$hello2 = array();
$hello2 = $hello->get_data($tbl);
?>*/
?>
