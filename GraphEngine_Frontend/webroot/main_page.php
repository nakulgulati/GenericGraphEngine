<?php require_once'includes/functions.php'; ?>
<?php require_once('includes/header.php'); ?>
<html>
<head>
</head>
<body>
<Form name ="type_add" Method ="POST" Action ="">

    <!--
    <select  name="crud">
    <option value="add">Add</option>
     <option value="delete">Delete</option>
     <option value="update">Update</option>
     <option value="read">Read</option>
    </select>-->
    Select Table:
    <select name="table">
    <option value="type">Type</option>
     <option value="node">Node</option>
     <option value="edge">Edge</option>
    </select>

    <INPUT TYPE = "submit" Name = "Submit_main" VALUE = "Submit">

</FORM>
</body>
 </html>
<?php require_once('includes/footer.php'); ?>