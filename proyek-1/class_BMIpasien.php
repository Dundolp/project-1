<?php
require_once 'class_BMI.php';
require_once 'class_pasien.php';

class BMIpasien extends BMI {
    public $id;
    public $bmi;
    public $tanggal;
    public $pasien;

    function __construct($bmi, $tanggal, $pasien){
        $this->bmi = $bmi;
        $this->tanggal = $tanggal;
        $this->pasien = $pasien;
    }
}
?>