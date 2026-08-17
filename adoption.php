<?php

$conn = mysqli_connect("localhost", "root", "", "pet_adoption");

if (!$conn) {
    die("Database connection failed");
}

/* Get data from adoption.html */

$name    = $_POST["name"] ?? "";
$age     = $_POST["age"] ?? "";
$email   = $_POST["email"] ?? "";
$phone   = $_POST["phone"] ?? "";
$pet     = $_POST["pet"] ?? "";
$address = $_POST["address"] ?? "";
$reason  = $_POST["reason"] ?? "";


/* Insert into adopters table */

$sql = "INSERT INTO adopters
(name, age, phone, email, address, pet_name, reason)
VALUES
('$name', '$age', '$phone', '$email', '$address', '$pet', '$reason')";


if (mysqli_query($conn, $sql)) {

?>

<!DOCTYPE html>
<html>
<head>

<title>Adoption Successful</title>

<style>

body {
    font-family: Arial;
    background: #eef7f5;
    text-align: center;
    margin: 0;
    padding: 40px;
}

.box {
    width: 500px;
    margin: auto;
    background: white;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 4px 15px #aaa;
}

h1 {
    color: #00897b;
}

.message {
    color: #555;
    font-size: 17px;
}

.details {
    text-align: left;
    background: #e0f2f1;
    padding: 20px;
    border-radius: 15px;
    margin-top: 20px;
    line-height: 2;
}

.buttons {
    margin-top: 25px;
}

button {
    background: #00897b;
    color: white;
    border: none;
    padding: 12px 25px;
    margin: 8px;
    border-radius: 20px;
    font-size: 15px;
    cursor: pointer;
}

button:hover {
    background: #00695c;
}

</style>

</head>

<body>

<div class="box">

<h1>🐾 Adoption Successful! ❤️</h1>

<p class="message">
Thank you for choosing to adopt a pet!
</p>


<div class="details">

<b>👤 Name:</b>
<?php echo htmlspecialchars($name); ?>
<br>

<b>🎂 Age:</b>
<?php echo htmlspecialchars($age); ?>
<br>

<b>📧 Email:</b>
<?php echo htmlspecialchars($email); ?>
<br>

<b>📱 Phone:</b>
<?php echo htmlspecialchars($phone); ?>
<br>

<b>🐶 Selected Pet:</b>
<?php echo htmlspecialchars($pet); ?>
<br>

<b>🏠 Address:</b>
<?php echo htmlspecialchars($address); ?>
<br>

<b>💗 Reason:</b>
<?php echo htmlspecialchars($reason); ?>

</div>


<p class="message">
We will contact you soon. 🐾
</p>


<div class="buttons">

<button onclick="location.href='summary.php'">
    📋 Summary
</button>

<button onclick="location.href='payment.html'">
    💳 Payment
</button>

</div>

</div>

</body>
</html>

<?php

} else {

    echo "Error: " . mysqli_error($conn);

}

mysqli_close($conn);

?>




