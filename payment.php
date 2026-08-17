<?php

if (isset($_POST["otp"])) {

    if ($_POST["otp"] == $_POST["correct"]) {

        echo "<h1 style='text-align:center;color:green'>
        ✅ Payment Successful!
        </h1>";

        echo "<p style='text-align:center'>
        Thank you for adopting with Happy Paws 🐾
        </p>";

    } else {

        echo "<h2 style='text-align:center;color:red'>
        ❌ Wrong OTP
        </h2>";

    }

} else {

    $name = $_POST["name"];
    $pet = $_POST["pet"];
    $method = $_POST["method"];

    $otp = rand(100000, 999999);

?>

<!DOCTYPE html>
<html>
<head>

<title>OTP Verification</title>

<style>

body {
    font-family: Arial;
    background: #f3e5f5;
    text-align: center;
}

.box {
    width: 350px;
    margin: 100px auto;
    padding: 25px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 4px 10px gray;
}

input {
    padding: 10px;
    margin: 15px;
}

button {
    padding: 10px 25px;
    background: #7b1fa2;
    color: white;
    border: none;
    border-radius: 20px;
}

</style>

</head>

<body>

<div class="box">

<h1>🔐 OTP Verification</h1>

<p>Hello <?php echo $name; ?>!</p>

<p>Pet: <?php echo $pet; ?></p>

<p>Payment: <?php echo $method; ?></p>

<h3>Your OTP: <?php echo $otp; ?></h3>

<form method="POST">

<input type="text"
       name="otp"
       placeholder="Enter OTP"
       maxlength="6"
       required>

<input type="hidden"
       name="correct"
       value="<?php echo $otp; ?>">

<br>

<button type="submit">
Verify OTP
</button>

</form>

</div>

</body>
</html>

<?php

}

?>