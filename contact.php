<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maddy Dior | Contact</title>
    <link rel="stylesheet" href="contact-about.css">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <header class="header">
        <nav class="navbar">
            <a href="home.php" class="nav-logo">Maddy Dior</a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="home.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Welcome
                        <?php echo $_SESSION['uname']; ?>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="logout.php" class="nav-link">Logout</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <main>
        <div class="contact">
            <h2>Find Us</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Nisl tincidunt eget nullam non nisi. Vel risus commodo viverra maecenas accumsan
                lacus. Feugiat in ante metus dictum at tempor. Neque ornare aenean euismod elementum. Gravida arcu ac
                tortor dignissim convallis. Risus nullam eget felis eget. Maecenas volutpat blandit aliquam etiam erat
                velit scelerisque in. Sed felis eget velit aliquet sagittis id consectetur purus ut. Viverra maecenas
                accumsan lacus vel facilisis volutpat. Et malesuada fames ac turpis. Eget nullam non nisi est sit amet.
                Quis vel eros donec ac odio tempor orci dapibus ultrices. Dictumst vestibulum rhoncus est pellentesque
                elit ullamcorper dignissim cras tincidunt. Nisi lacus sed viverra tellus in hac habitasse platea
                dictumst. Vel risus commodo viverra maecenas accumsan lacus vel. Justo nec ultrices dui sapien.
            </p>
        </div>

    </main>
</body>
<script src="scripts.js"></script>

</html>