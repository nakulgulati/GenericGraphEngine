<?php
if(isset($_POST['Submit_type_add'])|| isset($_POST['Submit_type_delete'])|| isset($_POST['Submit_type_update'])|| isset($_POST['Submit_type_read'])||  isset($_POST['Submit_edge_add'])|| isset($_POST['Submit_edge_delete'])|| isset($_POST['Submit_edge_update'])|| isset($_POST['Submit_edge_read'])||(isset($_POST['Submit_node_add'])|| isset($_POST['Submit_node_delete'])|| isset($_POST['Submit_node_update'])|| isset($_POST['Submit_node_read']))) {

if(isset($_POST['Submit_type_add'])) {

    $name = $_POST['name'];

    $data = array("table" => "type",
        "method" => "add",
        "name" => $name
    );
}

    if(isset($_POST['Submit_type_delete'])) {

        $id = $_POST['id'];

        $data = array("table" => "type",
            "method" => "delete",
            "id" => $id
        );
    }

    if(isset($_POST['Submit_type_update'])) {

        $name = $_POST['name'];
        $id = $_POST['id'];

        $data = array("table" => "type",
            "method" => "update",
            "id"=> $id,
            "name" => $name

        );
    }
    if(isset($_POST['Submit_type_read'])) {

        $field= $_POST['field'];

        $data = array("table" => "type",
            "method" => "read",
            "field" => $field
        );
    }

    if(isset($_POST['Submit_edge_add'])) {

        $from_id = $_POST['from_id'];
        $to_id = $_POST['to_id'];
        $data = array("table" => "edge",
            "method" => "add",
            "from_id" => $from_id,
            "to_id" => $to_id
        );
    }

    if(isset($_POST['Submit_edge_delete'])) {

        $id = $_POST['id'];
        $from_id = $_POST['from_id'];
        $to_id = $_POST['to_id'];

        if(!empty($id))
        {
            $data = array("table" => "edge",
                "method" => "delete",
                "id" => $id);
        }
        else
        {
            $data = array("table" => "edge",
                "method" => "delete",
                "from_id" => $from_id,
                "to_id" => $to_id);
        }

    }

    if(isset($_POST['Submit_edge_update'])) {

        $id = $_POST['id'];
        $from_id = $_POST['from_id'];
        $to_id = $_POST['to_id'];
        $n_to_id = $_POST['new_to_id'];

        if(!empty($id))
        {
            $data = array("table" => "edge",
                "method" => "update",
                "id" => $id,
                "n_to_id" => $n_to_id
            );
        }
        else
        {
            $data = array("table" => "edge",
                "method" => "update",
                "from_id" => $from_id,
                "to_id" => $to_id,
                "n_to_id" => $n_to_id
            );
        }
    }
    if(isset($_POST['Submit_edge_read'])) {
        $from_id = $_POST['from_id'];
        $field= $_POST['field'];

        $data = array("table" => "edge",
            "method" => "read",
            "from_id" => $from_id,
            "field" => $field
        );
    }
    if(isset($_POST['Submit_node_add'])) {

        $name = $_POST['name'];
        $type_id = $_POST['type_id'];
        $data = array("table" => "node",
            "method" => "add",
            "name" => $name,
            "type_id" => $type_id
        );
    }

    if(isset($_POST['Submit_node_delete'])) {

        $id = $_POST['id'];

        $data = array("table" => "node",
            "method" => "delete",
            "id" => $id
        );
    }

    if(isset($_POST['Submit_node_update'])) {


        $id = $_POST['id'];
        $name = $_POST['name'];
        $type_id = $_POST['type_id'];

        $data = array("table" => "node",
            "method" => "update",
            "id"=> $id,
            "(name,type_id)" => $name.",".$type_id
        );
    }
    if(isset($_POST['Submit_node_read'])) {

        $field= $_POST['field'];

        $data = array("table" => "node",
            "method" => "read",
            "field" => $field
        );
    }




    $data=json_encode($data)."\n";

    print_r($data);


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
/*
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
    }*/
}
else {
    print("Submit Failed!");

}


?>

