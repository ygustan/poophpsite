<?php
require_once ROOT. "templates/header.php";
?>

<form action="POST">
    <label for="Email">Name
        <input type="Email" name="Email" id="Email">
    </label>
    <label for="Motdepasse">Password
        <input type="password" name="Motdepasse" id="Motdepasse">
    </label>
    <input type="submit" value="Login">
</form>

<?php
require_once ROOT. "templates/footer.php";
?>
