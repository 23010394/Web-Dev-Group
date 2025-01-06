<?php
session_start();

if (isset($_SESSION['student_id'])) {

    $mysqli = require __DIR__ . "/studentDatabase.php";

    $sql = "SELECT * FROM student_login
                     WHERE id = {$_SESSION['student_id']}";

    $result = $mysqli->query($sql);

    $student_login = $result->fetch_assoc();

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

 <body class="studentHomePage">

    <!-------------------------- /This is Student Home page.-------------------------->
    <section class="studentheader">
        <a href="index.php"><img src="images/logo-book.png" class="logo" alt="University Of Wishes"></a>

        <h1>Student Home</h1>

        <?php if (isset($student_login)): ?>

            <div class="student-info">
                <p>Hello <?= htmlspecialchars($student_login["name"]) ?></p>

                <p><a href="studentLogout.php">Logout</a></p>
            </div>

        <?php else: ?>

            <div class="student-info">
                <p><a href="studentLogin.php">Log in</a> or <a href="student_signup.php">sign up</a></p>
            </div>

        <?php endif; ?>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="staffLogin.php">Staff</a></li>
        </ul>

        <form class="navbar-form navbar-left" action="/action_page.php">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="search btn-default">Search</button>
        </form>
    </section>
    <div class="main-box top">
        <div class="top">
            <div class="box">
                <p>Student Home Page</p>
            </div>
            <div class="box">
                <p>Welcome to the student home page. Here you can view and manage your account details.</p>
            </div>
        </div>
    </div>

 </body>

</html>