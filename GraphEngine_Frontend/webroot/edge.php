<html>
<head>
    <title>Edge Form</title>
</head>
<body>

<Form name ="edge_add" Method ="POST" Action ="test.php">

    <INPUT TYPE = "TEXT" VALUE ="Type" Name ="from_id">
    <INPUT TYPE = "TEXT" VALUE ="Type" Name ="to_id">
    <INPUT TYPE = "Submit" Name = "Submit_add" VALUE = "Submit">

</FORM>
<Form name ="edge_delete" Method ="POST" Action ="index.php">

    <INPUT TYPE = "TEXT" VALUE ="Type" Name ="id">
    <INPUT TYPE = "TEXT" VALUE ="Type" Name ="from_id">
    <INPUT TYPE = "TEXT" VALUE ="Type" Name ="to_id">
    <INPUT TYPE = "TEXT" VALUE ="Type" Name ="to_id">
    <INPUT TYPE = "Submit" Name = "Submit_delete" VALUE = "Submit">

</FORM>
<Form name ="edge_update" Method ="POST" Action ="index.php">

    <INPUT TYPE = "TEXT" VALUE ="Type" Name ="id">
    <INPUT TYPE = "TEXT" VALUE ="Type" Name ="from_id">
    <INPUT TYPE = "TEXT" VALUE ="Type" Name ="to_id">
    <INPUT TYPE = "TEXT" VALUE ="Type" Name ="to_id">
    <INPUT TYPE = "Submit" Name = "Submit_update" VALUE = "Submit">

</FORM>
<Form name ="edge_read" Method ="POST" Action ="index.php">
    <INPUT TYPE = "TEXT" VALUE ="Type" Name ="from_id">
    <INPUT TYPE = "TEXT" VALUE ="Type" Name ="field">

    <INPUT TYPE = "Submit" Name = "Submit_read" VALUE = "Submit">

</FORM>

</body>
</html>