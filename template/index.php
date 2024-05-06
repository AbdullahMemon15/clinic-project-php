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
    <div class="write-comment">
      <h2>Registration</h2>

      <!-- <form action="http://localhost/project20230/index.php" method="post"> -->
        <form action="<?php echo ($_SERVER['HTTP_HOST'] == 'localhost' ? 'http://localhost/project20230' : 'https://https://westwood-fe70547f7dd1.herokuapp.com') . '/index.php'; ?>" method="post">


        <label>
          First Name:
          <input type="text" required name="firstname">
        </label>
        <label>
          last Name:
          <input type="text" required name="lastname">
        </label>
        
        <label>
          Gender:
          <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Non-binary">Non-binary</option>
            <option value="Trans">Trans</option>
            <option value="Non-confirming">Non-confirming</option>
          </select>

          <label>
            Email Address:
            <input type="email" required name="email">
          </label>
          <label>
            Date of Birth
            <input type="date" required name="dob">
          </label>
        </label>

        <label>
            Phone No
            <input type="text" required name="contactNo">
          </label>
        </label>

        <label>
            Insurance No
            <input type="text" required name="insuranceNo">
          </label>
        </label>

        <label>
            Address
            <input type="text" required name="address">
          </label>
        </label>
        <button type="submit"  name="button" id="btn">Register</button>

      </form>
    </div>
    <footer>
        Copyright &copy; 2022 Westwood Clinic<br>
        Last Updated on
        <script>
            document.write(document.lastModified);
        </script>
    </footer>
  </body>
</html>
