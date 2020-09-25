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
        <pre class="alert alert-success">
<h4 class="mt-3">ANSWER</h4>
namespace app;

class AstronautController{

    private string $name;
    private float $pounds;

    function __construct(string $name, float $pounds){

        $this->setName($name);
        $this->setPounds($pounds);
        echo $this->getName().' is preparing to takeoff...<br>';
    }

    /**
     * @return String
     */
    public function getName(): string{
        return $this->name;
    }

    /**
     * @param String $name
     * @return void
     */
    public function setName(string $name){
        $this->name = $name;
    }

    /**
     * @return Float
     */
    public function getPounds(): float{
        return $this->pounds;
    }

    /**
     * @param Float $pounds
     * @return void
     */
    public function setPounds(float $pounds){
        $this->pounds = $pounds;
    }

    /**
     * @param Float $pounds
     * @return void
     */
    public function addWeight(float $pounds){
        $this->pounds += $pounds;
    }

    public function launch(){
        echo $this->getName().' weights '.$this->getPounds().' pounds.<br>';
        echo $this->pounds > 200 ? "{$this->name} is too heavy, grounded.<br><br>" : "{$this->name} is going where no human has gone before.<br><br>";
    }

}
            </pre>
    </div>
</section>
