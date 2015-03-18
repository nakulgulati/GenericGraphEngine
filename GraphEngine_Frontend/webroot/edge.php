<?php require("includes/header.php");
require("includes/functions.php")?>
<div class="col-lg-6">
    <form name="edge_add" method="post">
        <h3>Add</h3>
        <div class="form-group">
            <label for="from_id">From ID</label>
            <input type="text" class="form-control" id="from_id" placeholder="Enter From ID">
        </div>
        <div class="form-group">
            <label for="to_id">To ID</label>
            <input type="text" class="form-control" id="to_id" placeholder="Enter To ID">
        </div>


        <button type="submit" class="btn btn-default" name="Submit_edge_add">Submit</button>
    </form>
    <hr>
    <form name="edge_delete" method="post">
        <h3>Delete</h3>
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" placeholder="Enter ID">
        </div>
        <div class="form-group">
            <label for="from_id">From ID</label>
            <input type="text" class="form-control" id="from_id" placeholder="Enter From ID">
        </div>
        <div class="form-group">
            <label for="to_id">To ID</label>
            <input type="text" class="form-control" id="to_id" placeholder="Enter To ID">
        </div>


        <button type="submit" class="btn btn-default" name="Submit_edge_delete">Submit</button>
    </form>
    <hr>
    <form name="edge_update" method="post">
        <h3>Update</h3>
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" placeholder="Enter ID">
        </div>
        <div class="form-group">
            <label for="from_id">From ID</label>
            <input type="text" class="form-control" id="from_id" placeholder="Enter From ID">
        </div>
        <div class="form-group">
            <label for="to_id">To ID</label>
            <input type="text" class="form-control" id="to_id" placeholder="Enter To ID">
        </div>
        <div class="form-group">
            <label for="new_to_id">New To ID</label>
            <input type="text" class="form-control" id="new_to_id" placeholder="Enter New To ID">
        </div>


        <button type="submit" class="btn btn-default" name="Submit_edge_update">Submit</button>
    </form>
    <hr>
    <form name="edge_read" method="post">
        <h3>Read</h3>
        <div class="form-group">
            <label for="from_id">From ID</label>
            <input type="text" class="form-control" id="from_id" placeholder="Enter From ID">
        </div>
        <div class="form-group">
            <label for="field">Field</label>
            <input type="text" class="form-control" id="field" placeholder="Enter Field">
        </div>


        <button type="submit" class="btn btn-default" name="Submit_edge_read">Submit</button>
    </form>
    <hr>
<?php require("includes/footer.php");?>