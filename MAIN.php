<?php
    require_once "Product.php";
    require_once "CDMusic.php";
    require_once "CDRack.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="MAIN.css">
</head>
<body>
    <div class="Head">
        <h2>PRODUCT</h2>
    </div>

    <div class="ISI">
    <form method="POST" action="">
        <table>
            <tr>
                <td>NAME</td>
                <td style="padding-left: 7%;"><input type="text" name="name" required="required"></td>
            </tr>
            <tr>
                <td>PRICE</td>
                <td style="padding-left: 7%;"><input type="text" name="price" required="required"></td>
            </tr>
            <tr>
                <td>DISCOUNT</td>
                <td style="padding-left: 7%;"><input type="text" name="discount" required="required"></td>
            </tr>
            <tr>
                <td>ARTIST</td>
                <td style="padding-left: 7%;"><input type="text" name="artist" required="required"></td>
            </tr>
            <tr>
                <td>GENRE</td>
                <td style="padding-left: 7%;"><input type="text" name="genre" required="required"></td>
            </tr>
            <tr>
                <td>RACK NAME</td>
                <td style="padding-left: 7%;"><input type="text" name="rackname" required="required"></td>
            </tr>
            <tr>
                <td>CAPACITY</td>
                <td style="padding-left: 7%;"><input type="text" name="capacity" required="required"></td>
            </tr>
            <tr>
                <td>MODEL</td>
                <td style="padding-left: 7%;"><input type="text" name="model" required="required"></td>
            </tr>
        </table>
        <input type="submit" class="confirm" name="submit" value="SUBMIT">
    </form>
    </div>
    
    <div class="HASIL">
    <?php
    if (isset($_POST['submit'])) 
    {
        $product = new Product();
        $product->setName($name = $_POST['name']);
        $product->setPrice($price = $_POST['price']);
        $product->setDiscount($discount = $_POST['discount']);
        echo "PRODUCT" . "<br>";
        echo "<pre>";
        echo "Name        : " . $product->getName() . "<br>";
        echo "Price       : Rp " . $product->getPrice() . "<br>";
        echo "Discount    : " . $product->getDiscount() . "<br><br>";
        echo "</pre>";
        
        //CDMusic
        $cd_music = new CDMusic();
        $cd_music->setArtist($artist = $_POST['artist']);
        $cd_music->setGenre($genre = $_POST['genre']);
        echo "CD MUSIC" . "<br>";
        echo "<pre>";
        echo "Artist Name : " . $cd_music->artist . "<br>";
        echo "Price       : Rp " . $cd_music->getPriceWithTaxCDM() . "<br>";
        echo "Discount    : " . $cd_music->getDiscountTaxCDM() . "<br>";
        echo "Genre       : " . $cd_music->genre . "<br><br>";
        echo "</pre>";

        //CDRack
        $cd_rack = new CDRack();
        $cd_rack->setRackName($rackname = $_POST['rackname']);
        $cd_rack->setCapacity($capacity = $_POST['capacity']);
        $cd_rack->setModel($model = $_POST['model']);
        echo "CD RACK" . "<br>";
        echo "<pre>";
        echo "Name        : " . $cd_rack->rackname . "<br>";
        echo "Price       : Rp " . $cd_rack->getPriceWithTaxCDR() . "<br>";
        echo "Discount    : " . $cd_rack->getDiscountTaxCDR() . "<br>";
        echo "Capacity    : " . $cd_rack->capacity . "<br>";
        echo "Model       : " . $cd_rack->model . "<br>";
        echo "</pre>";
    }
    ?>
    </div>
    
</body>
</html>