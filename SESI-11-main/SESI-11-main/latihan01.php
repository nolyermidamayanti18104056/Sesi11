<?php
    $dta["NAMA"]="Prayu";
    $dta["TGL_LAHIR"] ="2003-12-24";
    $dta["JKEL"] = "P";
    $dta["ALAMAT"]= "Badung";
    $dta["UMUR"]= "19";
    $dta["NIM"]= "2201010362";

    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);
