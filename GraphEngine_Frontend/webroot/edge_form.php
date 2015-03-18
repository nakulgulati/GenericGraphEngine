<html>
<head>
    <title>Edge Form</title>
</head>
<body>
<form class="form-horizontal" name="edge_add" method="post" style="text-align: center">
    <div><h3>Add</h3></div>
    <div class="form-group">
        <label for="from_id" class="col-sm-2 control-label">From ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="from_id" placeholder="Enter From ID">
        </div>
        <label for="to_id" class="col-sm-2 control-label">To ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="to_id" placeholder="Enter To ID">
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default"  Name = "Submit_edge_add">Submit</button>
        </div>
    </div>
</form>
<hr style="width: 100px">
<form class="form-horizontal" name="edge_delete" method="post" style="text-align: center">
    <div><h3>Delete</h3></div>
    <div class="form-group">
        <label for="id" class="col-sm-2 control-label"> ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" placeholder="Enter ID">
        </div>
        <label for="from_id" class="col-sm-2 control-label">From ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="from_id" placeholder="Enter From ID">
        </div>
        <label for="to_id" class="col-sm-2 control-label">To ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="to_id" placeholder="Enter To ID">
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default"  Name = "Submit_edge_delete">Submit</button>
        </div>
    </div>
</form>
<hr style="width: 100px">
<form class="form-horizontal" name="edge_delete" method="post" style="text-align: center">
    <div><h3>Update</h3></div>
    <div class="form-group">
        <label for="id" class="col-sm-2 control-label"> ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" placeholder="Enter ID">
        </div>
        <label for="from_id" class="col-sm-2 control-label">From ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="from_id" placeholder="Enter From ID">
        </div>
        <label for="to_id" class="col-sm-2 control-label">To ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="to_id" placeholder="Enter To ID">
        </div>
        <label for="to_id" class="col-sm-2 control-label">New To ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="new_to_id" placeholder="Enter New To ID">
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default"  Name = "Submit_edge_update">Submit</button>
        </div>
    </div>
</form>
<hr width="100px">
<form class="form-horizontal" name="edge_add" method="post" style="text-align: center">
    <div><h3>Read</h3></div>
    <div class="form-group">
        <label for="from_id" class="col-sm-2 control-label">From ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="from_id" placeholder="Enter From ID">
        </div>
        <label for="field" class="col-sm-2 control-label">Field</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="field" placeholder="Enter Field">
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default"  Name = "Submit_edge_read">Submit</button>
        </div>
    </div>
</form>
<hr style="width: 100px">

</body>
</html>