<?php
  function codigoC(){
    $formatoT = "d-m-Y H:i:s";
    $fechaT =  date($formatoT, $timestamp);    
    $aceptacion = $fechaT;
    return $aceptacion;
  }
