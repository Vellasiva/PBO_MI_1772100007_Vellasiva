<?php
class Mobil
{
    var $warna;
    var $merk;
    function __construct()
    {
        $this->warna = "Biru";
        $this->merk = "BMW";
    }
    function gantiWarna ($warnaBaru)
    {
        $this->warna = $warnaBaru;
    }
    function tampilWarna()
    {
        echo "Warna mobilnya  : ".$this->warna;
        echo "<br />";
        echo "Merk mobilnya : ".$this->merk;
    }
}
$a = new Mobil();
$b = new Mobil();
echo "<b>Mobil pertama</b><br />";
$a->tampilWarna();
echo "<br />";
echo "<b>Mobil pertama ganti warna</b><br />";
$a->gantiWarna("Merah");
$a->tampilWarna();
?>