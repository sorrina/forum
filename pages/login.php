<h1>Login</h1>
<?php if(isset($_ENV['login_error']) && $_ENV['login_error']): ?>
    <p>Login fehlgeschlagen!</p>
<?php endif; ?>

<form method="post" action="">
    <p>Name:<input type="text" name="user"></p>
    <p>Passwort:<input type="text" name="password"></p>
    <input type="submit" name="login_button">
</form>
