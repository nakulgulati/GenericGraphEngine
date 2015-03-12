<html>
<head>
    <title>Type Form</title>
</head>
<body>

<Form name ="type_add" Method ="POST" Action ="index.php">

    <INPUT TYPE = "TEXT" VALUE ="Type" Name ="name">
    <INPUT TYPE = "Submit" Name = "Submit_add" VALUE = "Submit">

</FORM>
<Form name ="type_delete" Method ="POST" Action ="index.php">

    <INPUT TYPE = "TEXT" VALUE ="Type" Name ="id">
    <INPUT TYPE = "Submit" Name = "Submit_delete" VALUE = "Submit">

</FORM>
<Form name ="type_update" Method ="POST" Action ="index.php">

    <INPUT TYPE = "TEXT" VALUE ="Type" Name ="name">
    <INPUT TYPE = "TEXT" VALUE ="Type" Name ="id">
    <INPUT TYPE = "Submit" Name = "Submit_update" VALUE = "Submit">

</FORM>
<Form name ="type_read" Method ="POST" Action ="index.php">

    <INPUT TYPE = "TEXT" VALUE ="Type" Name ="field">

    <INPUT TYPE = "Submit" Name = "Submit_read" VALUE = "Submit">

</FORM>

</body>
</html>