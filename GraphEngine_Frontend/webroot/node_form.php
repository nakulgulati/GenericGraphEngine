<?php require_once'includes/functions.php'; ?>
<html>
<head>
    <title>Node Form</title>
</head>
<body>
<form class="form-horizontal" name="node_add" method="post" style="text-align: center">
    <div><h3>Add</h3></div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Enter type">
        </div>
        <label for="name" class="col-sm-2 control-label">Type ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="type"_id placeholder="Enter type id">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" Name = "Submit_node_add" >Submit</button>
        </div>
    </div>
    </form>
<hr width="100px">
<form class="form-horizontal" name="node_delete" method="post" style="text-align: center">
    <div><h3>Delete</h3></div>
    <div class="form-group">
        <label for="id" class="col-sm-2 control-label">ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" placeholder="Enter ID">
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" Name = "Submit_node_delete">Submit</button>
        </div>
    </div>
</form>
<hr width="100px">
<form class="form-horizontal" name="node_update" method="post" style="text-align: center">
    <div><h3>Update</h3></div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" placeholder="Enter ID">
        </div>
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Enter name">
        </div>
        <label for="name" class="col-sm-2 control-label">Type ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="type"_id placeholder="Enter type id">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" Name = "Submit_node_update">Submit</button>
        </div>
    </div>
</form>
<hr width="100px">

<form class="form-horizontal" name="node_read" method="post" style="text-align: center">
    <div><h3>Read</h3></div>
    <div class="form-group">
        <label for="field" class="col-sm-2 control-label">Field</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="field" placeholder="Enter Field">
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" Name = "Submit_node_read">Submit</button>
        </div>
    </div>
</form>
</body>
</html>