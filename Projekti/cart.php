<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cartstyle.css">
    <script src="storecart.js" async></script>
    <title>Shopping Cart</title>
</head>
<body>
    <?phpinclude'header.php'?>
    
<section class="container content-section">
    <h2 class="section-header">CART</h2>
    <div class="cart-row">
        <span class="cart-item cart-header cart-column">ITEM</span>
        <span class="cart-price cart-header cart-column">PRICE</span>
        <span class="cart-quantity cart-header cart-column">QUANTITY</span>
    </div>
    <div class="cart-items">
        <div class="cart-row">
            <div class="cart-item cart-column">
                <img class="cart-item-image" src="img/s1.jpg" width="100" height="100">
                <span class="cart-item-title">Laptop Samsung S1</span>
            </div>
            <span class="cart-price cart-column">$800</span>
            <div class="cart-quantity cart-column">
                <input class="cart-quantity-input" type="number" value="1">
                <button class="btn btn-danger" type="button">REMOVE</button>
            </div>
        </div>
    </div>
    <div class="cart-total">
        <strong class="cart-total-title">Total</strong>
        <span class="cart-total-price">$324</span>
    </div>
    <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
</section>
</body>
</html>