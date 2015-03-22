<?php

require_once('constants.php');

function sendRequest($data){

    $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
    $result = socket_connect($socket, SERVER_IP, SERVER_PORT) or die("Could not connect to server\n");

    socket_write($socket, $data, strlen($data)) or die("Could not send data to server\n");

    $result = socket_read($socket, 2048 * 5) or die("Could not read server response\n");

    socket_close($socket);
    return $result;
}

function processForm($postArray){
    $submit = null;

    if(isset($postArray)){
        foreach($postArray as $key => $value){
            if(preg_match("/submit_(\\w+)/", $key)){
                $submit = $key;
                break;
            }
        }

        $arr = explode("_", $submit);

        $request_data = array(
            "table" => $arr[1],
            "operation" => $arr[2],
            "data" => array()
        );

        foreach($postArray as $key => $value){
            if(!preg_match("/submit_(\\w+)/", $key)){
                if($value!=""){
                    $request_data['data'][$key] = $value;
                }
            }
        }

        $request_data = json_encode($request_data) . "\n";

        return $request_data;
    }
}

function displayTable($result, $table, $operation){
    if($operation != "delete"){
        $array = json_decode($result, true);

        echo "<h4>{$table} - {$operation}</h4>";
        echo "<hr>";

        echo("<table class='table table-striped table-bordered'>");
        echo "<th>" . "Id" . "</th>";

        if($table != "edge"){
            echo "<th>" . "Name" . "</th>";
        }
        if($table == "node"){
            echo "<th>" . "Type_Id" . "</th>";
        }
        if($table == "edge"){
            echo "<th>" . "From_Id" . "</th>";
            echo "<th>" . "To_Id" . "</th>";
        }

        foreach($array as $ele => $item){
            echo("<tr>");
            foreach($item as $ele => $value){
                echo "<td>" . $value . "</td>";
            }

            echo("</tr>");
        }
        echo("</table>");
    }
}

function generateSelectList($list){
    foreach($list as $item){
        echo "<option value=" . $item['id'] . ">" . $item['name'] . "</option>";
    }
}

function buildRequest($table, $operation, $data = array()){
    $request = array(
        "table" => $table,
        "operation" => $operation,
        "data" => $data
    );

    return json_encode($request) . "\n";
}