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

    <style>
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .aboutUs {
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

        .main-content {
            display: flex;
            flex-direction: row;
            width: 100%;
            margin-top: 10px;
        }

        .sidebar {
            width: 25%;
            background-color: white;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            min-height: 100vh;
            color: black;
            border: 4px solid #454579;
            font-size: 1.2em;
        }

        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .bars {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 100%;
            padding: 20px;
        }

        .bar {
            background-color: white;
            border: 4px solid #454579;
            width: 100%;
            height: 150px;
            margin-bottom: 10px;
            padding: 20px;
            box-sizing: border-box;
            font-size: 1.2em;
        }

        .footer {
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <section class="aboutUs">
        <a href="index.php"><img src="images/logo-book.png" alt="University Of Wishes"></a>
        <h1>About Us</h1>
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

    <div class="black-bar">University Announcements & Important Updates</div>

    <div class="main-content">
        <div class="sidebar">
            <h2>Why Choose Us?</h2>
            <p><strong>Innovative Learning:</strong> We blend traditional education with modern technology to create a unique learning experience.</p>
            <p><strong>Expert Faculty:</strong> Our passionate educators and industry professionals provide valuable insights and mentorship.</p>
            <p><strong>Community & Collaboration:</strong> A diverse and inclusive network that encourages teamwork, creativity, and shared growth.</p>
            <p><strong>Endless Possibilities:</strong> No matter your background or aspirations, the University of Wishes is here to help you reach your full potential.</p>
        </div>

        <div class="content">
            <div class="bars">
                <div class="bar">
                    <h2>About Us</h2>
                    <p>Welcome to the University of Wishes! At the University of Wishes, we believe that dreams have the power to shape the future. Our institution is built on the foundation of innovation, knowledge, and the limitless potential of those who dare to aspire. Whether you're looking to unlock new skills, broaden your horizons, or transform your passions into reality, we are here to guide you on your journey..</p>
                </div>
                <div class="bar">
                    <h2>Our Mission</h2>
                    <p>To empower individuals by providing exceptional education, fostering creativity, and inspiring a lifelong love for learning. We aim to create an inclusive and dynamic environment where knowledge meets imagination, and aspirations turn into achievements.</p>
                </div>
                <div class="bar">
                    <h2>Our Vision</h2>
                    <p>We envision a world where every learner has the opportunity to turn their wishes into reality through accessible, high-quality education and a supportive academic community.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>Your Wish. Your Future. Your University.</p>
    </div>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>


