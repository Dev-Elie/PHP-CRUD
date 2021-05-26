<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maddy Dior | Home</title>
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

        <?php require_once 'process.php'; ?>

        <?php if (isset($_SESSION['message'])): ?>

        <div>
            <?php echo $_SESSION['message'];
             unset($_SESSION['message']);?>

        </div>

        <?php endif ?>

        <?php
    $conn = mysqli_connect('localhost', 'root', '' , 'students') or die (mysqli_error($conn));
    $result = $conn->query("SELECT * FROM posts") or die($conn->error);
    // pre_r($result);
    // pre_r($result->fetch_assoc());
    // pre_r($result->fetch_assoc());
    ?>
        <div class="posts">
            <?php while($row = $result->fetch_assoc()):?>
            <div style="margin-bottom:2rem;">
            <figure>
            <img src="./images/android.png" alt="post image">
            </figure>
                <h3>
                    <?php echo $row['title'];?>
                </h3>
                <p>
                    <?php echo $row['body'];?>
                </p>
                <a href="home.php?edit=<?php echo $row['id'];?> "> Edit </a>
                <a href="process.php?delete=<?php echo $row['id'];?> "> Delete </a>

            </div>
            <?php endwhile; ?>
        </div>
        <?php
  
    function pre_r($array){
        echo '<pre>';
        print_r($array);
        echo '<pre>';
    }

    ?>
        <style>
            /* Home page styling */
            .posts {
                font-size: 15px;
                padding-left: 8%;
                padding-right: 8%;
                padding-top: 2%;
            }

            .main {
                font-size: 15px;
                padding-left: 8%;
                padding-right: 8%;
                padding-top: 1%;
                padding-bottom: 10%;
            }
            h3{
                font-family: 'Times New Roman', Times, serif;
            }
            p{
                font-family: serif;
                font-weight: lighter;
                font-size:17px;
            }
            figure img{
                width:400px;
                height:200px;
            }
            form {
                padding-top: 2rem;
            }

            input {
                width: 100%;
                padding: 10px;
            }

            textarea {
                margin-top: 20px;
                width: 100%;

            }

            button {
                width: 40%;
                height: 50px;
                cursor: pointer;
                margin-top: 20px;
                font-size: 18px;
            }

            a {
                margin-right: 10px;
            }
        </style>
        <div class="main">
            <h3>Create a new post</h3>
            <form action="process.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="text" placeholder="Title" name="title" value="<?php echo $title; ?>">
                <br>
                <textarea name="body" id="" cols="50" rows="10" placeholder="Type your post here"
                    value="<?php echo $body; ?>"></textarea>
                <br>

                <?php
                if ($update == true):
                ?>

                <button type="submit" name="update">Update</button>

                <?php else: ?>
                <button type="submit" name="post">Publish</button>
                <?php endif; ?>

            </form>
        </div>
    </main>
</body>
<script src="scripts.js"></script>

</html>