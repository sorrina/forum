<?php

if(isset($_POST["login_button"])){
    $name = $_POST["user"];
    $pass = $_POST["password"];

    $_ENV['login_error'] = true;
    if ($database->has("user", ["AND" => ["name" => $name, "passwort" => $pass]]))
    {
        $id = $database->get("user", "iduser", ["AND" => ["name" => $name, "passwort" => $pass]]);
        $_SESSION["user"] = $id;
        $_ENV['login_error'] = false;
    }
}

?>
