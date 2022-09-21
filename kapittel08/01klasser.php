<?php

class Comfort {
}

print_r(get_declared_classes());
echo "<br><br><br>";

echo (class_exists("Comfort")) ? "Klassen eksisterer <br>" : "Klassen eksisterer ikke. <br>";
echo (class_exists("comfort")) ? "Klassen eksisterer <br>" : "Klassen eksisterer ikke. <br>";
echo (class_exists("Basic")) ? "Klassen eksisterer <br>" : "Klassen eksisterer ikke. <br>"; 

?>