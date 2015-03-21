<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/sigma.min.js"></script>
<!--custom scripts-->
<script src="js/scripts.js"></script>

<script src="js/plugins/sigma.parsers.json.min.js"></script>

<?php

$request_data = array(
    "table" => "edge",
    "operation" => "associations",
    "data" => array(
        "from_id" => 1,
        "field" => "*"
    )
);

$request_data = json_encode($request_data) . "\n";

$response = sendRequest($request_data);

echo "<script language=\"JavaScript\">
var response = {$response};
displayEntityAssociationGraph(response);
</script>";


?>

</body>
</html>
