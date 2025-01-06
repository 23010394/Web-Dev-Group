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

<body class="body-staffLogin">
    <section class="staffLogin">
        <a href="index.php"><img src="images/logo-book.png" alt="University Of Wishes"></a>
        <h1>Staff sign up</h1>
      <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="staffLogin.php">Staff</a></li>
            <li><a href="studentLogin.php">Student</a></li>
        </ul>
    </section>

    <div class="container">
            <div class="box form-box">
        

                <h2>Sign up</h2>
                
                <p>Already have an account? <a href="staffLogin.php">Log in</a></p>
    <form action="process_signup.php" method="post" id="staff_signup">
       
        <div class="field input">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" autocomplete="off" required>
        </div>
        <div class="field input">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" autocomplete="off" required>
        </div>
        <div class="field input">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" autocomplete="off" required>
        </div>

        <div class="field input">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" autocomplete="off" required>
        </div>

        <div class="field">
            <input type="submit" class="btn" name="submit" value="Sign up" required>
        </div>

    </form>
    </div>
    </div>
</body>
</html>