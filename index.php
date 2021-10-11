<?php
// run shell_exec function to execute a command in shell
$shell_runner = shell_exec('ping 8.8.8.8');

// define a pattern for idenfing in preg_match php function
$pattern = '/([a-z])+ = \d+/i';

//get matched data of preg_match_all regular expression php function
$res = preg_match_all( $pattern, $shell_runner,$matched);

// if condition to check its value
if($res){
    $result_array = arrTopretty($matched);
    echo "your connection status is </br>";
    echo " your Sent packet: <strong>" . $result_array[0] ."</strong></br>";
    echo " your Received  packet: <strong>" . $result_array[1] ."</strong></br>";
    echo " your pocket-loss  packet: <strong>" . $result_array[2] ."</strong></br>";
}else {
    echo "please insert a string";
}

// define a foreach loop to loop in matched values
function arrTopretty(array $array) : array{
    $res = array();
    foreach($array[0] as $val){
        $res[] .=  $val;
    }
    return $res;
}