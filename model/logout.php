<?php
  require_once './authFunctions.php';

  if(isAuthorized())
    logOut();
  header('Location: ../view/authorization.php');
?>
