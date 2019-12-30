<?php

class Ubezpieczenie extends AutoZDodatkami
{
    public $pierwsze_auto_cena;
    public $liczba_lat_cena;

    function __construct($model_auta, $cena_EURO, $aktualny_kurs_EURO,
                         $alarm_cena,$radioodtwarzacz_cena,$klimatyzacja_cena,
                         $pierwsze_auto_cena,$liczba_lat_cena)
    {
        parent::__construct($model_auta, $cena_EURO, $aktualny_kurs_EURO,
                            $alarm_cena,$radioodtwarzacz_cena,$klimatyzacja_cena);

        $this->pierwsze_auto_cena = $pierwsze_auto_cena;
        $this->liczba_lat_cena = $liczba_lat_cena;
    }

    function obliczCenu(){
        $c = parent::obliczCenu();
        return $c + $this->pierwsze_auto_cena + $this->liczba_lat_cena;
    }
}
