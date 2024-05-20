<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Phone Dealer</title>
    <style>
        /* CSS for card layout */
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            width: 300px;
            display: inline-block;
            vertical-align: top;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .card h2 {
            margin-top: 10px;
        }

        .card p {
            margin: 10px 0;
        }

        .price {
            font-weight: bold;
            color: green;
        }
    </style>
</head>

<body>
    <!-- Include navigation -->
    <?php include 'navbar.php' ?>

    <!-- Main Content -->
    <h1>About Phone Dealer</h1>

    <!-- Phone Cards -->
    <div class="card">
        <img src="./img/phone1.jpg" alt="Phone 1">
        <h2>Apple iPhone 15 Plus</h2>
        <p class="price">$500</p>
    </div>

    <div class="card">
        <img src="./img/phone2.jpg" alt="Phone 2">
        <h2>pple iPhone 15</h2>
        <p class="price">$600</p>
    </div>

    <div class="card">
        <img src="./img/phone3.jpg" alt="Phone 2">
        <h2>Apple iPhone 14</h2>
        <p class="price">$600</p>
    </div>

    <div class="card">
        <img src="./img/phone4.jpg" alt="Phone 2">
        <h2>Apple iPhone 13 Pro Max</h2>
        <p class="price">$600</p>
    </div>

    <div class="card">
        <img src="./img/phone5.jpg" alt="Phone 2">
        <h2>Samsung Galaxy S24 Ultra 5G</h2>
        <p class="price">$600</p>
    </div>

    <div class="card">
        <img src="./img/phone6.jpg" alt="Phone 2">
        <h2>Samsung Galaxy A35 5G</h2>
        <p class="price">$600</p>
    </div>

    <div class="card">
        <img src="./img/phone7.jpg" alt="Phone 2">
        <h2>Samsung Galaxy S24 5G</h2>
        <p class="price">$600</p>
    </div>

    <div class="card">
        <img src="./img/phone8.jpg" alt="Phone 2">
        <h2>OnePlus Ace 3</h2>
        <p class="price">$600</p>
    </div>

    <div class="card">
        <img src="./img/phone9.jpg" alt="Phone 2">
        <h2>Google Pixel Fold</h2>
        <p class="price">$600</p>
    </div>



    <!-- Footer -->
</body>

</html>
