<?php
  require_once '../model/authFunctions.php';
  require_once '../controller/userController.php';
?>

<html lang="en">
<head>
    <title>Authorization</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Authorization</h1>
    <?php if(!empty($errors)): ?>
        <ul>
        <?php foreach($errors as $error): ?>
            <li><?php echo $error; ?></li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form method="POST">
        <div>
            <label>Login:</label>
            <input type="text" name="login" placeholder="Login">
        </div>
        <div>
            <label>Password:</label>
            <input type="text" name="password" placeholder="Password">
        </div>
        <input type="submit" name="signIn" value="Sign in">
        <input type="submit" name="signUp" value="Sign up">
    </form>
</body>
</html>
