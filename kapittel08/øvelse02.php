<?php

    class Kalkulator {

        private int $tall1;

        public function __construct($tall1 = 0){
            $this->tall1 = $tall1;
        }

        public function adder($tall2){
            $this->tall1 += $tall2;
            return $this->tall1;
        }
        public function subtraher($tall2){
            $this->tall1 -= $tall2;
            return $this->tall1;
        }
        public function multipliser($tall2){
            $this->tall1 *= $tall2;
            return $this->tall1;
        }
        public function del($tall2){
            if($tall2==0){
                throw new Exception("Dele på null.");
            }
            $this->tall1 /= $tall2;
            return $this->tall1;
        }
    }

    try {
        $kalk = new Kalkulator(12);
        echo $kalk->adder(8) . "<br>";
        echo $kalk->del(2) . "<br>";
    } catch (Exception $e) {
        echo "Exception: ", $e->getMessage(), "<br>";
    }

?>