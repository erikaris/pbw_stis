<?php

session_start();
// Ambil variable address yang di-post, masukkan ke session
$_SESSION["address"] = $_POST["address"];

?>

<form method="POST" action="result.php">
    Masukkan umur: <input type="text" name="age" />
    <input type="submit" value="Preview" />
</form>