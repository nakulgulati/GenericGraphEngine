<html>
<head>
    <title>Type Form</title>
</head>
<body>

<Form name ="type_add" Method ="POST" Action ="test.php">

    <INPUT TYPE = "TEXT" VALUE ="name" Name ="name">

    <INPUT TYPE = "Submit" Name = "Submit_type_add" VALUE = "Submit">

</FORM>

<Form name ="type_delete" Method ="POST" Action ="test.php">

    <INPUT TYPE = "TEXT" VALUE ="id" Name ="id">
    <INPUT TYPE = "Submit" Name = "Submit_type_delete" VALUE = "Submit">

</FORM>
<Form name ="type_update" Method ="POST" Action ="test.php">
    <INPUT TYPE = "TEXT" VALUE ="id" Name ="id">
    <INPUT TYPE = "TEXT" VALUE ="name" Name ="name">
    <INPUT TYPE = "Submit" Name = "Submit_type_update" VALUE = "Submit">

</FORM>
<Form name ="type_read" Method ="POST" Action ="index.php">

    <INPUT TYPE = "TEXT" VALUE ="field" Name ="field">

    <INPUT TYPE = "Submit" Name = "Submit_type_read" VALUE = "Submit">

</FORM>

</body>
</html>