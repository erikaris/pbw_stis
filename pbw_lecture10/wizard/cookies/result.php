<?php

// Ambil variable age yang di-post, masukkan ke cookie
setcookie("age", $_POST["age"])

?>

<?php

print_r($_COOKIE);

?>