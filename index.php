<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trip form</title>
    <link rel="stylesheet" href="index.css" />

</head>

<body>
    <img class="bg" src="bg.jpg" alt="IIT Bombay Image" />
    <div class="container">
        <h1>Welcome To IIT Bombay UK Trip Form</h1>
        <p>
            Enter your details and submit this form to confirm your participation in
            the trip
        </p>
        <?php
        if ($insert == true) {
            echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the UK trip</p>";
        }
        ?>

        <form name="tripForm" action="index.php" method="Post" onsubmit="return validateForm()">
            <input type="text" name="name" id="name" placeholder="Enter Your Name" />
            <input type="text" name="age" id="age" placeholder="Enter Your Age" />
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender" />
            <input type="text" name="email" id="email" placeholder="Enter Your Email" />
            <input type="text" name="phone" id="phone" placeholder="Enter Your Number" />
            <textarea name="description" id="description" cols="30" rows="10"
                placeholder="Enter your other information here..."></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>

    <script src="index.js"></script>
</body>

</html>