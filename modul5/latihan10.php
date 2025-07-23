<?php
$ukuran_baju = "M";

switch ($ukuran_baju) {
    case "S":
        echo "Ukuran kecil dipilih.";
        break;
    case "M":
        echo "Ukuran sedang dipilih.";
        break;
    case "L":
        echo "Ukuran besar dipilih.";
        break;
    case "XL":
        echo "Ukuran ekstra besar dipilih.";
        break;
    default:
        echo "Ukuran tidak dikenal.";
}
?>
