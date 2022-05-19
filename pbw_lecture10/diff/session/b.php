<?php

echo "Lihat isi file ", session_save_path(), "<br/>";

session_start();

$_SESSION["session-a"] = "ini isi dari session-a";
$_SESSION["session-b"] = "ini isi dari session-b";
$_SESSION["session-c"] = "ini isi dari session-c";

// Setelah dipanggil coba lihat tab Application -> sessions -> Pilih domain localhost. 
// Terlihat ada sebuah cookie bernama PHPSESID
// Nilai dari 

?>