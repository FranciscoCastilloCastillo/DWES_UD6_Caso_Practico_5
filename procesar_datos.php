<?php

  include_once("conversion.php");

  //Comprobamos si están definidas todas las variables
  if(isset($_POST["cantidad"]) && (!empty($_POST["cantidad"]) || $_POST["cantidad"] >= 0)){

    //Obtenemos las variables
    $cantidad = $_POST["cantidad"];
    $moneda_origen = $_POST["moneda_origen"];
    $moneda_destino = $_POST["moneda_destino"];

    if($cantidad > 0){
      $conversion = new Conversion();
      $conversion->calculaConversion($moneda_origen, $moneda_destino, $cantidad);

      if($moneda_destino == "Euros"){
        echo "<h1>".$cantidad." ".$moneda_origen." equivalen a ".$conversion->getEuros()." euros</h1>";
      }
      else if($moneda_destino == "Libras"){
        echo "<h1>".$cantidad." ".$moneda_origen." equivalen a ".$conversion->getLibras()." libras</h1>";
      }
      else{
        echo "<h1>".$cantidad." ".$moneda_origen." equivalen a ".$conversion->getDolares()." dólares</h1>";
      }
    }
    else{
      echo "<h1>La cantidad no puede ser inferior a 1</h1>";
    }
  }
  else{
    echo "<h1>En principio no debe entrar aquí porque en el formulario es required</h1>";
  }
?>
