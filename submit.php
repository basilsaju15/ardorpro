<!DOCTYPE html>
<html>
  <head>
    <title>My Submit Page</title>
  </head>
  <body>
    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        echo "<h1>Thank you for submitting!</h1>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
      } else {
        header("Location: index.html");
        exit();
      }
    ?>
  </body>
</html>
