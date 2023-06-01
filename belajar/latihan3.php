<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
    <style>
        .container{
    background-color: maroon;
    color:yellow;
    width: 50%;
    margin: 0 auto;
    margin-top: 50px;
    padding: 30px;
    border-radius: 10px;
    font-family: Verdana;
    font-size: 14pt;
        }
        </style>
</head>
<body>
    <form>
    <div class="container">
        <div>
            <h1>PT.ALFAMART</h1>
        </div>
        <div>
            <label>Banyak Barang</label>    
            <input type:text size=5 name=textbanyak
            value=<?php echo $_GET['textbanyak']?>>
        </div>
        <div>
            <label>Harga Per Barang</label>
            <input type:text size=7 name=textharga
            value=<?php echo $_GET['textharga']?>>
        </div>
        <div>
            <input type=submit value=proses>
        </div>
        <div>
          <label> Banyak bayar</label>
          <?php
$banyak=$_GET['textbanyak'];
$harga=$_GET['textharga'];
$bayar=$banyak*$harga;
?>
            <input type:text size=5 name=textbayar value=<?php echo$bayar;?>>
            
        </div>
</form>
</div>
</body>
</html>
