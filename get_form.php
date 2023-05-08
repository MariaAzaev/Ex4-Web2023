<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
</head>
<body>
    <h2>Welcome <?php echo $_GET["fullName"]; ?></h2>
    <h3>
        The person you want to send a message to: <?php echo $_GET["personFullName"]; ?>
        Your phone is: <?php echo $_GET ["phone"]; ?><br>
        Your message is: <?php echo $_GET["message"]; ?><br>
    </h3>
</body>
</html>