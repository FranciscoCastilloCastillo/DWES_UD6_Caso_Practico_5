<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DWES</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <header>
      <h2>DESARROLLO WEB ENTORNO SERVIDOR - Caso Práctico 5 - Unidad 6</h2>
    </header>
    <article>
      <fieldset>
        <form action="procesar_datos.php" method="POST">
          <legend><h2>Especifica la moneda origen y final y pulsa en convertir</h2></legend>
          <legend>Cantidad:</legend>
          <input type="number" id="cantidad" name="cantidad" required></br></br>
          <legend>Moneda origen:</legend>
          <select name="moneda_origen">
            <option value="Euros">Euros</option>
            <option value="Libras">Libras</option>
            <option value="Dolares">Dólares</option>
          </select></br></br>
          <legend>Moneda destino:</legend>
          <select name="moneda_destino">
            <option value="Euros">Euros</option>
            <option value="Libras">Libras</option>
            <option value="Dolares">Dólares</option>
          </select></br></br>
          <input type="submit" value="Convertir">
        </form>
      </fieldset>
    </article>
    <footer>
      <h5>Alumno: Francisco Manuel Castillo Castillo</h5>
      <h5>Asignatura: Desarrollo Web Entorno Servidor</h5>
    </footer>
  </body>
</html>
