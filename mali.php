<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple Polygon</title>
</head>
<body>


<?php

//$return_arr = array();

$boat= 0;
    if( isset($_POST['postingData'])  ){
        $boat = $_POST['postingData'];
       // return $boat;

       // $return_arr[0]= $boat;


       // echo json_encode($return_arr);
    }

/*
try {
    $boat = $_POST['postingData'];
    $boat1 = $boat;
//$boat1 = 112;
    $return_arr = array();
    $return_arr[0]= $boat1;

    echo json_encode($return_arr);

} catch (Exception $e) {
    $boat1 = $boat;
//$boat1 = 112;
    $return_arr = array();
    $return_arr[0]= $boat1;

    echo json_encode($return_arr);

}**/

?>


<script>

    var path = ('<?php echo $boat; ?>') ;

    alert(path);

</script>


</body>
</html>

