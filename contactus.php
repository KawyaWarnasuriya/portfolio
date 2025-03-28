<?php
// Success/Error message handling
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    if ($status == "success") {
        echo "<script>alert('Data inserted successfully!');</script>";
    } elseif ($status == "error") {
        echo "<script>alert('Something went wrong. Please try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <title> Portfolio | Contacts </title>
    <link rel="stylesheet" href="contactus.css">
    <link rel="image" href="images/">
    <link rel="index" href="index.html">
    <link rel="about" href="about.html">
    <link rel="project" href="projects.html">
    <link rel="skills" href="skills.html">
    <link rel="contactus" href="contactus.php">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="logo" data-aos="zoom-in" data-aos-duration="1000">
                <span>KAWYA WARNASURIYA</span>
            </div>
            <div class="links">
                <div class="link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><a href="index.html">Home</a></div>
                <div class="link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><a href="about.html">About</a></div>
                <div class="link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300"><a href="projects.html">Projects</a></div>
                <div class="link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"><a href="skills.html">Skills</a></div>
                <div class="link contact-btn" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600"><a href="contactus.php">Contact Us</a></div>
            </div>
            <i class="fa-solid fa-bars hamburg" onclick="hamburg()"></i>
        </div>
        <div class="dropdown">
            <div class="links">
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="projects.html">Projects</a>
                <a href="skills.html">Skills</a>
                <a href="contactus.php">Contact Us</a>
                <i class="fa-solid fa-xmark cancel" onclick="cancel()"></i>
            </div>
        </div>
    </nav>
    <video autoplay loop muted playsinline id="home-video">
        <source src="images/comments.mp4" type="video/mp4">
    </video>

    <div class="profile-details">
    <form action="insert.php" method="POST">  <!-- POST method and action added -->

        <div class="form-row">
            <label>Title</label>
            <div class="radio-group">
                <input type="radio" id="Mr." name="title" value="Mr." />
                <label for="Mr.">Mr.</label>
                <input type="radio" id="Mrs." name="title" value="Mrs." />
                <label for="Mrs.">Mrs.</label>
                <input type="radio" id="Miss." name="title" value="Miss." />
                <label for="Miss.">Miss.</label>
            </div>
        </div>

        <div class="form-row">
            <label for="fullName">Your Name</label>
            <input id="fullName" name="name" type="text" value="" required />
        </div>

        <div class="form-row">
            <label for="position">Your Position</label>
            <input id="position" name="position" type="text" value="" required />
        </div>

        <div class="form-row">
            <label for="mobile">Mobile Number</label>
            <input id="mobile" name="mobile" type="text" value="" required />
        </div>

        <div class="form-row">
            <label for="comments">Give Your Comments</label>
            <textarea id="comments" name="comments" rows="4" cols="50" placeholder="Write your comments here..." required></textarea>
        </div>

        <button type="submit" class="update-button">Send</button>

    </form>
</div>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({offset:0});
    </script>
    <script>
        function hamburg(){
            const navbar = document.querySelector(".dropdown")
            navbar.style.transform = "translateY(0px)"
        }
        function cancel(){
            const navbar = document.querySelector(".dropdown")
            navbar.style.transform = "translateY(-500px)"
        }
    </script>
</body>
</html>