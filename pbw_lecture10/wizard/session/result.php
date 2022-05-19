<?php

session_start();
// Ambil variable age yang di-post, masukkan ke session
$_SESSION["age"] = $_POST["age"];

?>

<?php

print_r($_SESSION);

?>