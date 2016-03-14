<?php

function is_eingeloggt(){
    return isset($_SESSION["user"]);
}

if(isset($_POST["login_button"])){
    $name = $_POST["user"];
    $pass = $_POST["password"];

    $_ENV['login_error'] = true;
    if ($database->has("user", ["AND" => ["name" => $name, "passwort" => $pass]]))
    {
        $id = $database->get("user", "iduser", ["AND" => ["name" => $name, "passwort" => $pass]]);
        $_SESSION["user"] = $id;
        $_ENV['login_error'] = false;
        header("Location: ?page=home");
    }
}

if(isset($_GET["logout"]) && is_eingeloggt()){
    unset($_SESSION["user"]);
}
