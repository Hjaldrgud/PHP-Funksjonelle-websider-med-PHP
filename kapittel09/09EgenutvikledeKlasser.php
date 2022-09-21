<?php

    require_once("PDOgenerering.inc.php");

    class Medlem {

        public function legg_til($felt) {
            $rm = array(); //Matrise for returmeldinger
            global $pdo; //Gjrør tilkoblingsobjektet tilgjengelig

            if($felt) {
                /* første del av SQL-spørring */
                unset($sql1); unset($sql2);
                $sql1 = "INSERT INTO '" . MEDLEM_TABELL . "' (";
                $sql2 ="";

                /* Neste del av SQL-spørring: hente feltnavn fra $felt */
                foreach ($felt as $feltnavn => $feltverdi) {
                    $sql1 .= "'" . $feltnavn . "', ";
                    $sql .= ":" . $feltnavn . ", ";
                }
                $sql1 = substr($sql1, 0, -2);
                $sql2 = substr($sql2, 0, -2);
                $sql = $sql1 . ") VALUES (" . $sql2 . ")";

                /* Forbered spørring */
                $sp = $pdo->prepare($sql);

                /* Bind variabler til plassholdere */
                foreach ($felt as $feltnavn => $feltverdi) {
                    $sp->bindParam($feltnavn, $$feltnavn);
                    $$feltnavn = $feltverdi;
                }
                
                /* Sjekk hvordan dette gikk */
                try {
                    $sp->execute();
                } catch (PDOException $e) {
                    $rm['i'] = $e->getMessage(); //i=intern melding
                }

                /* Sjekk av ID for nyoppføring i tabellen */
                if($pdo->lastInsertId() > 0) {
                    return $pdo->lastInsertId();
                } else {
                    $rm['e'] = "Medlemmet ble ikke lagt til i DBen"; //e=ekstern melding
                    return $rm;
                }
            } else {
                $rm['i'] = "Metoden ble kalt uten \$felt som parameter"; //i=intern melding
                return $rm;
            }
        }
    }


?>