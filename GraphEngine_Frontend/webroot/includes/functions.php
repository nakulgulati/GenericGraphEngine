<?php

if ($_POST) {
    if (isset ($_POST['Submit_main'])) {
        first();
    }
    if (isset($_POST['Submit_type_add']) || isset($_POST['Submit_type_delete']) || isset($_POST['Submit_type_update']) || isset($_POST['Submit_type_read']) || isset($_POST['Submit_edge_add']) || isset($_POST['Submit_edge_delete']) || isset($_POST['Submit_edge_update']) || isset($_POST['Submit_edge_read']) || (isset($_POST['Submit_node_add']) || isset($_POST['Submit_node_delete']) || isset($_POST['Submit_node_update']) || isset($_POST['Submit_node_read']))) {
        $data = input_data();
        $result = send($data);
        display($result,$table);
    } else {
        print("Submit Failed!");
    }
}

function input_data()
{

        if (isset($_POST['Submit_type_add'])) {

            $name = $_POST['name'];

            $data = array(
                "table" => "type",
                "method" => "add",
                "data" => array(
                    "name" => $name
                )
            );
        }

        if (isset($_POST['Submit_type_delete'])) {

            $id = $_POST['id'];

            $data = array("table" => "type",
                "method" => "delete",
                "data"=> array(
                    "id" => $id
                )

            );
        }

        if (isset($_POST['Submit_type_update'])) {

            $name = $_POST['name'];
            $id = $_POST['id'];

            $data = array("table" => "type",
                "method" => "update",
                "data" => array(
                    "id" => $id,
                    "name" => $name
                )

            );
        }
        if (isset($_POST['Submit_type_read'])) {

            $field = $_POST['field'];

            $data = array("table" => "type",
                "method" => "read",
                "data"=> array(
                    "field" => $field
                )
            );
        }

        if (isset($_POST['Submit_edge_add'])) {

            $from_id = $_POST['from_id'];
            $to_id = $_POST['to_id'];
            $data = array("table" => "edge",
                "method" => "add",
                "data"=> array(
                    "from_id" => $from_id,
                    "to_id" => $to_id
                )
            );
        }

        if (isset($_POST['Submit_edge_delete'])) {

            $id = $_POST['id'];
            $from_id = $_POST['from_id'];
            $to_id = $_POST['to_id'];

            if (!empty($id)) {
                $data = array("table" => "edge",
                    "method" => "delete",
                    "data"=> array(
                        "id" => $id
                    )
                );
            } else {
                $data = array("table" => "edge",
                    "method" => "delete",
                    "data"=>array(
                        "from_id" => $from_id,
                        "to_id" => $to_id)
                );
            }

        }

        if (isset($_POST['Submit_edge_update'])) {

            $id = $_POST['id'];
            $from_id = $_POST['from_id'];
            $to_id = $_POST['to_id'];
            $n_to_id = $_POST['new_to_id'];

            if (!empty($id)) {
                $data = array("table" => "edge",
                    "method" => "update",
                    "data"=>array(
                        "id" => $id,
                        "n_to_id" => $n_to_id)
                );
            } else {
                $data = array("table" => "edge",
                    "method" => "update",
                    "data"=>array(
                        "from_id" => $from_id,
                        "to_id" => $to_id,
                        "n_to_id" => $n_to_id
                    )
                );
            }
        }
        if (isset($_POST['Submit_edge_read'])) {
            $from_id = $_POST['from_id'];
            $field = $_POST['field'];

            $data = array("table" => "edge",
                "method" => "read",
                "data"=>array(
                    "from_id" => $from_id,
                    "field" => $field)
            );
        }
        if (isset($_POST['Submit_node_add'])) {

            $name = $_POST['name'];
            $type_id = $_POST['type_id'];
            $data = array("table" => "node",
                "method" => "add",
                "data"=>array(
                    "name" => $name,
                    "type_id" => $type_id)
            );
        }

        if (isset($_POST['Submit_node_delete'])) {

            $id = $_POST['id'];

            $data = array("table" => "node",
                "method" => "delete",
                "data"=>array(
                    "id" => $id)
            );
        }

        if (isset($_POST['Submit_node_update'])) {


            $id = $_POST['id'];
            $name = $_POST['name'];
            $type_id = $_POST['type_id'];

            $data = array("table" => "node",
                "method" => "update",
                "data"=>array(
                    "id" => $id,
                    "(name,type_id)" => $name . "," . $type_id)
            );
        }
        if (isset($_POST['Submit_node_read'])) {

            $field = $_POST['field'];

            $data = array("table" => "node",
                "method" => "read",
                "data"=>array(
                    "field" => $field
                )
            );
        }


        $data = json_encode($data) . "\n";

        return $data;

}

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
    return $result;
}
function first()
{
    if (isset($_POST['Submit_main'])) {

        $table = $_POST['table'];

        if($table=="type")
        {
            header("Location:type.php");
        }
        if($table=="node" )
            header("Location:node.php");

        if($table=="edge" )
            header("Location:edge.php");

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