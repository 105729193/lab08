<?php include 'header.inc'; ?>

<h1>Login Form</h1>
<form method="post" action="process.php">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br><br>

    <!-- Hidden field with first initial + student ID -->
    <input type="hidden" name="token" value="T105729193">

    <input type="submit" value="Login">
</form>

<?php include 'footer.inc'; ?>