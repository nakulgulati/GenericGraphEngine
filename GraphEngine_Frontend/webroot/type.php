<?php require_once('includes/header.php'); ?>
<div>
    <h3>Add</h3>
<Form name ="type_add" Method ="POST" Action ="test.php" >

    <INPUT TYPE = "TEXT" VALUE ="name" Name ="name">

    <INPUT TYPE = "Submit" Name = "Submit_type_add" VALUE = "Submit">

</FORM>
</div>
<div>
    <h3>Delete</h3>
<Form name ="type_delete" Method ="POST" Action ="test.php">

    <INPUT TYPE = "TEXT" VALUE ="id" Name ="id">
    <INPUT TYPE = "Submit" Name = "Submit_type_delete" VALUE = "Submit">

</FORM>
</div>
<div>
    <h3>UPDATE</h3>
<Form name ="type_update" Method ="POST" Action ="test.php">
    <INPUT TYPE = "TEXT" VALUE ="id" Name ="id">
    <INPUT TYPE = "TEXT" VALUE ="name" Name ="name">
    <INPUT TYPE = "Submit" Name = "Submit_type_update" VALUE = "Submit">

</FORM>
</div>
<div>
    <h3>Read</h3>
<Form name ="type_read">

    <INPUT TYPE = "TEXT" VALUE ="field" Name ="field">

    <INPUT TYPE = "button" Name = "Submit_type_read" VALUE = "Submit " onClick="test()">

</FORM>
</div>
<?php require_once('includes/footer.php'); ?>