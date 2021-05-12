<?php  
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <div class="container" mt=5>
        <div class="row">
        <?php foreach($products as $product){ ?>
            <div class="col-lg-3">
                <div class="card">
                    <img src="images/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center" >
                        <h5 class="card-title"><?php echo $product['name'] ?></h5>
                        <p class="card-text">PRICE <?php echo $product['price'] ?></p>
                        <form action= "./index.php" method="post" >
                        <input type="hidden" name="product_name" value="<?php echo $product['name'] ?>"> 
                        <button type="submit" name= "add" class="btn btn-info">Add To Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php }
            $_SESSION['cart'] = $cart;
            $_SESSION['product_count'] = $product_count;
            $_SESSION['price']  = $price;
            ?>
        </div>
    </div>
</body>
</html>