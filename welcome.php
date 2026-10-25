<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

include 'header.inc';
?>

<h2>Welcome</h2>
<p>Welcome, <?php echo $_SESSION['user']; ?>!</p>

<?php include 'footer.inc'; ?>