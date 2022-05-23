<?php
$provinces = array(
    array("kode" => "11", "nama" => "Aceh"),
    array("kode" => "12", "nama" => "Sumatera Utara"),
    array("kode" => "13", "nama" => "Sumatera Barat"),
    array("kode" => "14", "nama" => "Riau")
);

$regencies = array(
    array("kdprov" => "11", "kode" => "01", "nama" => "Sabang"),
    array("kdprov" => "12", "kode" => "01", "nama" => "Binjai"),
    array("kdprov" => "12", "kode" => "02", "nama" => "Mandailing Natal"),
    array("kdprov" => "13", "kode" => "01", "nama" => "Kep. Mentawai"),
    array("kdprov" => "13", "kode" => "02", "nama" => "Pesisir Selatan"),
);

$employees = array(
    array("kdprov" => "11", "kdkab" => "01", "nip" => "1234", "nama" => "AAAA"),
    array("kdprov" => "12", "kdkab" => "01", "nip" => "1234", "nama" => "BBBB"),
    array("kdprov" => "12", "kdkab" => "02", "nip" => "1234", "nama" => "CCCC"),
    array("kdprov" => "13", "kdkab" => "01", "nip" => "1234", "nama" => "DDDD"),
    array("kdprov" => "13", "kdkab" => "01", "nip" => "1234", "nama" => "EEEE"),
    array("kdprov" => "13", "kdkab" => "02", "nip" => "1234", "nama" => "FFFF"),
    array("kdprov" => "13", "kdkab" => "02", "nip" => "1234", "nama" => "GGGG"),
);

if (isset($_GET["kdprov"])) {
    $regencies = array_filter($regencies, function ($reg) {
        if ($reg["kdprov"] == $_GET["kdprov"]) return true;
        return false;
    });
}

echo json_encode($regencies);
