<?php
$message_sent = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    $message_sent = true;
    // mail("you@example.com","Contact Form",$message,"From: $name <$email>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BSIS Portfolio</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Bel Alaipo</h1>
    <nav>
        <button class="nav-btn" data-target="home">🏠 Home</button>
        <button class="nav-btn" data-target="about">👩‍💻 About</button>
        <button class="nav-btn" data-target="photos">📸 My Photos</button>
        <button class="nav-btn" data-target="contact">💌 Contact</button>
        <button id="darkModeToggle">🌙</button>
    </nav>
</header>

<section id="home" class="section">
    <div class="avatar-container">
        <img src="avatar.jpg" alt="Avatar" class="avatar">
    </div>
    <h2 id="typing-text"></h2>
</section>

<!-- About -->
<section id="about" class="section card">
    <h2>About Me</h2>
    <p>I am a BSIS student, passionate about technology and web development. I love learning new skills and building practical projects.</p>
</section>

<!-- My Photos -->
<section id="photos" class="section">
    <h2>My Photos</h2>
    <div class="projects-container">
        <div class="project-card">
            <a href="photo1.jpg" target="_blank">
                <img src="photo1.jpg" alt="Photo 1">
            </a>
        </div>
        <div class="project-card">
            <a href="photo2.jpg" target="_blank">
                <img src="photo2.jpg" alt="Photo 2">
            </a>
        </div>
        <div class="project-card">
            <a href="photo3.jpg" target="_blank">
                <img src="photo3.jpg" alt="Photo 3">
            </a>
        </div>
        <div class="project-card">
            <a href="photo4.jpg" target="_blank">
                <img src="photo4.jpg" alt="Photo 4">
            </a>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="section">
    <h2>Contact Me</h2>
    <?php if($message_sent): ?>
        <p class="success-message">Thank you! Your message has been sent.</p>
    <?php endif; ?>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
    <div class="contact-cards">
        <div class="contact-card">
            <h3>Email</h3>
            <p><a href="mailto:bel@example.com">bel@example.com</a></p>
        </div>
        <div class="contact-card">
            <h3>Facebook</h3>
            <p><a href="https://www.facebook.com/yourprofile" target="_blank">My Facebook</a></p>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2025 Bel Alaipo. All rights reserved.</p>
</footer>

<script src="script.js"></script>
</body>
</html>
