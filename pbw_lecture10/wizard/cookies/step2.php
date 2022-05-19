<?php

// Ambil variable name yang di-post, masukkan ke cookie
setcookie("name", $_POST["name"])

?>

<form method="POST" action="step3.php">
    Masukkan alamat: <input type="text" name="address" />
    <input type="submit" value="Next" />
</form>