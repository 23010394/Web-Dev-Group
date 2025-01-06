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

<body>

    <!-- /This is index.php, the main page of the website -->
<section class="library">
    <a href="index.php"><img src="images/logo-book.png" alt="University Of Wishes"></a>
    <h1>Library Resources</h1>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="staffLogin.php">Staff</a></li>
      <li><a href="studentLogin.php">Student</a></li>
    </ul>

    <form class="navbar-form navbar-left" method="GET" action="index.php">
      <div class="form-group">
        <input type="text" class="form-control" name="search" placeholder="Search" autocomplete="on">
      </div>
      <button type="submit" class="search btn-default">Search</button>
    </form>

        <div class="subheader">
            <ul>
                <li><a href="About.php">About Us</a></li>
                <li><a href="Study.php">Study at Wishes</a></li>
                <li><a href="Events.php">Events</a></li>
                <li><a href="Library.php">Library Resources</a></li>
            </ul>
        </div>
    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>