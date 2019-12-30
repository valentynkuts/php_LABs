<?php

class NoweAuto
{
    public $model_auta;
    public $cena_EURO;
    public $aktualny_kurs_EURO;

    function __construct($model_auta, $cena_EURO, $aktualny_kurs_EURO)
    {
        $this->model_auta = $model_auta;
        $this->cena_EURO = $cena_EURO;
        $this->aktualny_kurs_EURO = $aktualny_kurs_EURO;
    }

    function obliczCenu(){
        return $this->cena_EURO * $this->aktualny_kurs_EURO;
    }


}