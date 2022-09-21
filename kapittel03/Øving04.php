<?php
    function datodifferanse(...$datoer){
        $array = array(...$datoer);
        foreach ($array as &$dato) {
            echo "<strong> Datoen " . $dato . "</strong><br>";
            $fødselsdato = new DateTime($dato);
            $nådato = new DateTime("now");
            $differanse = $fødselsdato->diff($nådato);
            
            echo "Forskjellen mellom " . $fødselsdato->format("d.m.Y") . " og dagens dato " . $nådato->format("d.m.Y") . " er " . $differanse->format("%y år, %m måned(er), %d dag(er) "); 
            if(str_contains($dato, ":")){
                echo $differanse->format(" %h time(r), %i minutt(er)");
            }
                echo ".<br>";
            
        }
    }

    datodifferanse("1999-09-09", "1992-06-21 09:40:00", "1950-05-03", "2000-09-29")
?>