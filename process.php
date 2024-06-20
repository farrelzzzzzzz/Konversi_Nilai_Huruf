<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST['nilai'];

    if (is_numeric($nilai)) {
        if ($nilai >= 0 && $nilai <= 50) {
            echo "<div style='background-color: red; color: white; padding: 10px; border-radius: 5px;'>Nilai Anda C $nilai, Anda Tidak Lulus</div>";
        } else if ($nilai > 50 && $nilai <= 75) {
            echo "<div style='background-color: orange; color: white; padding: 10px; border-radius: 5px;'>Nilai Anda B $nilai, Anda Lulus</div>";
        } else if ($nilai > 75 && $nilai <= 100) {
            echo "<div style='background-color: green; color: white; padding: 10px; border-radius: 5px;'>Nilai Anda A $nilai, Anda Lulus</div>";
        } else {
            echo "<div style='background-color: black; color: red; padding: 10px; border-radius: 5px;'>Nilai tidak valid</div>";
        }
    } else {
        echo "<div style='background-color: black; color: red; padding: 10px; border-radius: 5px;'>Nilai tidak valid</div>";
    }
} else {
    echo "<div style='background-color: black; color: red; padding: 10px; border-radius: 5px;'>Metode tidak valid</div>";
}
?>
