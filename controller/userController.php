<?php
  $errors = [];

  if(!empty($_POST['login']) && !empty($_POST['password'])) {
    if(!empty($_POST['signIn'])) {
      if(login($_POST['login'], $_POST['password'])) {
        header('Location: ../view/index.php');
        die;
      } else $errors[] = 'Incorrect login or password';
    }
    if(!empty($_POST['signUp'])) {
      if(empty(userExistence($_POST['login']))) {
        if(register($_POST['login'], $_POST['password'])) {
          $errors[] = 'Registration is successful. Please, enter your personal data to sign in';
        }
      } else $errors[] = 'Login already exists. Choose another one';
    }
  } else $errors[] = 'Please, enter your personal data to sign in. Or sign up';

  if(!isAuthorized()) {
    header('Location: ../view/authorization.php');
    die;
  }
?>
