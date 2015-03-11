
<?php
if(isset($_POST['Submit1'])) {
    $name = $_POST['name'];


    $data= array("table"=>"type",
                    "method"=>"add",
                    "data"=>array("name"=>$name)
    );
    $data=json_encode($data)."\n";


    $service_port = 8090;
    $address = '10.0.0.1';
    $timeout = 3;

    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
//socket_set_nonblock($socket);
    $error = NULL;
    $attempts = 0;
    $timeout *= 1000; // adjust because we sleeping in 1 millisecond increments
    $connected = FALSE;
    while (!($connected = @socket_connect($socket, $address, $service_port)) && ($attempts++ < $timeout)) {
        $error = socket_last_error();
        if ($error != SOCKET_EINPROGRESS && $error != SOCKET_EALREADY) {
            echo "Error Connecting Socket: " . socket_strerror($error) . "\n";
            socket_close($socket);
            return NULL;
        }
        usleep(1000);
    }

    socket_write($socket, $data, strlen($data)) or die("\nCould not send data to server\n");
// get server response
//    $read=array($socket);
    $result = socket_read($socket,2048, PHP_NORMAL_READ) or die("\nCould not read server response\n");
    echo "\nReply From Server  :".$result;

    if (!$connected) {
        echo "Error Connecting Socket: Connect Timed Out After " . $timeout / 1000 . " seconds. " . socket_strerror(socket_last_error()) . "\n";
        socket_close($socket);
        return NULL;
    }
}
else {
    print("Submit Failed!");

}


?>

