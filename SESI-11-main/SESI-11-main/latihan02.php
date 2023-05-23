<?php
    $dta[0]["NAMA"]="Prayu";
    $dta[0]["TGL_LAHIR"] ="2003-12-24";
    $dta[0]["JKEL"] = "P";
    $dta[0]["ALAMAT"]= "Badung";
    $dta[0]["UMUR"]= "19";
    $dta[0]["NIM"]= "2201010362";

    $dta[1]["NAMA"]="Dika Mahendra";
    $dta[1]["TGL_LAHIR"] ="2004-01-04";
    $dta[1]["JKEL"] = "L";
    $dta[1]["ALAMAT"]= "Bangli";
    $dta[1]["UMUR"]= "19";
    $dta[1]["NIM"]= "2201010055";

    $dta[2]["NAMA"]="Tut Nyamprut";
    $dta[2]["TGL_LAHIR"] ="2003-11-24";
    $dta[2]["JKEL"] = "P";
    $dta[2]["ALAMAT"]= "Buleleng";
    $dta[2]["UMUR"]= "20";
    $dta[2]["NIM"]= "2201010262";

    $dta[3]["NAMA"]="Nyoman Minal";
    $dta[3]["TGL_LAHIR"] ="2004-11-10";
    $dta[3]["JKEL"] = "L";
    $dta[3]["ALAMAT"]= "Karangasem";
    $dta[3]["UMUR"]= "20";
    $dta[3]["NIM"]= "2201010266";

    $dta[4]["NAMA"]="Kadek Cio";
    $dta[4]["TGL_LAHIR"] ="2003-01-24";
    $dta[4]["JKEL"] = "L";
    $dta[4]["ALAMAT"]= "Tabanan";
    $dta[4]["UMUR"]= "19";
    $dta[4]["NIM"]= "2201010066";

    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);
