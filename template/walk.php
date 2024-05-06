<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="script.js" defer></script>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="newstyle.css">
    <title>Westwood Clinic</title>
</head>

<body>
    <nav class="navbar">
        <div class="brand-title">Westwood Clinic</div>
        <a href="#" class="navbar-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>

        <div class="navbar-links">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="index.php" target="_self">Registration</a></li>
                <li><a href="walk.php" target="_self">Clinic</a></li>
                <li><a href="documentation.php">Documentation</a></li>
            </ul>
        </div>

    </nav>

    <!-- <h1>Westwood Clinic</h1> -->

    <div class="write-comment">
        <h2>Walk In Registration</h2>

        <form action="<?php echo ($_SERVER['HTTP_HOST'] == 'localhost' ? 'http://localhost/project20230' : 'https://westwood-fe70547f7dd1.herokuapp.com') . '/walk.php'; ?>" method="post">



            <label>
                fullName
                <input type="text" name="fullName" required>
            </label>

            <label>
                Email Address:
                <input type="email" name="email" required>
            </label>

            <label>
                Reason for Visit
                <select name="reason">
                    <option value="fever">fever</option>
                    <option value="Joint Pain and Osteoarthritis">Joint Pain and Osteoarthritis</option>
                    <option value="skin Disorder">skin Disorder</option>
                    <option value="Anxiety and Depression">Anxiety and Depression</option>
                    <option value="other">other</option>
                </select>
            </label>
            <button type="submit" name="button">Join the Waitlist</button>

        </form>
    </div>
    <?php
    function the_comments()
    {
        global $hello;
        foreach ($hello as $result) {
            echo "<div class='comment'>";
            echo "<div class='ID'>Post ID: " . $result["ID"] . "</div>";
            echo "<div class='date'>Posted on " . $result["date"] . "</div>";
            echo "<h3> patient Name:  " . $result["fullName"] . "</h3>";
            echo "<h3> Email:  " . $result["email"] . "</h3>";
            echo "<div class='mood'>Reason:" . $result["reason"] . "</div>";
            echo "</div>";
        }
    }
    function the_commenters()
    {
        global $patients;
        echo "</div><div class='commenters'><h2>patients in Line:  </h2>";
        echo "<ul>";
        foreach ($patients as $result) {
            echo "<li> " . $result["fullName"] . "</li>";
        }
        echo "</ul>";
        echo "</div>";
    }
    the_comments();
    the_commenters();
    ?>

    <footer>
        Copyright &copy; 2022 Westwood Clinic<br>
        Last Updated on
        <script>
            document.write(document.lastModified);
        </script>
    </footer>
</body>

</html>