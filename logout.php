<?php
require_once 'config.php';

// Destroy all session data
session_unset();
session_destroy();

// Redirect to login page
header('Location: login.php?success=' . urlencode('You have been logged out successfully'));
exit();
?>
