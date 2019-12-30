<?php

class AutoZDodatkami extends NoweAuto
{
    public $alarm_cena;
    public $radioodtwarzacz_cena;
    public $klimatyzacja_cena;

    function __construct($model_auta, $cena_EURO, $aktualny_kurs_EURO,
                         $alarm_cena,$radioodtwarzacz_cena,$klimatyzacja_cena)
    {
        parent::__construct($model_auta, $cena_EURO, $aktualny_kurs_EURO);

        $this->alarm_cena = $alarm_cena;
        $this->radioodtwarzacz_cena = $radioodtwarzacz_cena;
        $this->klimatyzacja_cena = $klimatyzacja_cena;
    }

    function obliczCenu(){
        $c = parent::obliczCenu();
        return $c + $this->alarm_cena + $this->radioodtwarzacz_cena + $this->klimatyzacja_cena;
    }

}