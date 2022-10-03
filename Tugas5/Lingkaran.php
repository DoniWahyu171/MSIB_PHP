<?php
require_once 'Bentuk2D.php';
class Lingkaran extends Bentuk2D
{
    protected $jari2;
    const NAMA = 'Lingkaran';

    public function __construct($jari2)
    {
        $this->jari2 = $jari2;
    }
    public function namaBidang()
    {
        return (self::NAMA);
    }
    public function luasBidang()
    {
        return (3.14 * $this->jari2 * $this->jari2);
    }
    public function kelilingBidang()
    {
        return (2 * (3.14 * $this->jari2));
    }
    

public function mencetak(){
    echo '<td>'."Lingkaran".'</td>'; 
    echo '<td>'.'Jari-jari = '.$this->jari2.'</td>';
    echo '<td>'.$this->luasBidang().'</td>';
    echo '<td>'.$this->kelilingBidang().'</td>';
    

}
}
