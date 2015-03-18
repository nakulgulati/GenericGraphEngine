<?php require_once('include/functions.php'); ?>
<?php require_once('include/header.php'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3" >
                <h1>Menu</h1>

                <ul class="nav nav-pills nav-stacked">

                    <li><a data-toggle="collapse" href="#type" aria-expanded="false" aria-controls="type" >Type</a>
                        <div class="collapse" id="type">
                            <div class="well">
                                <ul >
                                    <li><a href="#">Add</a></li>
                                    <li><a href="#">Delete</a></li>
                                    <li><a href="#">Update</a></li>
                                    <li><a href="#">Read</a></li>
                                </ul>
                            </div>
                        </div></li>
                    <li><a data-toggle="collapse" href="#node" aria-expanded="false" aria-controls="node" >Node</a>
                        <div class="collapse" id="node">
                            <div class="well">
                                <ul >
                                    <li><a href="#">Add</a></li>
                                    <li><a href="#">Delete</a></li>
                                    <li><a href="#">Update</a></li>
                                    <li><a href="#">Read</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a data-toggle="collapse" href="#edge" aria-expanded="false" aria-controls="edge" >Edge</a>
                        <div class="collapse" id="edge">
                            <div class="well">
                                <ul >
                                    <li><a href="#">Add</a></li>
                                    <li><a href="#">Delete</a></li>
                                    <li><a href="#">Update</a></li>
                                    <li><a href="#">Read</a></li>
                                </ul>
                            </div>
                        </div></li>
                </ul>

            </div>
            <div class="col-lg-9">
                <h1>Form/Output</h1>


            </div>
        </div>
    </div>

<?php require_once('include/footer.php'); ?>