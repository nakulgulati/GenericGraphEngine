<?php
function input_data()
{
    if (isset($_POST['Submit_type_add']) || isset($_POST['Submit_type_delete']) || isset($_POST['Submit_type_update']) || isset($_POST['Submit_type_read']) || isset($_POST['Submit_edge_add']) || isset($_POST['Submit_edge_delete']) || isset($_POST['Submit_edge_update']) || isset($_POST['Submit_edge_read']) || (isset($_POST['Submit_node_add']) || isset($_POST['Submit_node_delete']) || isset($_POST['Submit_node_update']) || isset($_POST['Submit_node_read']))) {

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
    
    else {
        print("Submit Failed!");

    }

}
?>

