<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />
    <link rel="icon" type="image/png" href="SVG/favicon.svg">

	 <title>Loading Page</title>

    <script>
      window.addEventListener("DOMContentLoaded", function() {
        var loader = document.querySelector(".loader");
        loader.style.display = "flex"; // show the loader

        // Hide the loader once the page finishes loading
        window.addEventListener("load", function() {
          loader.style.display = "none";
        });
      });
    </script>



</head>
	
	
	
<body>
	

   <div class="loader">
      <div class="dot dot-1"></div>
      <div class="dot dot-2"></div>
      <div class="dot dot-3"></div>
    </div>
	
	
	
	
	
	
	
	
	
	
	
<header class="header">
  <div class="container">
    <nav class="header__nav">
      <div class="header__logo">
        <a href="home.html"><img src="logo.png" alt="Logo"></a>
      </div>
      <div class="header__menu">
        <ul>
          
          <li><a href="portfolio page .html">Portfolio</a></li> 
          <li><a href="#about">About</a></li>
          <li><a href="#full_contacts">Contact</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>






 <section class="hero">
      <div class="hero__content">
        <h1 class="hero__title">Hello, I'm Stratos</h1>
        <p class="hero__subtitle">I'm a Graphic Designer & Illustrator</p>
        <a href="portfolio page .html" class="hero__btn">View Portfolio</a>
      </div>
 </section>


<section id="about">
  <div class="about-wrapper">
    <div class="about-image">
      <img src="profile icon.jpg" alt="About Me Image">
    </div>
    <div class="about-text">
      <h2>About Me</h2>
      <p>Hi there! I'm a graphic designer who's just getting started in the industry,
         and I couldn't be more excited. I believe that good design can change the world, 
         and I'm dedicated to creating work that's not only visually pleasing but also meaningful and impactful.</p>
      <p>
         I love using 
         my own illustrations in my projects and
         I have a soft spot for branding, print design, and all things digital, and I'm always on the lookout for new challenges 
         and opportunities to grow. 
      </p>
      <p>If you're looking for someone who's approachable, collaborative, and ready to make some magic,
          I'd love to chat! 
      </p>
      
    </div>
  </div>
	
	 <section class= "resume">
     
      <a href="resume(english & greek).pdf" class="hero__btn" download 	target="_blank">Download Resume</a>
    </section>
</section>

	
	
	
<section class="flexbox-about">
  <div class="flexbox-container">
	  
	   <div class="about-col about-col-right">
		  <h2>My Education and Training</h2>
        <ul>
          <li>Bachelor's degree in Graphic design, AKTO College </li>
          <li>Bachelor's degree in Statistics & Actuarial Financial Mathematics </li>
        </ul>
       
      </div>
    
      <div class="about-col about-col-left">
		   <h2>Off the Clock: What I Love to Do</h2>
        <div class="about-boxes">
          <div class="about-box">
            <img src="zografiki .svg" alt="Box 1">
          </div>
          <div class="about-box">
            <img src="gym.svg" alt="Box 2">
          </div>
          <div class="about-box">
            <img src="Asset 5.png" alt="Box 3">
          </div>
        </div>
        
      </div>
     
    
  </div>
</section>

<div id="full_contacts">
<section class="lets-talk">
  <h2>Let's Talk</h2>
  <ul class="contact-info">
    <li><i class="fas fa-envelope" style="color: #ff5722;"></i> stratis2rnas@gmail.com</li>
    <li><i class="fas fa-map-marker-alt" style="color: #ff5722;"></i> Thessaloniki,Greece</li>
    <li><i class="fas fa-phone" style="color: #ff5722;"></i>+306955363361</li>
  </ul>
  <ul class="social-media">
    <li><a href="https://www.behance.net/stratis2rnas"><i class="fa-brands fa-behance fa-shake fa-2xl" style="color: #ff5722;"></i></a></li>
    <li><a href="https://www.linkedin.com/in/stratos-tournas-a01a89277/"><i class="fa-brands fa-linkedin fa-shake fa-2xl" style="color: #ff5722;"></i></a></li>
    <li><a href="https://www.instagram.com/stratis2rnas/"><i class="fa-brands fa-instagram fa-shake fa-2xl" style="color: #ff5722;"></i></a></li>
  </ul>
</section>





<section id="contact">
  <h2 class="section-title">Contact Me</h2>
  <form method="post" action="home2.php">
    <div class="form-group">
      <label for="Name">Name</label>
      <input type="text" id="Name" name="Name" required>
    </div>
    <div class="form-group">
      <label for="Email">Email</label>
      <input type="Email" id="Email" name="Email" required>
    </div>
    <div class="form-group">
      <label for="Message">Message</label>
      <textarea id="Message" name="Message" required></textarea>
    </div>
    <button type="submit">Send</button>
  </form>
</section>
</div>

<?php
if (isset($_POST['Email'])) {

// EDIT THE FOLLOWING TWO LINES:
$email_to = "stratis2rnas@gmail.com";
$email_subject = "New form submissions";

function problem($error)
{
echo "We're sorry, but there were error(s) found with the form you submitted. ";
echo "These errors appear below.<br><br>";
echo $error . "<br><br>";
echo "Please go back and fix these errors.<br><br>";
die();
}

// validation expected data exists
if (
!isset($_POST['Name']) ||
!isset($_POST['Email']) ||
!isset($_POST['Message'])
) {
// problem('We're sorry, but there appears to be a problem with the form you submitted.');
}

$name = $_POST['Name']; // required
$email = $_POST['Email']; // required
$message = $_POST['Message']; // required

$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

if (!preg_match($email_exp, $email)) {
$error_message .= 'The Email address you entered does not appear to be valid.<br>';
}

$string_exp = "/^[A-Za-z .'-]+$/";

if (!preg_match($string_exp, $name)) {
$error_message .= 'The Name you entered does not appear to be valid.<br>';
}

if (strlen($message) < 2) {
$error_message .= 'The Message you entered do not appear to be valid.<br>';
}

if (strlen($error_message) > 0) {
problem($error_message);
}

$email_message = "Form details below.\n\n";

function clean_string($string)
{
$bad = array("content-type", "bcc:", "to:", "cc:", "href");
return str_replace($bad, "", $string);
}

$email_message .= "Name: " . clean_string($name) . "\n";
$email_message .= "Email: " . clean_string($email) . "\n";
$email_message .= "Message: " . clean_string($message) . "\n";

// create email headers
$headers = 'From: ' . $email . "\r\n" .
'Reply-To: ' . $email . "\r\n" .
'X-Mailer: PHP/' . phpversion() ;
mail($email_to, $email_subject, $email_message, $headers);
?>

<!-- INCLUDE YOUR SUCCESS MESSAGE BELOW -->

Thanks for getting in touch. We'll get back to you soon.

<?php
}
?>


</body>
</html>
