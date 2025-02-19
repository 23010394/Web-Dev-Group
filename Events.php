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
    <section class="events">
        <a href="index.php"><img src="images/logo-book.png" alt="University Of Wishes"></a>
        <h1>Events</h1>
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

    <div class="black-bar">University Events</div>

    <div class="main-content">
        <div class="sidebar">
            <h2>Calendar</h2>
            <p><strong>Induction:</strong> The university follows a yearly semester system starting with an induction week in September, this allows all new students to come to terms with life at university. Allowing our students to ease into a new city and university helps with students mental health and productivity.</p>
            <p><strong>Term Time:</strong> We have a simple term time structure to allow students to keep track of studying whilst giving time for travelling home and a personal life. To do this we work in blocks allowing a week off for every four the is studied.</p>
        </div>

        <div class="content">
            <div class="bars">
                <div class="bar">
                    <h2>Canteen</h2>
                    <p> The canteen is the heart of any university, offering a place to refuel and the perfect place for our students to socialize. Our canteen has a lot to offer ranging from a salad bar, sandwich station and even a selection of hot food. The hot food station changes seasonally allowing for our students to try new and interesting tastes, so make sure to pop in and see what is on offer.</p>
                </div>
                <div class="bar">
                    <h2>Graduation</h2>
                    <p>Graduation is a momentous occasion that marks the culmination of years of dedication, learning, and personal growth. It is a time of celebration, where students transition from academic life to new beginnings, whether in further education, careers, or personal aspirations. We offer Winter and Summer graduations to allow for everyone to have their special day.</p>
                </div>
                <div class="bar">
                    <h2>Life at University of Wishes</h2>
                    <p>Life at the University of Wishes is a unique and enriching experience, where learning goes beyond textbooks and lectures. Here, students navigate a dynamic environment filled with real-world challenges, personal growth, and endless opportunities for discovery. From engaging discussions with diverse peers to hands-on experiences that shape character and resilience, every day is a lesson in itself. Whether mastering new skills, forging lifelong connections, or embracing unexpected twists, the University Wishes prepares its students not just for a career, but for the journey of life itself.</p>
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



