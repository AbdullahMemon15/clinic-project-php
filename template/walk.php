<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
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
                <li><a href="index.php" aria-label="Home">Home</a></li>
                <li><a href="registration.php" target="_self" aria-label="Patient Registration">Patient Registration</a></li>
                <li><a href="walk.php" target="_self"aria-label="Walk-In Registration">Walk-In Registration</a></li>
            </ul>
        </div>

    </nav>

    <div class="write-comment">
        <h2>Walk-In Registration</h2>

        <form action="<?php echo ($_SERVER['HTTP_HOST'] == 'localhost' ? 'http://localhost/project20230' : 'https://westwood-fe70547f7dd1.herokuapp.com') . '/walk.php'; ?>" method="post">



            <label>
                Full Name
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
            <button type="submit" name="button">Join the Wait list</button>

        </form>
    </div>
    <?php
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
function the_comments()
{
global $hello;
foreach ($hello as $result) {
    echo "<div class='comment'>";
    echo "<div class='comment-header'>";
    echo "<div class='ID'>Post ID: " . $result["ID"] . "</div>";
    echo "<div class='date'>Posted on " . $result["date"] . "</div>";
    echo "</div>";
    echo "<h3 class='comment-author'>Patient Name: " . $result["fullName"] . "</h3>";
    echo "<h3 class='comment-email'>Email: " . $result["email"] . "</h3>";
    echo "<div class='comment-reason'>Reason: " . $result["reason"] . "</div>";
    echo "</div>";
}
}
the_commenters();     
the_comments();
?>

<footer class="footer">
    Copyright &copy; 2024 Westwood Clinic<br>
    Last Updated on
    <script>
        document.write(document.lastModified);
    </script>
</footer>
</body>

</html>