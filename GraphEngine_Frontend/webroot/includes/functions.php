<?php

function send($data){
    $service_port = 8090;
    $address = '172.19.2.75';

    $socket= socket_create(AF_INET,SOCK_STREAM,0) or die("Could not create socket\n");
    $result = socket_connect($socket, $address, $service_port) or die("Could not connect to server\n");
// send string to server
    socket_write($socket, $data, strlen($data)) or die("Could not send data to server\n");
// get server response
    $result = socket_read ($socket, 2048) or die("Could not read server response\n");
    echo "Reply From Server  :".$result;
// close socket
    socket_close($socket);
}

function first()
{
    if (isset($_POST['Submit_main'])) {
        $crud = $_POST['crud'];
        $table = $_POST['table'];

       echo "hi";


    }
    echo "done";
}

?>