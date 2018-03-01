<?php

  /**
   * Clase Conversor de monedas
   */
  class Conversion {

    private $euros;
    private $libras;
    private $dolares;

    //Getters y setters
    public function getEuros(){
      return $this->euros;
    }

    public function setEuros($euros){
      $this->euros = $euros;
    }

    public function getLibras(){
      return $this->libras;
    }

    public function setLibras($libras){
      $this->libras = $libras;
    }

    public function getDolares(){
      return $this->dolares;
    }

    public function setDolares($dolares){
      $this->dolares = $dolares;
    }

    /**
    * El método tiene como parámetros las monedas origen y destino y la cantidad
    */
    public function calculaConversion($moneda_origen, $moneda_destino, $cantidad){

      //A fecha 01/03/2018, los cambios son los siguientes
      //1 Euro = 0.888635 libras
      //1 Euro = 1.22104 dólares
      //1 libra = 1.12526 euros
      //1 libra = 1.37311 dólares
      //1 dólar = 0.819045 euros
      //1 dólar = 0.728352 libras
      //Datos de http://www.xe.com/es/

      //Si la moneda de origen es el euro
      if($moneda_origen == "Euros"){
        //Si la moneda destino es la libra
        if($moneda_destino == "Libras"){
          $this->setLibras($cantidad*0.888635);
        }
        //O es el dólar
        else if($moneda_destino == "Dolares"){
          $this->setDolares($cantidad*1.22104);
        }
        //Sino, el valor es en euros y es el mismo
        else{
          $this->setEuros($cantidad*1);
        }
      }
      else if($moneda_origen == "Libras"){
        //Si la moneda destino es la libra
        if($moneda_destino == "Euros"){
          $this->setEuros($cantidad*1.12526);
        }
        //O es el dólar
        else if($moneda_destino == "Dolares"){
          $this->setDolares($cantidad*1.37311);
        }
        //Sino, el valor es en libras y es el mismo
        else{
          $this->setLibras($cantidad*1);
        }
      }
      //La moneda origen es el dólar
      else{
        //Si la moneda destino es el euro
        if($moneda_destino == "Euros"){
          $this->setEuros($cantidad*0.819045);
        }
        //O es la libra
        else if($moneda_destino == "Libras"){
          $this->setLibras($cantidad*0.728352);
        }
        //Sino, el valor es en libras y es el mismo
        else{
          $this->setDolares($cantidad*1);
        }
      }
    }
  }
 ?>
