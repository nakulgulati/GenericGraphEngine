<?php require_once('include/functions.php'); ?>
<?php require_once('include/header.php'); ?>

<?php
if(isset($_POST)){
    foreach($_POST as $key => $value){
        if(preg_match("/submit_(\\w+)/",$key)){
            $request_data = processForm($_POST);
            $response = sendRequest($request_data);
            print_r($response);

        }
    }
}

?>

    <div class="container">
        <div class="row">
            <div class="col-lg-3" >
                <h1>Menu</h1>

                <ul class="nav nav-pills nav-stacked">

                    <li class="master"><a data-toggle="collapse" href="#type" aria-expanded="false" aria-controls="type">Type</a>
                        <div class="collapse" id="type">
                            <div class="well">
                                <ul >
                                    <li value="type_add"><a href="#">Add</a></li>
                                    <li value="type_delete"><a href="#">Delete</a></li>
                                    <li value="type_update"><a href="#">Update</a></li>
                                    <li value="type_read"><a href="#">Read</a></li>
                                </ul>
                            </div>
                        </div></li>
                    <li class="master"><a data-toggle="collapse" href="#node" aria-expanded="false" aria-controls="node">Node</a>
                        <div class="collapse" id="node">
                            <div class="well">
                                <ul>
                                    <li value="node_add"><a href="#">Add</a></li>
                                    <li value="node_delete"><a href="#">Delete</a></li>
                                    <li value="node_update"><a href="#">Update</a></li>
                                    <li value="node_read"><a href="#">Read</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="master"><a data-toggle="collapse" href="#edge" aria-expanded="false" aria-controls="edge">Edge</a>
                        <div class="collapse" id="edge">
                            <div class="well">
                                <ul >
                                    <li value="edge_add"><a href="#">Add</a></li>
                                    <li value="edge_delete"><a href="#">Delete</a></li>
                                    <li value="edge_update"><a href="#">Update</a></li>
                                    <li value="edge_read"><a href="#">Read</a></li>
                                </ul>
                            </div>
                        </div></li>
                </ul>

            </div>
            <div class="col-lg-9">
                <h1>Form/Output</h1>

                <!--
                Type Add
                -->
                <div class="row">
                    <form id ="type_add" class="col-lg-4" name="type_add" method="post">
                        <h3>Add</h3>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Type Name">
                        </div>


                        <button type="submit" class="btn btn-default" name="submit_type_create">Submit</button>
                    </form>

                </div>
                <!-- Type Delete

                -->
                <div class="row">
                    <form id="type_delete" class ="col-lg-4 "name="type_delete" method="post">
                        <h3>Delete</h3>
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter ID">
                        </div>


                        <button type="submit" class="btn btn-default" name="submit_type_delete">Submit</button>
                    </form>
                </div>
                <!--
                Type Update
                -->
                <div class="row">
                    <form id="type_update" class="col-lg-4" name="type_update" method="post">
                        <h3>Update</h3>
                        <div class="form-group">
                            <label for="name">ID</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter ID">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Type Name">
                        </div>


                        <button type="submit" class="btn btn-default" name="submit_type_update">Submit</button>
                    </form>
                </div>
                    <!--
                    Type Read
                    -->
                    <div class="row">
                        <form id="type_read" class="col-lg-4" name="type_read" method="post">
                            <h3>Read</h3>
                            <div class="form-group">
                                <label for="field">Field</label>
                                <input type="text" class="form-control" name="field" placeholder="Enter Field">
                            </div>


                            <button type="submit" class="btn btn-default" name="submit_type_read">Submit</button>
                        </form>
                    </div>

                <!--
                Node Add
                -->
                <div class="row">
                    <form id="node_add" class="col-lg-4" name="node_add" method="post">
                        <h3>Add</h3>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="type_id">Type ID</label>
                            <input type="text" class="form-control" name="type_id" placeholder="Enter Type ID">
                        </div>


                        <button type="submit" class="btn btn-default" name="submit_node_create">Submit</button>
                    </form>
                </div>

                <!--
                Node Delete
                -->
                <div class="row">
                    <form id="node_delete" class="col-lg-4" name="node_delete" method="post">
                        <h3>Delete</h3>
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter ID">
                        </div>



                        <button type="submit" class="btn btn-default" name="submit_node_delete">Submit</button>
                    </form>
                </div>
                <!--
                Node Update
                -->
                <div class="row">
                    <form class="col-lg-4" id="node_update" name="node_update" method="post">
                        <h3>Update</h3>
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="type_id">Type ID</label>
                            <input type="text" class="form-control" name="type_id" placeholder="Enter Type ID">
                        </div>


                        <button type="submit" class="btn btn-default" name="submit_node_update">Submit</button>
                    </form>
                </div>
                <!--
                Node Read
                -->
                <div>
                    <form name="node_read" method="post" class="col-lg-4">
                        <h3>Read</h3>
                        <div class="form-group">
                            <label for="id">Field</label>
                            <input type="text" class="form-control" name="field" placeholder="Enter Field">
                        </div>


                        <button type="submit" class="btn btn-default" name="submit_node_read">Submit</button>
                    </form>
                </div>

                <!--
                    Edge add
                -->
                <div class="row">
                    <form id="edge_add" class="col-lg-4" name="edge_add" method="post">
                        <h3>Add</h3>
                        <div class="form-group">
                            <label for="from_id">From ID</label>
                            <input type="text" class="form-control" name="from_id" placeholder="Enter From ID">
                        </div>
                        <div class="form-group">
                            <label for="to_id">To ID</label>
                            <input type="text" class="form-control" name="to_id" placeholder="Enter To ID">
                        </div>


                        <button type="submit" class="btn btn-default" name="submit_edge_create">Submit</button>
                    </form>
                </div>
                <!--
                Edge Delete
                -->
                <div class="row">
                    <form class="col-lg-4" id="edge_delete" name="edge_delete" method="post">
                        <h3>Delete</h3>
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter ID">
                        </div>
                        <div class="form-group">
                            <label for="from_id">From ID</label>
                            <input type="text" class="form-control" name="from_id" placeholder="Enter From ID">
                        </div>
                        <div class="form-group">
                            <label for="to_id">To ID</label>
                            <input type="text" class="form-control" name="to_id" placeholder="Enter To ID">
                        </div>


                        <button type="submit" class="btn btn-default" name="submit_edge_delete">Submit</button>
                    </form>
                </div>
                <!--
                Edge Update
                -->
                <div class="row">
                    <form class="col-lg-4" id="edge_update" name="edge_update" method="post">
                        <h3>Update</h3>
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter ID">
                        </div>
                        <div class="form-group">
                            <label for="from_id">From ID</label>
                            <input type="text" class="form-control" name="from_id" placeholder="Enter From ID">
                        </div>
                        <div class="form-group">
                            <label for="to_id">To ID</label>
                            <input type="text" class="form-control" name="to_id" placeholder="Enter To ID">
                        </div>
                        <div class="form-group">
                            <label for="new_to_id">New To ID</label>
                            <input type="text" class="form-control" name="new_to_id" placeholder="Enter New To ID">
                        </div>


                        <button type="submit" class="btn btn-default" name="submit_edge_update">Submit</button>
                    </form>
                </div>
            <!--
                Edge Read
            -->
                <div class="row">
                    <form class="col-lg-4" id="edge_read" name="edge_read" method="post">
                        <h3>Read</h3>
                        <div class="form-group">
                            <label for="from_id">From ID</label>
                            <input type="text" class="form-control" name="from_id" placeholder="Enter From ID">
                        </div>
                        <div class="form-group">
                            <label for="field">Field</label>
                            <input type="text" class="form-control" name="field" placeholder="Enter Field">
                        </div>

                        <button type="submit" class="btn btn-default" name="submit_edge_read">Submit</button>
                    </form>
                </div>

                <div class="row" id="sigmaTest">

                </div>
            </div>
        </div>
    </div>

<?php require_once('include/footer.php'); ?>