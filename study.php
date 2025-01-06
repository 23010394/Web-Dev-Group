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

<body class="studyAtWishes">

    <!-- /This is index.php, the main page of the website -->
        <section class="study">
            <a href="index.php"><img src="images/logo-book.png" alt="University Of Wishes"></a>
            <h1>Study at Wishes</h1>
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

        <div class="studyOptions">
              <h2>Study Options</h2>
						<div class="studyOptions2">
              <ul>
                <li><a href="#undergrade" id="undergradeLink">Undergraduate</a></li>
                <li><a href="#undergradeWithFundation" id="undergradeWithFundationLink">Undergraduate With Fundation</a></li>
                <li><a href="#international" id="internationalLink">International</a></li>
              </ul>
						</div>

              <h3>Study Options</h3>
            <div class="studyOptions3">
              <ul>
                <li><a href="#postgraduate" id="postgradeLink">Postgraduate</a></li>
                <li><a href="#postgradeResearch" id="postgraduateResearchLink">Postgraduate Research</a></li>
                <li><a href="#faculties" id="facultiesLink">Faculties</a></li>
              </ul>
            </div>
					</div>
  
    <div class="courses">
        <h2>Our Courses</h2>
        <p>Choose from a range of undergraduate and postgraduate courses.</p>
    </div>

    <div class="undergrade" id="undergrade">
			  <p>Undergraduate Courses</p>
           <label for="undergraduate">Courses</label>
        <select id="undergraduate" name="undergraduate">
          <option value="selectCourses">Select Options</option>
          <option value="computerScience">Computer Science</option>
          <option value="SoftwareEngineer">Software Engineer</option>
          <option value="dataSciance">Data Science</option>
          <option value="artificialIntelligence">Artificial Intelligence</option>
        </select>
    </div>

        <div class="undergrade" id="undergradeWithFundation">
			  <p>Undergraduate With Fundation</p>
           <label for="undergraduate">Courses</label>
        <select id="undergraduate" name="undergraduate">
          <option value="selectCourses">Select Options</option>
          <option value="computerScience">Computer Science</option>
          <option value="SoftwareEngineer">Software Engineer</option>
          <option value="dataSciance">Data Science</option>
          <option value="artificialIntelligence">Artificial Intelligence</option>
        </select>
    </div>

    <div class="undergrade" id="international">
        <h2>International Students</h2>
        <p>Find out more about studying at Wishes as an international student.</p>
    
     
           <label for="undergraduate">Courses</label>
        <select id="undergraduate" name="undergraduate">
          <option value="selectCourses">Select Options</option>
          <option value="computerScience">Computer Science</option>
          <option value="SoftwareEngineer">Software Engineer</option>
          <option value="dataSciance">Data Science</option>
          <option value="artificialIntelligence">Artificial Intelligence</option>
        </select>
    </div>

    <div class="postgrade" id="postgradeLink">
        <h2>Postgraduate Students</h2>
        <p>Find out more about studying at Wishes as an postgraduate student.</p>
        
            <label for="postgraduate">Courses</label>
        <select id="postgraduate" name="postgraduate">
          <option value="selectCourses">Select Options</option>
          <option value="computerScience">Computer Science</option>
          <option value="softwareEngineer">Software Engineer</option>
          <option value="dataScience">Data Science</option>
          <option value="artificialIntelligence">Artificial Intelligence</option>
        </select>
    </div>
    
    <div class="postgrade" id="postgraduateResearchLink">
       <h2>Postgraduate Research Students</h2>
        <p>Find out more about studying at Wishes as an postgraduate research student.</p>
				<p>Postgraduate Research Courses</p>
               <label for="postgradeResearch">Courses</label>
        <select id="postgradeResearch" name="postgradeResearch">
          <option value="selectCourses">Select Options</option>
          <option value="computerScience">Computer Science</option>
          <option value="softwareEngineer">Software Engineer</option>
          <option value="dataScience">Data Science</option>
          <option value="artificialIntelligence">Artificial Intelligence</option>
        </select>
    </div>

     <div class="postgrade" id="facultiesLink">
       <h2>Postgraduate Research Students</h2>
        <p>Find out more about studying at Wishes as an postgraduate research student.</p>
				<p>Postgraduate Faculties Courses</p>
               <label for="faculties">Courses</label>
        <select id="faculties" name="faculties">
          <option value="selectCourses">Select Options</option>
          <option value="computerScience">Computer Science</option>
          <option value="softwareEngineer">Software Engineer</option>
          <option value="dataScience">Data Science</option>
          <option value="artificialIntelligence">Artificial Intelligence</option>
        </select>
    </div>

     <script>
        // Smooth scrolling (optional)
        document.querySelector('#undergradeLink').addEventListener('click', function(e) {
        
            e.preventDefault(); // Prevent default anchor behavior
            document.getElementById('undergrade').scrollIntoView({
            
                behavior: 'smooth' // Scroll smoothly to the div
                  });
               });
        document.querySelector('#undergradeWithFundationLink').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default anchor behavior
            document.getElementById('undergradeWithFundation').scrollIntoView({
                behavior: 'smooth' // Scroll smoothly to the div
            });
        });
        document.querySelector('#internationalLink').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default anchor behavior
            document.getElementById('international').scrollIntoView({
                behavior: 'smooth' // Scroll smoothly to the div
            });
        });
        document.querySelector('#postgradeLink').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default anchor behavior
            document.getElementById('postgraduate').scrollIntoView({
                behavior: 'smooth' // Scroll smoothly to the div
            });
        });
        document.querySelector('#postgraduateResearchLink').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default anchor behavior
            document.getElementById('postgradeResearch').scrollIntoView({
                behavior: 'smooth' // Scroll smoothly to the div
            });
        });
        document.querySelector('#facultiesLink').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default anchor behavior
            document.getElementById('faculties').scrollIntoView({
                behavior: 'smooth' // Scroll smoothly to the div
            });
        });
    </script>
 
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
  </section>
</body>

</html>