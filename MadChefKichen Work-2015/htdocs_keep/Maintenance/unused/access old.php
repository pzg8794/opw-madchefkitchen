<!doctype html>
<html lang=en>
<head>
<title>Register Page</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="includes.css">
<style type="text/css">
p.error {color:red; font-size:105%; font-weight:bold; text-align:center; }
</style>
</head>
<body>
  <div id="container">
    <?php include("header.php"); ?>
    <?php include("nav.php"); ?>
    <?php include("info-col.php"); ?>
    <div id="content"><!--Start of Page Content-->
      <p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $errors = array();
        if (empty($_POST['fname'])) {
        $errors[] = 'You did not enter your first name.';
        }
        else {$fn = trim($_POST['fname']);
        }
        if (empty($_POST['lname'])) {
        $errors[] = 'You did not enter your last name.';
        }
        else {$fn = trim($_POST['lname']);
        }
        if (empty($_POST['email'])) {
        $errors[] = 'You did not enter your email address.';
        }
        else {$fn = trim($_POST['email']);
        }
        if (!empty($_POST['psword1'])) {
          if ($_POST['psword1'] != $_POST['psword2']){
        $errors[] = 'Your passwords were not the same.';
        }
        else {$fn = trim($_POST['psword1']);
        }
        }
        else { $errors[] = 'You did not enter your password';
        }
        if (empty($errors)) {
        require ('msqlc.php');
        $q = "INSERT INTO users (user_id, fname, lname, email, psword, registration_date)
        VALUES (' ', '$fn', '$ln', '$e', SHA1('$p'), NOW() )";
        $result = @mysqli_query ($dbcon, $q);
        if ($resulr) {...header ("location: register-thanks.php");
        exit();
        ...}
        else {
        ....echo '<h2>System Error</h2>
        <p class="error">You could not be registered due to a system error, We apologize for any inconvenience.</p>;
        ....echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
        }
        mysqli_close($dbcon);
        include ('footer.php');
        exit();
        }
        else {
        echo '<h2>Error!</h2>
        <p class="error">The following error(s) occurred:<br>';
        foreach ($errors as $msg) {
        echo " - $msg<br>\n";
        }
        echo '</p><h3>Please try again.</h3><p><br></p>';
        }
        }
        ?>
        <h2>Register</h2>
        <form action="register-page.php" method="post">
          <p>
            <label class="label" for="fname">First Name:</label>
            <input id="fname" type="text"