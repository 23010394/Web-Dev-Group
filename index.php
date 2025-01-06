<?php
// Check if the form is submitted and if the search matches "staff"
if (isset($_GET['search'])) {
  $input_search = $_GET['search'];

  $normalized_input = strtolower($input_search);

   if (strpos($normalized_input, 'staff') !== false) {
    header('Location: staffLogin.php'); // Redirect to staff login page

    $normalized_input = strtolower($input_search);
  } else if (strpos($normalized_input, 'student') !== false) {
      header('Location: studentLogin.php'); // Redirect to student login page

      $normalized_input = strtolower($input_search);
  } else if (strpos($normalized_input, 'events') !== false) {
      header('Location: Events.php'); // Redirect to events page

    $normalized_input = strtolower($input_search);
    } else if(strpos($normalized_input, 'library') !== false) {
      header('Location: Library.php'); // Redirect to library page

      $normalized_input = strtolower($input_search);
    } else if (strpos($normalized_input, 'about') !== false) {
      header('Location: About.php'); // Redirect to about page

      $normalized_input = strtolower($input_search);
    } else if(strpos($normalized_input, 'study') !== false) {
      header('Location: Study.php'); // Redirect to study page

    } else {
      echo "No results found"; // Display message if no results are found
    }
    exit();
  
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

<body>

  <!-- /This is index.php, the main page of the website -->
  <section class="header">
    <a href="index.php"><img src="images/logo-book.png" alt="University Of Wishes"></a>
    <h1>University Of Wishes</h1>
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

  <section>
    <main>
      <form action="includes/formhandler.php" method="post">
        <label for="firstname">Firstname?</label>
        <input type="text" id="firstname" name="firstname" placeholder="Firstname...">

        <label for="lastname">Lastname?</label>
        <input type="text" id="lastname" name="lastname" placeholder="Lastname...">

        <label for="password">Password?</label>
        <input type="password" id="password" name="password" placeholder="Password...">

        <label for="dateofbirth">Date of Birth?</label>
        <input type="date" id="dateofbirth" name="dateofbirth">

        <label for="favouritepet">Favourite Pet?</label>
        <select id="favouritepet" name="favouritepet">
          <option value="none">None</option>
          <option value="dog">Dog</option>
          <option value="fish">Fish</option>
          <option value="bird">Bird</option>
        </select>

        <button type="submit">Submit</button>
      </form>
    </main>
  </section>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>