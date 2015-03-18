<?php

require_once('constants.php');

function sendRequest($data){

    $socket= socket_create(AF_INET,SOCK_STREAM,0) or die("Could not create socket\n");
    $result = socket_connect($socket, SERVER_IP, SERVER_PORT) or die("Could not connect to server\n");

    socket_write($socket, $data, strlen($data)) or die("Could not send data to server\n");

    $result = socket_read ($socket, 2048) or die("Could not read server response\n");

    socket_close($socket);
    return $result;
}

function processForm($postArray){
    $submit = null;

    if(isset($postArray)){
        foreach($postArray as $key => $value){
            if(preg_match("/submit_(\\w+)/",$key)){
                $submit = $key;
                break;
            }
        }

        $arr = explode("_",$submit);

        $request_data = array(
            "table" => $arr[1],
            "operation" => $arr[2],
            "data" => array()
        );

        foreach($postArray as $key => $value){
            if(!preg_match("/submit_(\\w+)/",$key))
                $request_data['data'][$key] = $value;
        }

        return json_encode($request_data);
    }
}

function display($result,$table)
{
    $array = json_decode($result, true);

    echo "List ".$table."<BR>" . "<BR>";
    foreach ($array as $ele => $item) {
        foreach ($item as $ele => $value) {
            echo $ele . " " . $value . " ";
        }
        echo "<BR>";
    }
}

?>