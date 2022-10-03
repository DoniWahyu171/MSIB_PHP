<?php
require_once 'Bentuk2D.php';
class Segitiga extends Bentuk2D
{
    protected $alas;
    protected $tinggi;
    const NAMA = 'Segitiga';

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang()
    {
        return (self::NAMA);
    }
    public function luasBidang()
    {
        return (0.5 * $this->alas * $this->tinggi);
    }
    public function setSisi()
    {
        return (sqrt(($this->alas * $this->alas) + ($this->tinggi * $this->tinggi)));
    }
    public function kelilingBidang()
    {
        return ($this->setSisi() * 3);
    }

    public function mencetak(){
        echo '<td>'."Segitiga". '</td>';
        echo '<td>'."Alas : ".$this->alas. ", Tinggi : ".$this->tinggi. '</td>';
        echo '<td>'.$this->luasBidang().'</td>';
        echo '<td>'.$this->kelilingBidang().'</td>';
    }
}
