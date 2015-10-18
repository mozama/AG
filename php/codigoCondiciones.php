<?php
  date_default_timezone_set('America/Mexico_City');
    function codigoC(){
      $formatoT = "d-m-Y H:i:s";
      $time = time();
      $fechaT =  date($formatoT, $time);
      $aceptacion = $fechaT;
      return $aceptacion;
    }
