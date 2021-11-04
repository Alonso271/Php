<?php
session_start();
if (empty($_REQUEST["nombre"])) {
    ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LA FRUTERIA DEL SIGLO XXI</h1>
    <h2>BIENVENIDO A LA NUESTRA FRUTERIA DEL SIGLO XXI</h2>
    <form action="" method="get">
        <p>Introduzca su nombre del cliente: </p> <input type="text" name="nombre">
    </form>
</body>
</html>
  <?php 
}else{
        $_SESSION["nombre"] = $_REQUEST["nombre"];
        ?>
         <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>LA FRUTERIA DEL SIGLO XXI</h1>
        <h2>REALICE SU COMPRA <?= strtoupper($_REQUEST["nombre"])?></h2>
        <form action="" method="post">
            <?php
                        if (isset($_REQUEST["accion"])) {
                            if ($_REQUEST["accion"] == "anotar") {
                                echo " <p>Este es su pedido:</p>";
                                if (isset($_SESSION["carrito"][$_REQUEST["frutas"]])) {
                                $_SESSION["carrito"][$_REQUEST["frutas"]] += $_REQUEST["cantidad"];
                                }else {
                                $_SESSION["carrito"][$_REQUEST["frutas"]] = $_REQUEST["cantidad"];
                                }
                                foreach ($_SESSION["carrito"] as $key => $value) {
                                echo '<br>'.$key." ".$value;
                                }
                            }
                        }
            ?>
            <h3>
                <select name="frutas">
                    <option value="platanos">Platanos</option>
                    <option value="naranjas">Naranjas</option>
                    <option value="limones">Limones</option>
                    <option value="manzana">Manzana</option>
                </select>
                Cantidad: <input type="number" name="cantidad">
                <input type="submit" name="accion" value="anotar">
                <input type="submit" name="accion" value="terminar">
            </h3> 
        </form>
    </body>
    </html> 
        <?php
if ($_REQUEST["accion"] == "terminar") {
    ?>
    <br> Muchas gracias, por su pedido. <br><br>
    <input type="button" value=" NUEVO CLIENTE " onclick="location.href='<?=$_SERVER['PHP_SELF'];?>'">
    <?php 
    session_destroy();
    exit;
}
    }
?>
