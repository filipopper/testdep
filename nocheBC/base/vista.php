<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>mostrando controlador ver</h1>
  <p> <?=$this->variable_ver;?> </p>
  <br>
  <table>
    <tr>
      <th>Precio</th>
      <th>Cantidad</th>
      <th>Codigo</th>
      <th>Descripcion</th>
      <th>Subtotal</th>
    </tr>
    <?php foreach ($this->lista->items as $key => $aux) {; //$aux = new PedidoMostrar();
    ?>
    <tr style="background: #f00" ;>
      <td><?=$aux->precio;?></td>
      <td><?php echo $aux->cantidad; ?></td>
      <td><?php echo $aux->codigo; ?></td>
      <td><?php echo $aux->descripcion; ?></td>
      <td><?php echo $aux->subtotal; ?></td>
    </tr>
    <?php }
;?>

  </table>
  <?=$this->lista->total;?>
  <hr>
  <?php var_dump($this->lista);?>
</body>

</html>