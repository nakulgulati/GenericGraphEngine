<?php require("includes/header.php");
require("includes/functions.php");
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
$data=json_encode($data)."\n";
//send($data);
?>
<div class="col-lg-6">
<form name="type_add" method="post" action="">
    <h3>Add</h3>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Type Name">
    </div>


    <button type="submit" class="btn btn-default" name="Submit_type_add">Submit</button>
</form>
<hr>
<form name="type_delete" method="post">
    <h3>Delete</h3>
    <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" id="id" placeholder="Enter ID">
    </div>


    <button type="submit" class="btn btn-default" name="Submit_type_delete">Submit</button>
</form>
<hr>
<form name="type_update" method="post">
    <h3>Update</h3>
    <div class="form-group">
        <label for="name">ID</label>
        <input type="text" class="form-control" id="id" placeholder="Enter ID">
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Type Name">
    </div>


    <button type="submit" class="btn btn-default" name="Submit_type_update">Submit</button>
</form>
<hr>
<form name="type_read" method="post">
    <h3>Read</h3>
    <div class="form-group">
        <label for="field">Field</label>
        <input type="text" class="form-control" id="id" placeholder="Enter Field">
    </div>


    <button type="submit" class="btn btn-default" name="Submit_type_read">Submit</button>
</form>
<hr>
    </div>

<?php require("includes/footer.php")
?>