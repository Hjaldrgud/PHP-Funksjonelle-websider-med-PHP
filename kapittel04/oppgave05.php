<?php

$sparekonto = 82500.00;


for($år=1; $år<=2; $år++){
    echo "År nummer: " . $år . "<br>";
    for($månednr=1; $månednr<=12; $månednr++){
        
        $måned = match($månednr) {
            1 => "Januar",
            2 => "Februar",
            3 => "Mars",
            4 => "April",
            5 => "Mai",
            6 => "Juni",
            7 => "Juli",
            8 => "August",
            9 => "September",
            10 => "Oktober",
            11 => "November",
            default => "Desember",
        };
        echo "Penger på sparekonto i " . $år . " måned " . $måned . ": " . number_format($sparekonto, 2, ",", " ") . "<br>";
        $sparekonto *= 1.029;
        $sparekonto += 4583.33;
        
    }
}
echo "<br><br><strong>Penger på sparekontoen til slutt: " . number_format($sparekonto, 2, ",", " ") . "</strong>";
?>