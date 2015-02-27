<?php

$host="10.0.0.2";
$port=6967;
$data = array(
    "table" => "node",
    "method" => "add",
    "data" => array(
        "name" => "nakul"
    )
);
$data = json_encode($data)."\n";

$message="Hello! We are connected\n";
echo "Message to server:".$data;
$socket= socket_create(AF_INET,SOCK_STREAM,0) or die("Could not create socket\n");
$result = socket_connect($socket, $host, $port) or die("Could not connect to server\n");
// send string to server
socket_write($socket, $data, strlen($data)) or die("Could not send data to server\n");
// get server response
$result = socket_read ($socket, 2048) or die("Could not read server response\n");
echo "Reply From Server  :".$result;
// close socket
socket_close($socket);

