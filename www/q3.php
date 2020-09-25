<?php require'header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <?php
                    $statusCodes = [
                        "success"=>'<div class="alert alert-success" role="alert">Data saved successfully.</div>',
                        "error"=>'<div class="alert alert-danger" role="alert">An error occurred.</div>'
                    ];

                    if(isset($_GET["status"])&&!empty($_GET["status"])) {
                        echo $statusCodes[$_GET["status"]];
                    }
                ?>

                <form action="q3Save.php" method="post">

                    <label for="name" class="mt-3">Name:</label>
                    <input type="text" name="astronautName" class="form-control" />

                    <label for="name" class="mt-3">Weight:</label>
                    <input type="number" step="any" name="astronautWeight" class="form-control" />

                    <button class="btn btn-primary mt-3">SAVE</button>

                </form>
            </div>
        </div>
    </div>
</section>