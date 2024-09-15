<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Brush</title>

    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
    <nav>
        <label class="logo">Beauty Brush</label>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#about" id="about-link">About</a></li>
            <li><a href="#contact" id="contact-link">Contact</a></li>
            <li><a href="view_comm.php">View Testimonials</a></li>
            <li><a href="submit_comm.php">Submit Testimonial</a></li>
            <li><a href="register.php" class="btn btn-success">Sign Up</a></li>
            <li><a href="login.php" class="btn btn-success">Log In</a></li>
        </ul>
    </nav>

    <div class="section1">
        <label class="img_text">Transforming beauty into art, one course at a time</label>
        <img class="main_img" src="images/bg2.jpg" alt="Main Image">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="welcome_img" src="images/2.jpg" alt="Welcome Image">
            </div>
            <div class="col-md-8">
                <h1>Welcome to Beauty Brush</h1>
                <p>At Beauty Brush Academy, we believe that makeup is not just about beauty—it's an art form, a passion, and a powerful way to express yourself. Since 2005, our academy has been dedicated to providing top-notch education and training in makeup artistry. We offer a comprehensive curriculum that includes everything from the basics of makeup application to advanced techniques and special effects. Our mission is to empower aspiring makeup artists with the skills and confidence they need to succeed in the ever-evolving beauty industry.</p>
                <p>Our courses are designed to cater to all levels, whether you're just starting out or looking to refine your skills. With a team of experienced instructors and a hands-on approach to learning, you'll gain practical experience and knowledge that will set you apart in the world of makeup. Join us at Beauty Brush and take the first step towards a glamorous career in makeup artistry!</p>
            </div>
        </div>

        <center>
            <h1>Our Instructors</h1>
        </center>

        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="images/jane.jpeg" alt="Jane">
                <p>Bringing a decade of high-fashion experience, this pro transforms runway trends into teachable techniques, ensuring every student masters the art of making bold statements.</p>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="images/marie.jpeg" alt="Marie">
                <p>With a knack for flawless bridal and event makeup, this expert's elegant touch has turned countless special occasions into memorable masterpieces.</p>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="images/sakura.jpg" alt="Sakura">
                <p>Blending tradition with modern flair, this guru excels in creating natural, radiant looks, teaching the perfect fusion of skincare and artistry for stunning results.</p>
            </div>
        </div>

        <div id="about-section" style="display:none;">
        <div class="container">
            <h2>About Us</h2>
            <p>At Beauty Brush Academy, we believe that makeup is not just about beauty—it's an art form, a passion, and a powerful way to express yourself. Since 2005, our academy has been dedicated to providing top-notch education and training in makeup artistry. We offer a comprehensive curriculum that includes everything from the basics of makeup application to advanced techniques and special effects. Our mission is to empower aspiring makeup artists with the skills and confidence they need to succeed in the ever-evolving beauty industry.</p>
            <p>Our courses are designed to cater to all levels, whether you're just starting out or looking to refine your skills. With a team of experienced instructors and a hands-on approach to learning, you'll gain practical experience and knowledge that will set you apart in the world of makeup. Join us at Beauty Brush and take the first step towards a glamorous career in makeup artistry!</p>
        </div>

        <center>
            <h1>Our Courses</h1>
        </center>

        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="images/c1.jpeg" alt="Fundamentals of Makeup Artistry">
                <h3>Fundamentals of Makeup Artistry</h3>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="images/c2.jpeg" alt="Bridal Makeup Masterclass">
                <h3>Bridal Makeup Masterclass</h3>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="images/c3.jpeg" alt="Brow Shaping & Lash Styling">
                <h3>Brow Shaping & Lash Styling</h3>
            </div>
        </div>
    </div>

    
    </div>

    <div id="contact-section" style="display:none;">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Address: 123 Beauty St, Glamour City</p>
            <p>Email: info@beautybrush.com</p>
            <p>Phone: (123) 456-7890</p>
        </div>
    </div>

    <footer>
        <h3 class="footer_text">All @copyright reserved by Beauty Brush</h3>
    </footer>

    <script>
        $(document).ready(function() {
            $('#contact-link').click(function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#contact-section').offset().top
                }, 1000);
                $('#contact-section').slideDown();
                $('#about-section').slideUp();
            });
            
            $('#about-link').click(function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#about-section').offset().top
                }, 1000);
                $('#about-section').slideDown();
                $('#contact-section').slideUp();
            });
        });
    </script>
</body>
</html>
