<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Signup</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .events {
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
        }

        .black-bar {
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 1.2em;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 40px;
        }

        .box {
            background-color: white;
            border: 4px solid #454579;
            padding: 40px;
            width: 60%;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .box form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .field {
            width: 100%;
            margin-bottom: 20px;
        }

        .field label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .field input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            background-color: #454579;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
        }

        .btn:hover {
            background-color: #353568;
        }
    </style>
</head>

<body>
    <section class="events">
        <a href="index.php"><img src="images/logo-book.png" alt="University Of Wishes"></a>
        <h1>Student Sign Up</h1>
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

    <div class="black-bar">University Sign-Up page</div>

    <div class="container">
        <div class="box">
            <h2>Sign Up</h2>
            <p>Already have an account? <a href="studentLogin.php">Log in</a></p>
            <form action="studentProcess_signup.php" method="post" id="student_signup">
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

