<html>
<head>
    <title>Edge Form</title>
</head>
<body>

<Form name ="edge_add" Method ="POST" Action ="test.php">

    <INPUT TYPE = "TEXT" VALUE ="from_id" Name ="from_id">
    <INPUT TYPE = "TEXT" VALUE ="to_id" Name ="to_id">
    <INPUT TYPE = "Submit" Name = "Submit_edge_add" VALUE = "Submit">

</FORM>
<Form name ="edge_delete" Method ="POST" Action ="test.php">

    <INPUT TYPE = "TEXT" VALUE ="id" Name ="id">
    <INPUT TYPE = "TEXT" VALUE ="from_id" Name ="from_id">
    <INPUT TYPE = "TEXT" VALUE ="to_id" Name ="to_id">
    <INPUT TYPE = "Submit" Name = "Submit_edge_delete" VALUE = "Submit">

</FORM>
<Form name ="edge_update" Method ="POST" Action ="test.php">

    <INPUT TYPE = "TEXT" VALUE ="id" Name ="id">
    <INPUT TYPE = "TEXT" VALUE ="from_id" Name ="from_id">
    <INPUT TYPE = "TEXT" VALUE ="to_id" Name ="to_id">
    <INPUT TYPE = "TEXT" VALUE ="new_to_id" Name ="new_to_id">
    <INPUT TYPE = "Submit" Name = "Submit_edge_update" VALUE = "Submit">

</FORM>
<Form name ="edge_read" Method ="POST" Action ="test.php">
    <INPUT TYPE = "TEXT" VALUE ="from_id" Name ="from_id">
    <INPUT TYPE = "TEXT" VALUE ="field" Name ="field">
    <INPUT TYPE = "Submit" Name = "Submit_edge_read" VALUE = "Submit">

</FORM>

</body>
</html>