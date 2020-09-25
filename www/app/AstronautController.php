<?php

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