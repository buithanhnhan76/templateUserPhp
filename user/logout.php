<?php
session_start();
// Delete current session
session_destroy();
// Redirect to the login page:
header('Location: ../user');
?>
<!-- done logout -->