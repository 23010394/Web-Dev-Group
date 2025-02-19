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
        <h1>Library</h1>
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

    <div class="black-bar">University Libarary</div>

    <div class="main-content">
        <div class="sidebar">
            <h2>Library necessities</h2>
            <p><strong>Libaray card:</strong> To collect a student library card, simply visit the library with your student ID and fill out a brief registration form. The staff will process your information, and you'll receive your card, granting you access to borrow books, use study spaces, and enjoy other library services.</p>
        </div>

        <div class="content">
            <div class="bars">
                <div class="bar">
                    <h2>Library</h2>
                    <p> At our Library, visitors can enjoy a variety of services, from borrowing books and e-books to using free Wi-Fi and public computers. The library offers cozy study rooms, perfect for both quiet solo work and group collaborations. Plus, the library staff are always ready to assist with research or recommend your next great read. With access to online resources and databases, our Library has something for everyone.</p>
                </div>
                <div class="bar">
                    <h2>OneClick</h2>
                    <p>OneClick is an innovative online library service that allows members to access a vast collection of e-books and research materials from anywhere. The service also offers educational resources, including interactive tutorials and expert-led webinars, to support learning and personal growth. OneClick's seamless interface ensures that readers of all ages can enjoy a wide range of genres and topics at their convenience. OneClick also offers a referencing service for all different reference styles making it handy for our students.</p>
                </div>
                <div class="bar">
                    <h2>Referencing</h2>
                    <p>OneClick is a powerful tool designed to simplify the citation process by automatically generating references for you. Whether you're working on an academic paper or a creative project, OneClick instantly formats citations in various styles, including APA, MLA, and Chicago. Just enter the source details or upload a document, and OneClick takes care of organizing references and simplifying assignments for our students.</p>
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
