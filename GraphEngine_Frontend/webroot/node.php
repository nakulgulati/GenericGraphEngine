<html>
<head>
    <title>Node Form</title>
</head>
<body>
<div>
<Form name ="node_add" Method ="POST" Action ="test.php">

    <INPUT TYPE = "TEXT" VALUE ="name" Name ="name">
    <INPUT TYPE = "TEXT" VALUE ="type_id" Name ="type_id">
    <INPUT TYPE = "Submit" Name = "Submit_node_add" VALUE = "Submit">

</FORM>
</div>
<div>
<Form name ="node_delete" Method ="POST" Action ="test.php">

    <INPUT TYPE = "TEXT" VALUE ="id" Name ="id">
    <INPUT TYPE = "Submit" Name = "Submit_node_delete" VALUE = "Submit">

</FORM>
</div>
<div>
<Form name ="node_update" Method ="POST" Action ="test.php">

    <INPUT TYPE = "TEXT" VALUE ="id" Name ="id">
    <INPUT TYPE = "TEXT" VALUE ="name" Name ="name">

    <INPUT TYPE = "TEXT" VALUE ="type_id" Name ="type_id">
    <INPUT TYPE = "Submit" Name = "Submit_node_update" VALUE = "Submit">

</FORM>
</div>
<div>
<Form name ="node_read" Method ="POST" Action ="test.php">

    <INPUT TYPE = "TEXT" VALUE ="field" Name ="field">
    <INPUT TYPE = "Submit" Name = "Submit_node_read" VALUE = "Submit">

</FORM>
</div>
</body>
</html>