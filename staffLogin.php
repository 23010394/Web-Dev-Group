<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";

    // Using prepared statements to avoid SQL injection
    $stmt = $mysqli->prepare("SELECT * FROM staff_login WHERE email = ?");
    $stmt->bind_param("s", $_POST['email']); // "s" is for the string type
    $stmt->execute();
    $result = $stmt->get_result();

    $staff_login = $result->fetch_assoc();

    // Check if the staff member exists and the password matches
    if ($staff_login && password_verify($_POST['password'], $staff_login['password_hash'])) {
        session_start();
        session_regenerate_id();

        $_SESSION['staff_id'] = $staff_login['id'];

        header('Location: staffHomePage.php');
        exit();
    } else {
        $is_invalid = true;
    }

    // Close the statement
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Group Educational Website</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  <link rel="stylesheet" href="style.css">

</head>

<body class="body-staffLogin">
    <section class="staffLogin">
        <a href="index.php"><img src="images/logo-book.png" alt="University Of Wishes"></a>
        <h1>Staff Login</h1>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="staffLogin.php">Staff</a></li>
            <li><a href="studentLogin.php">Student</a></li>
        </ul>
    </section>

    <div class="container">
        <div class="box form-box">
            <h2>Log in</h2>

            <form action="" method="post">
                <div class="field input">

                <?php if ($is_invalid): ?>
                    <div class="validate">
                        <em>Invalid login</em>
                    </div>
                <?php endif; ?>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" autocomplete="on" required
                        value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" autocomplete="off" required
                        value="<?= htmlspecialchars($_POST["password"] ?? "") ?>">
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Log in">
                </div>

                <div class="links">
                    Don't have an account? <a href="staff_signup.php">Sign up now</a>
                </div>
            </form>
        </div>
    </div>
 </body>

</html>