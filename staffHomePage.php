<?php
    session_start();

    if (isset($_SESSION['staff_id'])) {

     $mysqli = require __DIR__ . "/database.php";

             $sql = "SELECT * FROM staff_login
                     WHERE id = {$_SESSION['staff_id']}";

             $result = $mysqli->query($sql);

             $staff_login = $result->fetch_assoc();

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

 <body class="staffHomePage">

    <!-- /This is Staff Home page, the main staff page -->
     <section class="staffheader">
            <a href="index.php"><img src="images/logo-book.png" class="logo" alt="University Of Wishes"></a>
    
             <h1>Staff Home</h1>

             <?php if (isset($staff_login)): ?>
                
                <div class="staff-info">
                     <p>Hello <?=htmlspecialchars( $staff_login["name"] )?></p>

                     <p><a href="logout.php">Logout</a></p>
                </div>

            <?php else: ?>

                <div class="staff-info">
                    <p><a href="staffLogin.php">Log in</a> or <a href="staff_signup.php">sign up</a></p>
                </div>

                <?php endif; ?>
        
             <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="studentLogin.php">Student</a></li>
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
                <p>Staff Home Page</p>
            </div>
            <div class="box">
                <p>Welcome to the staff home page. Here you can view and manage your account details.</p>
            </div>
        </div>
    </div>

    <section>
        <h1>Staff Portal</h1>

        <form method="post" action="" enctype="multipart/form-data">
                <label for="file">Upload a file:</label>
                <input type="file" name="file" id="file">
                <br>
                <label for="resource">Select file:</label>
                <input type="text" name="resource" id="resource">
                <br>
                <input type="submit" name="submit" value="Submit">

        </form>
    </section>

    <h2>Download file</h2>
    <ul>
        <li><a href="download.php?file=resource1">Resource 1</a></li>
        <li><a href="download.php?file=resource2">Resource 2</a></li>
        <li><a href="download.php?file=resource3">Resource 3</a></li>
    </ul>

 </body>
</html>