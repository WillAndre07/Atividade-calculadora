<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculadora em PHP</title>
  </head>

  <body>

    <form method="post" action="calcular.php">
      <label>
        Primeiro Número:
        <input type="text" name="n1">
      </label>

      <br>

      <label>
        Segundo Número:
        <input type="text" name="n2">
      </label>
  
      <br>
      <br>

      Operação:
      <label>
        <input type="radio" name="operacao" value="somar">
        Somar
      </label>

      <label>
        <input type="radio" name="operacao" value="subtrair">
        Subtrair
      </label>

      <label>
        <input type="radio" name="operacao" value="multiplicar">
        Multiplicar
      </label>

      <label>
        <input type="radio" name="operacao" value="dividir">
        Dividir
      </label>

      <br>

      <label>
        <input type="submit" value="Calcular!">
      </label>

      <br>
      <br>

      <label for="">Resultado: 
        <input type="number"  disabled value="<?php echo isset($_SESSION['resultado']) ? $_SESSION['resultado'] : ''; unset($_SESSION['resultado']);?>">
      </label>
    </form>
  </body>
</html>