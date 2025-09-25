<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sisend = $_POST["kasutaja_sisend"];
    file_put_contents("sisendid.txt", $sisend.PHP_EOL, FILE_APPEND);
    echo "Sisend salvestatud!";
}
?>
<form method="POST">
    <input type="text" name="kasutaja_sisend" placeholder="Sisesta midagi">
    <button type="submit">Saada</button>
</form>
