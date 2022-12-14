<?php
require_once 'Bentuk2D.php';
class PersegiPanjang extends Bentuk2D
{
    public $panjang;
    public $lebar;
    const NAMA = 'Persegi Panjang';

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function namaBidang()
    {
        return (self::NAMA);
    }
    public function luasBidang()
    {
        return ($this->panjang * $this->lebar);
    }
    public function kelilingBidang()
    {
        return (2 * ($this->panjang + $this->lebar));
    }

public function mencetak(){
        echo '<td>'."Persegi Panjang".'</td>'; 
        echo '<td>'."Panjang : ".$this->panjang. ", Lebar : ".$this->lebar. '</td>';
        echo '<td>'.$this->luasBidang().'</td>';
        echo '<td>'.$this->kelilingBidang().'</td>';
    }

}
