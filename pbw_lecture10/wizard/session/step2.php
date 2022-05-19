<?php

session_start();
// Ambil variable name yang di-post, masukkan ke session
$_SESSION["name"] = $_POST["name"];

?>

<form method="POST" action="step3.php">
    Masukkan alamat: <input type="text" name="address" />
    <input type="submit" value="Next" />
</form>