<?php

$host="";
$port=6969;
$message="Hello! We are connected";
echo "Message to server:".$message;
$socket= socket_create(AF_INET,SOCK_STREAM,0) or die("Could not create socket\n");
$result = socket_connect($socket, $host, $port) or die("Could not connect to server\n");
// send string to server
socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n");
// get server response
$result = socket_read ($socket, 2048) or die("Could not read server response\n");
echo "Reply From Server  :".$result;
// close socket
socket_close($socket);

