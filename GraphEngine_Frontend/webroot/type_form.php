<html>
<head>
    <title>Form horizontal</title>
</head>
<body>
<form class="form-horizontal" name="type_add" method="post" style="text-align: center">
    <div><h3>Add</h3></div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Enter type">
        </div>
    </div>

      
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" Name = "Submit_type_add">Submit</button>
        </div>
    </div>
</form>
<hr style="width: 100px">
<form class="form-horizontal" name="type_delete" method="post" style="text-align: center">
    <div><h3>Delete</h3></div>
    <div class="form-group">
        <label for="id" class="col-sm-2 control-label">ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" placeholder="Enter ID">
        </div>
    </div>
      
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" Name = "Submit_type_delete">Submit</button>
        </div>
    </div>
</form>
<hr style="width: 100px">
<form class="form-horizontal" name="type_update" method="post" style="text-align: center">
    <div><h3>Update</h3></div>
    <div class="form-group">
        <label for="id" class="col-sm-2 control-label">ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" placeholder="Enter ID">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Enter type">
        </div>
    </div>
      
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" Name = "Submit_type_update">Submit</button>
        </div>
    </div>
</form>
<hr style="width: 100px">
<form class="form-horizontal" name="type_read" method="post" style="text-align: center">
<div><h3>Read</h3></div>
<div class="form-group">
    <label for="field" class="col-sm-2 control-label">Field</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter the Field">
    </div>
</div>
  
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" Name = "Submit_type_read" >Submit</button>
    </div>
</div>
</form>
<hr style="width: 100px">
</body>

</html>

