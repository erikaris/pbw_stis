<?php

echo "Lihat isi file ", session_save_path(), "<br/>";

session_start();

echo "Ini adalah isi session session-a: ", $_SESSION["session-a"], "<br/>";
echo "Ini adalah isi session session-b: ", $_SESSION["session-b"], "<br/>";
echo "Ini adalah isi session session-c: ", $_SESSION["session-c"], "<br/>";

?>