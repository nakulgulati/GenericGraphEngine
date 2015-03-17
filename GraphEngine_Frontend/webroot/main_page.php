
<html>
<head>
</head>
<body>
<Form name ="type_add" Method ="POST" Action ="">

    <select  name="crud">
    <option value="add">Add</option>
     <option value="delete">Delete</option>
     <option value="update">Update</option>
     <option value="read">Read</option>
    </select>

    <select name="table">
    <option value="type">Type</option>
     <option value="node">Node</option>
     <option value="edge">Edge</option>
    </select>

    <INPUT TYPE = "submit" Name = "Submit_main" VALUE = "Submit">

</FORM>
</body>
 </html>
<?php

    if ($_POST){
        if(isset ($_POST['Submit_main']))
        {
            first();
        }
    }
function first()
{
    if (isset($_POST['Submit_main'])) {
        $crud = $_POST['crud'];
        $table = $_POST['table'];

        if($table=="type")
        {
            header("Location:type.php");
        }
        if($table=="node" )
            header("Location:node.php");

        if($table=="edge" )
            header("Location:edge.php");


    }

}
?>