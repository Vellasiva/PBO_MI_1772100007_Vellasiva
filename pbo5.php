<?php
class kendaraan{
    
    private $merk;
    private $harga;
    
    function __construct($merk,$harga) {
        $this->merk=$merk;
        $this->harga=$harga;
    }
    function BacaMerk(){
        return $this->merk;
    }
    
    function BacaHarga(){
        return $this->harga;
    }
}
    $motor = new kendaraan("ducati",100000000);
    
    echo "Merk Kendaraan = ".$motor->BacaMerk()."<br />";
    echo "Harga Motor = ".$motor->BacaHarga()."<br />";
    echo "=====================<br /><br />";
    
    $motor2 = new kendaraan("bajaj", 1500000000);
    
    echo " Merk Kendaraan = ".$motor2->BacaMerk()."<br />";
    echo " Harga Motor = ".$motor2->BacaHarga()."<br />";
?>