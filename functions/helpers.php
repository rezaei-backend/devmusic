<?php

define("BASE_URL", "http://localhost/devmusic/");

function url($url)
{
    return trim(BASE_URL, " /") . "/" . trim($url, "/");
}
function url_get($url, $id)
{
    return trim(BASE_URL, " /") . "/" . trim($url, "/") . "?id=$id";
}

function assets($path)
{
    return trim(BASE_URL, " /") . "/public" . "/" . trim($path, "/");
}

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    exit();
}
function redirect($url)
{
    $address = trim(BASE_URL, " /") . "/" . trim($url, " /");
    header("location: $address");
    exit();
}

function checkmethod()
{
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        return true;
    } else {
        return false;
    }
}







function Flash($text, $mode = "primary")
{
    switch ($mode) {
        case 'error':
            $class = "danger";
            break;
        case 'warning':
            $class = "warning";
        case 'success' || 'ok':
            $class = "success";
        default:
            $class = "primary";
            break;
    }

    $alert = "<div class='alert alert-$class' role='alert'>
            $text
        </div>";
    return $alert;
}


function Set_flash($text, $mode = "primary")
{
    session_start();
    $_SESSION['text'] = $text;
    $_SESSION['mode'] = $mode;
}
function Check_Flash()
{
    if (!empty($_SESSION["text"])) {
       echo Flash($_SESSION['text'] , $_SESSION['mode']);
    }
    session_unset();
    
}
// Set_flash("ارور وجود دارد!", "error");
// var_dump($_SESSION);
// function CheckFlash(){

// }
