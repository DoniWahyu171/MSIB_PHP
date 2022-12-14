
<?php
//buat class  pegawai
class Pegawai{
     //variabel
        public $nip;
        public $nama;
        public $jabatan;
        public $agama;
        public $status;

        //variabel static dan constant
        static $jml = 0;
        const PT = 'PT. Nurul Fikri Cipta Inovasi';

    //buat funtion constract

    public function __construct($nip,$nama,$jabatan,$agama,$status){
        //lalu lakukan this agar dapat di gunakan oleh function/kondisi yang lain
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this-> status = $status;
        self::$jml++;
    }

    public function setGapok(){
        switch ($this->jabatan) {
            case 'Manager':
                $gapok = 15000000;
                break;
            case 'Asisten Manager':
                $gapok = 10000000;
                break;
            case 'Kabag':
                $gapok = 7000000;
                break;
            case 'Staff':
                $gapok = 4000000;
                break;
            default:
                $gapok = 0;
                break;
        }
        return $gapok;
    }
    public function setTunjab(){
        $tunjangan_jabatan = 0.2 * $this->setGapok();
        return $tunjangan_jabatan;
    }
    public function setTunkel(){
        $tunjangan_keluarga = ($this->status == 'Menikah') ? 0.1 * $this->setGapok():0;
        return $tunjangan_keluarga;
    }
    public function setGator(){
        $bruto = $this->setGapok() + $this->setTunjab() + $this->setTunkel();
        return $bruto;
    }
    public function setZakat(){
        $zakat = ($this->agama == 'Islam' && $this->setGator() >= 6000000)? 0.025 * $this->setGator():0;
        return $zakat;
    }
    public function mencetak(){
            echo '<b><u>'.self::PT.'</u></b>'; 
            echo '<br/>NIP: '.$this->nip;
            echo '<br/>Nama Pegawai: '.$this->nama;
            echo '<br/>Jabatan: '.$this->jabatan;
            echo '<br/>Agama: '.$this->agama;
            echo '<br/>Status: '.$this->status;
            echo '<br/>Gaji Pokok: '.$this->setGapok();
            echo '<br/>Tunjangan Jabatan: '.$this->setTunjab();
            echo '<br/>Tunjangan Keluarga: '.$this->setTunkel();
            echo '<br/>Zakat Profesi: '.$this->setZakat();
            echo '<hr/>';
    }

}
