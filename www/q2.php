<?php
    namespace app;
    require './bootstrap.php';
    require'header.php';
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                $astronaut = new AstronautController('Neil', 20.1);
                $astronaut->addWeight(20.00);
                $astronaut->addWeight(220.50);
                $astronaut->launch();

                $astronaut2 = new AstronautController('Buzz', 20.0);
                $astronaut2->addWeight(20.32);
                $astronaut2->addWeight(20.50);
                $astronaut2->launch();

                $astronaut3 = new AstronautController('Lightyear', 30.0);
                $astronaut3->addWeight(20.32);
                $astronaut3->addWeight(20.50);
                $astronaut3->launch();
                ?>
            </div>


        </div>
        <div class="alert alert-success">
            <h4 class="mt-3">ANSWER</h4>
            <script src="https://gist.github.com/ogabrielguerra/728c6ffaf40f8bc7ff05720d69aece15.js"></script>
        </div>
    </div>
</section>
