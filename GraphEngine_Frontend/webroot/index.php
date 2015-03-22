<?php require_once('include/functions.php'); ?>
<?php require_once('include/header.php'); ?>

<?php
/*TODO
 * refactor*/
$request = buildRequest("type", "read", array("id" => "*"));
$typeList = json_decode(sendRequest($request), true);
//echo "<pre>".print_r($typeList)."</pre>";


$request = buildRequest("node", "read", array("id" => "*"));
$nodeList = json_decode(sendRequest($request), true);

$arr = null;
$response = null;
if(isset($_POST)){
    foreach($_POST as $key => $value){

        if(preg_match("/submit_(\\w+)/", $key)){
            $request_data = processForm($_POST);
            /*$response = sendRequest($request_data);*/
            $arr = explode("_", $key);
            print_r($request_data);
        }
    }
}
?>

    <div class="container">
        <div class="jumbotron">
            <p>Sigma sample graph here</p>
        </div>

        <div class="row col-lg-10 col-lg-offset-1">
            <div class="col-lg-4">
                <!--form area-->

                <!--Type Create-->
                <div class="row">
                    <form class="form-horizontal" name="type_create" method="post">
                        <fieldset>
                            <legend>Type - Create</legend>
                            <div class="form-group">
                                <label for="name" class="col-lg-3 control-label">Name</label>

                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="name" placeholder="Enter Type Name"
                                           required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary" name="submit_type_create">Submit
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <!--Type Read-->
                <div class="row">
                    <form class="form-horizontal" name="type_read" method="post">
                        <fieldset>
                            <legend>Type - Read</legend>
                            <div class="form-group">
                                <label for="id" class="col-lg-3 control-label">Id</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="id" required>
                                        <option value="*">*</option>
                                        <?php generateSelectList($typeList); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary" name="submit_type_read">Submit
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <!--Type Update-->
                <div class="row">
                    <form class="form-horizontal" name="type_update" method="post">
                        <fieldset>
                            <legend>Type - Update</legend>
                            <div class="form-group">
                                <label for="id" class="col-lg-3 control-label">Id</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="id" required>
                                        <option value=""></option>
                                        <?php generateSelectList($typeList); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-lg-3 control-label">Name</label>

                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="name" placeholder="Enter name"
                                           required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary" name="submit_type_update">Submit
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <!--Type Delete-->
                <div class="row">
                    <form class="form-horizontal" name="type_delete" method="post">
                        <fieldset>
                            <legend>Type - Delete</legend>
                            <div class="form-group">
                                <label for="id" class="col-lg-3 control-label">Id</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="id" required>
                                        <option value=""></option>
                                        <?php generateSelectList($typeList); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary" name="submit_type_delete">Submit
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <!--Node Create-->
                <div class="row">
                    <form class="form-horizontal" name="node_create" method="post">
                        <fieldset>
                            <legend>Node - Create</legend>
                            <div class="form-group">
                                <label for="name" class="col-lg-3 control-label">Name</label>

                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="name" placeholder="Enter node name"
                                           required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="type_id" class="col-lg-3 control-label">Type Id</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="type_id" required>
                                        <option value=""></option>
                                        <?php generateSelectList($typeList); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary" name="submit_node_create">Submit
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <!--Node Read-->
                <div class="row">
                    <form class="form-horizontal" name="node_read" method="post">
                        <fieldset>
                            <legend>Node - Read</legend>
                            <div class="form-group">
                                <label for="id" class="col-lg-3 control-label">Id</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="id" required>
                                        <option value="*">*</option>
                                        <?php generateSelectList($nodeList); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="type_id" class="col-lg-3 control-label">Type Id</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="type_id" required>
                                        <option value="*">*</option>
                                        <?php generateSelectList($typeList); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary" name="submit_node_read">Submit
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <!--Node Update-->
                <div class="row">
                    <form class="form-horizontal" name="node_update" method="post">
                        <fieldset>
                            <legend>Node - Update</legend>
                            <div class="form-group">
                                <label for="id" class="col-lg-3 control-label">Id</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="id" required>
                                        <option value=""></option>
                                        <?php generateSelectList($nodeList); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-lg-3 control-label">Name</label>

                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="name" placeholder="Enter node name"
                                           required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="type_id" class="col-lg-3 control-label">Type Id</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="type_id">
                                        <option value=""></option>
                                        <?php generateSelectList($typeList); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary" name="submit_node_update">Submit
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <!--Node Delete-->
                <div class="row">
                    <form class="form-horizontal" name="node_delete" method="post">
                        <fieldset>
                            <legend>Node - Delete</legend>
                            <div class="form-group">
                                <label for="id" class="col-lg-3 control-label">Id</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="id" required>
                                        <option value=""></option>
                                        <?php generateSelectList($nodeList); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary" name="submit_node_delete">Submit
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <!--Edge Create-->
                <div class="row">
                    <form class="form-horizontal" name="edge_create" method="post">
                        <fieldset>
                            <legend>Edge - Create</legend>
                            <div class="form-group">
                                <label for="from_id" class="col-lg-3 control-label">From Id</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="from_id" required>
                                        <option value=""></option>
                                        <?php generateSelectList($nodeList); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="to_id" class="col-lg-3 control-label">To Id</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="to_id" required>
                                        <option value=""></option>
                                        <?php generateSelectList($nodeList); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary" name="submit_edge_create">Submit
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <!--Edge Read-->
                <div class="row">
                    <form class="form-horizontal" name="edge_read" method="post">
                        <fieldset>
                            <legend>Edge - Read</legend>
                            <div class="form-group">
                                <label for="from_id" class="col-lg-3 control-label">From Id</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="from_id" required>
                                        <option value="*">*</option>
                                        <?php generateSelectList($nodeList); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary" name="submit_edge_read">Submit
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <!--Edge Update-->
                <div class="row">
                    <form class="form-horizontal" name="edge_update" method="post">
                        <fieldset>
                            <legend>Edge - Update</legend>
                            <div class="form-group">
                                <label for="from_id" class="col-lg-3 control-label">From Id</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="from_id" required>
                                        <option value=""></option>
                                        <?php generateSelectList($nodeList); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="to_id" class="col-lg-3 control-label">To Id</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="to_id" required>
                                        <option value=""></option>
                                        <?php generateSelectList($nodeList); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="to_id_new" class="col-lg-3 control-label">To Id (new)</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="to_id_new" required>
                                        <option value=""></option>
                                        <?php generateSelectList($nodeList); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary" name="submit_edge_update">Submit
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <!--Edge Delete-->
                <div class="row">
                    <form class="form-horizontal" name="edge_delete" method="post">
                        <fieldset>
                            <legend>Edge - Delete</legend>
                            <div class="form-group">
                                <label for="from_id" class="col-lg-3 control-label">From Id</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="from_id" required>
                                        <option value=""></option>
                                        <?php generateSelectList($nodeList); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="to_id" class="col-lg-3 control-label">To Id</label>

                                <div class="col-lg-9">
                                    <select class="form-control" name="to_id" required>
                                        <option value=""></option>
                                        <?php generateSelectList($nodeList); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary" name="submit_edge_delete">Submit
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

            </div>
            <div class="col-lg-8">
                <!--output area-->
                <div class="well">
                    <?php
                    if(isset($response)){
                        if($response == "true"){
                            echo <<<EOD
<div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Yay!</strong> Query successful.
</div>
EOD;
                        }
                        elseif($response == "false"){
                            echo <<<EOD
<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Oops!</strong> Query unsuccessful.
</div>
EOD;
                        }
                        else{
                            displayTable($response, $arr[1], $arr[2]);
                        }
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>


<?php require_once('include/footer.php'); ?>