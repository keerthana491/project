<?php

$total = 4;
$healthy = 4;
$vaccinated = 4;
$available = 4;
$dogs = 2;
$cats = 2;
$adopted = 0;

?>

<!DOCTYPE html>
<html>

<head>

<title>Pet Summary - Happy Paws</title>

<style>

body {
    font-family: Arial;
    background: #eef7f5;
    text-align: center;
    margin: 0;
}

.box {
    width: 500px;
    margin: 50px auto;
    padding: 25px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 4px 12px gray;
}

h1 {
    color: #00897b;
}

.item {
    background: #e0f2f1;
    margin: 12px;
    padding: 15px;
    border-radius: 10px;
    font-size: 18px;
}

button {
    padding: 12px 25px;
    background: #00897b;
    color: white;
    border: none;
    border-radius: 20px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 15px;
}

button:hover {
    background: #00695c;
}

</style>

</head>

<body>

<div class="box">

<h1>🐾 Happy Paws Summary</h1>

<div class="item">
🐾 Total Pets: <b><?php echo $total; ?></b>
</div>

<div class="item">
❤️ Healthy Pets: <b><?php echo $healthy; ?></b>
</div>

<div class="item">
💉 Vaccinated Pets: <b><?php echo $vaccinated; ?></b>
</div>

<div class="item">
🏠 Available for Adoption: <b><?php echo $available; ?></b>
</div>

<div class="item">
🐶 Dogs: <b><?php echo $dogs; ?></b>
</div>

<div class="item">
🐱 Cats: <b><?php echo $cats; ?></b>
</div>

<div class="item">
✅ Adopted Pets: <b><?php echo $adopted; ?></b>
</div>

<a href="payment.html">
    <button>💳 Continue to Payment</button>
</a>

</div>

</body>

</html>

