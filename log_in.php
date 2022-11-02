<?php
    session_start();
    require("./auth/log_in.class.php");
?>

<?php
    if (isset($_POST['submit'])) {
        $user = new LoginUser($_POST['uid'], $_POST['pwd']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@700&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet">
    <title>Log In</title>
</head>
<body>
<div class="title-container">
    <h1>Log-In</h1>
</div>

    <div class="chalkboard-container">
    <form action="" method="post" enctype="multipart/form-data" class="login-form">
        <h4>All fields are required</h4>

        <label for="uid">Username:</label>
        <input type="text" name="uid" required>

        <label for="pwd">Password:</label>
        <input type="text" name="pwd" required>

        <button type="submit" name="submit">Log in</button>

        <p class="error"><?php echo @$user -> error; ?></p>
        <p class="success"><?php echo @$user -> success; ?></p>
    </form>
    </div>

<?php
    include_once('footer.php');
?>
</body>
</html>