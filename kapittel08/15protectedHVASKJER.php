<?php
    class ForeldreKall {
        protected function beskyttet() {
            return "Hei.";
        }
    }
    $fk = new ForeldreKall;
    echo $fk->beskyttet();

    class UnderKall extends ForeldreKall {
        public function kallGjennomAnnetKall() {
            return $this->beskyttet();
        }
    }
    $uk = new Underkall;
    echo $uk->kallGjennomAnnetKall();
?>